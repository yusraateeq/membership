<?php
/**
 * Extension
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2023 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay\Extensions\Give
 */

namespace Pronamic\WordPress\Pay\Extensions\Give;

use Pronamic\WordPress\Pay\AbstractPluginIntegration;
use Pronamic\WordPress\Pay\Core\PaymentMethods;
use Pronamic\WordPress\Pay\Payments\PaymentStatus;
use Pronamic\WordPress\Pay\Payments\Payment;
use Pronamic\WordPress\Pay\Plugin;

/**
 * Title: Give extension
 * Description:
 * Copyright: 2005-2023 Pronamic
 * Company: Pronamic
 *
 * @author  Reüel van der Steege
 * @version 2.1.1
 * @since   1.0.0
 */
class Extension extends AbstractPluginIntegration {
	/**
	 * Slug
	 *
	 * @var string
	 */
	const SLUG = 'give';

	/**
	 * Gateways.
	 *
	 * @var array|null
	 */
	private $gateways;

	/**
	 * Construct Give plugin integration.
	 *
	 * @return void
	 */
	public function __construct() {
		parent::__construct(
			[
				'name' => __( 'Give', 'pronamic_ideal' ),
			]
		);

		// Dependencies.
		$dependencies = $this->get_dependencies();

		$dependencies->add( new GiveDependency() );

		// Add Phone Number field in Give donation form which is mandatory for most of the India Payment Gateways
		require_once 'custom-fields-phone.php';
	}

	/**
	 * Setup.
	 *
	 * @return void
	 */
	public function setup() {
		\add_filter( 'pronamic_payment_source_description_' . self::SLUG, [ $this, 'source_description' ], 10, 2 );
		\add_filter( 'pronamic_payment_source_text_' . self::SLUG, [ $this, 'source_text' ], 10, 2 );
		\add_filter( 'pronamic_payment_source_url_' . self::SLUG, [ $this, 'source_url' ], 10, 2 );

		// Check if dependencies are met and integration is active.
		if ( ! $this->is_active() ) {
			return;
		}

		\add_action( 'pronamic_payment_status_update_' . self::SLUG, [ $this, 'status_update' ], 10, 1 );
		\add_filter( 'pronamic_payment_redirect_url_' . self::SLUG, [ $this, 'redirect_url' ], 10, 2 );

		\add_filter( 'give_payment_gateways', [ $this, 'give_payment_gateways' ] );
		\add_filter( 'give_enabled_payment_gateways', [ $this, 'give_enabled_payment_gateways' ] );
	}

	/**
	 * Give payments gateways.
	 *
	 * @link https://github.com/WordImpress/Give/blob/1.3.6/includes/gateways/functions.php#L37
	 *
	 * @param array $gateways Gateways.
	 *
	 * @return array
	 */
	public function give_payment_gateways( $gateways ) {
		if ( null === $this->gateways ) {
			$this->gateways = [];

			// Get active and remove unsupported recurring-only payment methods.
			$payment_methods = array_merge( [ null ], PaymentMethods::get_active_payment_methods() );

			// Create gateways for payment methods.
			foreach ( $payment_methods as $payment_method ) {
				// Gateway identifier.
				$id = 'pronamic_pay';

				if ( ! empty( $payment_method ) ) {
					$id = \sprintf( 'pronamic_pay_%s', $payment_method );

					// Use `mister_cash` instead of `bancontact` for backwards compatibility.
					if ( PaymentMethods::BANCONTACT === $payment_method ) {
						$id = 'pronamic_pay_mister_cash';
					}
				}

				// New gateway.
				$gateway = new Gateway( $id, $payment_method );

				$name = PaymentMethods::get_name( $payment_method );
				$name = empty( $name ) ? \__( 'Pay Online', 'pronamic_ideal' ) : $name; // Added by Knit Pay.

				// Admin label.
				$admin_label = \__( 'Knit Pay', 'pronamic_ideal' );

				if ( null !== $payment_method ) {
					$admin_label = sprintf( '%s - %s', \__( 'Knit Pay', 'pronamic_ideal' ), $name );
				}

				$this->gateways[ $gateway->id ] = [
					'admin_label'    => $admin_label,
					'checkout_label' => $name,
				];
			}

			// Sort gateways alphabetically.
			uasort(
				$this->gateways,
				function ( $a, $b ) {
					return strnatcasecmp( $a['admin_label'], $b['admin_label'] );
				}
			);
		}

		return array_merge( $gateways, $this->gateways );
	}


	/**
	 * Give enabled payment gateways.
	 *
	 * @param array $gateways Gateways.
	 * @return array
	 */
	public function give_enabled_payment_gateways( $gateways ) {
		foreach ( $gateways as $key => $gateway ) {
			// Check if gateway is ours.
			if ( 'pronamic_pay' !== \substr( $key, 0, 12 ) ) {
				continue;
			}

			// Get configuration ID.
			$config_id = \give_get_option( \sprintf( 'give_%s_configuration', $key ) );

			if ( empty( $config_id ) ) {
				$config_id = \get_option( 'pronamic_pay_config_id' );
			}

			// Check if gateway exists for given configuration ID.
			if ( null === Plugin::get_gateway( $config_id ) ) {
				unset( $gateways[ $key ] );
			}
		}

		return $gateways;
	}

	/**
	 * Payment redirect URL filter.
	 *
	 * @param string  $url     Redirect URL.
	 * @param Payment $payment Payment.
	 *
	 * @return string
	 */
	public function redirect_url( $url, $payment ) {
		switch ( $payment->get_status() ) {
			case PaymentStatus::CANCELLED:
			case PaymentStatus::FAILURE:
				$url = give_get_failed_transaction_uri();

				break;
			case PaymentStatus::SUCCESS:
				$url = give_get_success_page_uri();

				break;
		}

		return $url;
	}

	/**
	 * Update lead status of the specified payment
	 *
	 * @link https://github.com/Charitable/Charitable/blob/1.1.4/includes/gateways/class-charitable-gateway-paypal.php#L229-L357
	 *
	 * @param Payment $payment Payment.
	 */
	public function status_update( Payment $payment ) {
		$donation_id = (int) $payment->get_source_id();

		switch ( $payment->get_status() ) {
			case PaymentStatus::CANCELLED:
				give_update_payment_status( $donation_id, 'cancelled' );

				break;
			case PaymentStatus::EXPIRED:
				give_update_payment_status( $donation_id, 'abandoned' );

				break;
			case PaymentStatus::FAILURE:
				give_update_payment_status( $donation_id, 'failed' );

				break;
			case PaymentStatus::SUCCESS:
				give_update_payment_status( $donation_id, 'publish' );

				break;
			case PaymentStatus::OPEN:
			default:
				give_update_payment_status( $donation_id, 'pending' );

				break;
		}
	}

	/**
	 * Source column
	 *
	 * @param string  $text    Source text.
	 * @param Payment $payment Payment.
	 *
	 * @return string
	 */
	public function source_text( $text, Payment $payment ) {
		$source_id = (int) $payment->source_id;

		$text = __( 'Give', 'pronamic_ideal' ) . '<br />';

		$text .= sprintf(
			'<a href="%s">%s</a>',
			get_edit_post_link( $source_id ),
			/* translators: %s: source id */
			sprintf( __( 'Donation %s', 'pronamic_ideal' ), $source_id )
		);

		return $text;
	}

	/**
	 * Source description.
	 *
	 * @param string  $description Source description.
	 * @param Payment $payment     Payment.
	 *
	 * @return string
	 */
	public function source_description( $description, Payment $payment ) {
		return __( 'Give Donation', 'pronamic_ideal' );
	}

	/**
	 * Source URL.
	 *
	 * @param string  $url     Source URL.
	 * @param Payment $payment payment.
	 *
	 * @return string
	 */
	public function source_url( $url, Payment $payment ) {
		return get_edit_post_link( (int) $payment->source_id );
	}
}
