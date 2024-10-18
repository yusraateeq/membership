<?php
/**
 * Plugin Name: Knit Pay - Pro
 * Plugin URI: https://www.knitpay.org
 * Description: Add support of many Knit Pay Premium addons on Pay as you go basis.
 *
 * Version: 1.4.12.0
 * Requires at least: 6.5
 * Requires PHP: 8.0
 * Requires Plugins: knit-pay
 *
 * Author: KnitPay
 * Author URI: https://profiles.wordpress.org/knitpay/#content-plugins
 *
 * Text Domain: knit-pay-pro
 * Domain Path: /languages/
 *
 * License: GPL-3.0-or-later
 *
 * @author    KnitPay
 * @license   GPL-3.0-or-later
 * @package   KnitPay
 * @copyright 2020-2024 Knit Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! defined( 'KNIT_PAY_PRO' ) ) {
	define( 'KNIT_PAY_PRO', true );
}
define( 'KNIT_PAY_PRO_RAPIDAPI_BASE_URL', 'https://knit-pay-pro1.p.rapidapi.com/' );
define( 'KNIT_PAY_PRO_RAPIDAPI_HOST', 'knit-pay-pro1.p.rapidapi.com' );
define( 'KNIT_PAY_PRO_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Autoload.
 */
require_once __DIR__ . '/vendor/autoload_packages.php';

add_action( 'plugins_loaded', 'knit_pay_pro_dependency_check', -10 );
function knit_pay_pro_dependency_check() {
	if ( ! defined( 'KNITPAY_VERSION' ) || version_compare( KNITPAY_VERSION, '8.85.7.0', '<' ) ) {
		return;
	}
	
	define( 'KNIT_PAY_AWPCP', true );
	define( 'KNIT_PAY_BOOKLY', true );
	define( 'KNIT_PAY_BOOKLY_PRO', true );
	define( 'KNIT_PAY_BUYCRED', true );
	define( 'KNIT_PAY_CASHFREE', true );
	define( 'KNIT_PAY_CBK', true );
	define( 'KNIT_PAY_CCAVENUE', true );
	define( 'KNIT_PAY_CMI', true );
	define( 'KNIT_PAY_COINBASE', true );
	define( 'KNIT_PAY_EASEBUZZ', true );
	define( 'KNIT_PAY_EBS', true );
	define( 'KNIT_PAY_ELAVON_CONVERGE', true );
	define( 'KNIT_PAY_ENGINE_THEMES', true );
	define( 'KNIT_PAY_EVENTS_MANAGER_PRO', true );
	define( 'KNIT_PAY_FLUTTERWAVE', true );
	define( 'KNIT_PAY_FYGARO', true );
	define( 'KNIT_PAY_GET_EPAY', true );
	define( 'KNIT_PAY_GRAVITY_FORMS', true );
	define( 'KNIT_PAY_ICICI_EAZYPAY', true );
	define( 'KNIT_PAY_INDEED_ULTIMATE_MEMBERSHIP_PRO', true );
	define( 'KNIT_PAY_IYZICO', true );
	define( 'KNIT_PAY_LATEPOINT', true );
	define( 'KNIT_PAY_MEMBERPRESS', true );
	define( 'KNIT_PAY_MOTOPRESS_PRESS_HOTEL_BOOKING', true );
	define( 'KNIT_PAY_MPGS', true );
	define( 'KNIT_PAY_MULTI_GATEWAY', true );
	define( 'KNIT_PAY_MY_FATOORAH', true );
	define( 'KNIT_PAY_MYCRED', true );
	define( 'KNIT_PAY_MYCRED_BUYCRED', true );
	define( 'KNIT_PAY_NMI', true );
	define( 'KNIT_PAY_OPEN_MONEY', true );
	define( 'KNIT_PAY_ORDER_BOX', true );
	define( 'KNIT_PAY_PAYMARK_ONLINE_EFTPOS', true );
	define( 'KNIT_PAY_PAYREXX', true );
	define( 'KNIT_PAY_PAYTM', true );
	define( 'KNIT_PAY_PAYTR', true );
	define( 'KNIT_PAY_RESTRO_PRESS', true );
	define( 'KNIT_PAY_RTEC_PRO', true );
	define( 'KNIT_PAY_SBIEPAY', true );
	define( 'KNIT_PAY_SLYDEPAY', true );
	define( 'KNIT_PAY_SODEXO', true );
	define( 'KNIT_PAY_SPROUT_INVOICES', true );
	define( 'KNIT_PAY_TEAM_BOOKING', true );
	define( 'KNIT_PAY_THAWANI', true );
	define( 'KNIT_PAY_TICKERA', true );
	define( 'KNIT_PAY_VIK_WP', true );
	define( 'KNIT_PAY_WP_ADVERTS', true );
	define( 'KNIT_PAY_WPFORMS', true );
	define( 'KNIT_PAY_ZAAKPAY', true );
	define( 'KNIT_PAY_ZETA', true );

	new KnitPayProInit();
}

class KnitPayProInit {
	public function __construct() {
		add_filter( 'pronamic_pay_gateways', [ $this, 'update_gateways' ] );
		add_filter( 'pronamic_pay_plugin_integrations', [ $this, 'update_extensions' ] );
	}

	public function update_gateways( $gateways ) {
		$gateways[] = new \KnitPay\Gateways\CCAvenue\Integration();
		$gateways[] = new \KnitPay\Gateways\CBK\Integration();
		$gateways[] = new \KnitPay\Gateways\CMI\Integration();
		$gateways[] = new \KnitPay\Gateways\Coinbase\Integration();
		$gateways[] = new \KnitPay\Gateways\EBS\Integration();
		$gateways[] = new \KnitPay\Gateways\ElavonConverge\Integration();
		$gateways[] = new \KnitPay\Gateways\Flutterwave\Integration();
		$gateways[] = new \KnitPay\Gateways\Fygaro\Integration();
		$gateways[] = new \KnitPay\Gateways\IciciEazypay\Integration();
		$gateways[] = new \KnitPay\Gateways\Iyzico\Integration();
		$gateways[] = new \KnitPay\Gateways\MPGS\Integration();
		$gateways[] = new \KnitPay\Gateways\MultiGateway\Integration();
		$gateways[] = new \KnitPay\Gateways\MyFatoorah\Integration();
		$gateways[] = new \KnitPay\Gateways\NMI\Integration();
		$gateways[] = new \KnitPay\Gateways\OrderBox\Integration();
		$gateways[] = new \KnitPay\Gateways\PaymarkOE\Integration();
		$gateways[] = new \KnitPay\Gateways\Payrexx\Integration();
		$gateways[] = new \KnitPay\Gateways\Paytm\Integration();
		$gateways[] = new \KnitPay\Gateways\PhonePe\Integration();
		$gateways[] = new \KnitPay\Gateways\SBIePay\Integration();
		$gateways[] = new \KnitPay\Gateways\Slydepay\Integration();
		$gateways[] = new \KnitPay\Gateways\Sodexo\Integration();
		$gateways[] = new \KnitPay\Gateways\Thawani\Integration();
		$gateways[] = new \KnitPay\Gateways\Zaakpay\Integration();

		// PagSeguro
		// Zarinpal

		$gateways[] = new \KnitPay\Gateways\Omnipay\Integration(
			[
				'omnipay_class' => 'CyberSource_Hosted',
				'id'            => 'cybersource-hosted',
				'name'          => 'CyberSource',
				'beta'          => true,
			]
		);

		$gateways[] = new \KnitPay\Gateways\Omnipay\Integration(
			[
				'omnipay_class' => 'Paystack',
				'id'            => 'paystack',
				'name'          => 'Paystack',
			]
		);

		$gateways[] = new \KnitPay\Gateways\Omnipay\Integration(
			[
				'omnipay_class' => 'PayFast',
				'id'            => 'payfast',
				'name'          => 'PayFast',
				'beta'          => true,
			]
		);
		
		$gateways[] = new \KnitPay\Gateways\Omnipay\Integration(
			[
				'omnipay_class'       => 'ToyyibPay',
				'id'                  => 'toyyib-pay',
				'name'                => 'toyyibPay',
				'beta'                => true,
				'default_parameters'  => [
					'userSecretKey' => '',
					'categoryCode'  => '',
				],
				'transaction_options' => [
					'userSecretKey'           => '{config:userSecretKey}',
					'categoryCode'            => '{config:categoryCode}',
					'billName'                => '{payment_description}',
					'billDescription'         => '{payment_description}',
					'billPriceSetting'        => 1,
					'billPayorInfo'           => 1,
					'billAmount'              => '{amount}',
					'billReturnUrl'           => '{payment_return_url}',
					'billCallbackUrl'         => '{payment_return_url}',
					'billExternalReferenceNo' => '{transaction_id}',
					'billTo'                  => '{customer_name}',
					'billEmail'               => '{customer_email}',
					'billPhone'               => '{customer_phone}',
					'billSplitPayment'        => 0,
					'billSplitPaymentArgs'    => '',
					'billPaymentChannel'      => 0,
					'billDisplayMerchant'     => 1,
					'billAdditionalField'     => 0,
					'billCode'                => '{data:BillCode}',
				],
			]
		);

		$gateways[] = new \KnitPay\Gateways\Omnipay\Integration(
			[
				'omnipay_class'       => 'DPO',
				'id'                  => 'dpo',
				'name'                => 'DPO Pay',
				'beta'                => true,
				'default_parameters'  => [
					'companyToken' => '',
					'serviceType'  => '',
				],
				'transaction_options' => [
					'paymentCurrency'  => '{currency}',
					'companyToken'     => '{config:companyToken}',
					'serviceType'      => '{config:serviceType}',
					'transactionToken' => '{data:token}',
				],
			]
		);

		if ( version_compare( KNITPAY_VERSION, '8.87.11', '>' ) ) {
			$gateways[] = new \KnitPay\Gateways\Omnipay\Integration(
				[
					'omnipay_class'            => 'Ameria',
					'id'                       => 'ameria',
					'name'                     => 'Ameria',
					'beta'                     => true,
					'transaction_options'      => [
						'transactionId' => wp_rand( 100000000, 999999999 ), // Ameria allows only 9 digit integer.
						'paymentId'     => '{transaction_id}',
						'language'      => '{customer_language}',
					],
					'complete_purchase_method' => 'getOrderStatus',
				]
			);

			$gateways[] = new \KnitPay\Gateways\Omnipay\Integration(
				[
					'omnipay_class' => 'Eway_RapidShared',
					'id'            => 'eway',
					'name'          => 'eWay',
					'beta'          => true,
				]
			);

			$gateways[] = new \KnitPay\Gateways\Omnipay\Integration(
				[
					'omnipay_class'          => 'Midtrans_SnapWindowRedirection',
					'id'                     => 'midtrans',
					'name'                   => 'Midtrans',
					'beta'                   => true,
					'static_return_url'      => true,
					'accept_notification'    => true,
					'omnipay_transaction_id' => '{data:order_id}',
				]
			);

			// try to use avaibooksports/omnipay-redsys if edu27/omnipay-redsys does not work.
			$gateways[] = new \KnitPay\Gateways\Omnipay\Integration(
				[
					'omnipay_class'       => 'Redsys_Redirect',
					'id'                  => 'redsys',
					'name'                => 'RedSys',
					'beta'                => true,
					'transaction_options' => [
						'transactionId'    => '{payment_timestamp}' . wp_rand( 10, 99 ),
						'consumerLanguage' => '{customer_language}',
					],
				]
			);
		}

		if ( version_compare( KNITPAY_VERSION, '8.87', '>' ) ) {
			$gateways[] = new \KnitPay\Gateways\GetEpay\Integration();
			$gateways[] = new \KnitPay\Gateways\Paytr\Integration();
		}

		if ( version_compare( KNITPAY_VERSION, '8.87.6', '>' ) ) {
			$gateways[] = new \KnitPay\Gateways\Razorpay\Integration(
				[
					'id'   => 'razorpay-pro',
					'name' => 'Razorpay Pro (API keys Integration)',
				]
			);
		}

		if ( version_compare( KNITPAY_VERSION, '8.88', '>' ) ) {
			$gateways[] = new \KnitPay\Gateways\MercadoPago\Integration();
		}

		// Return gateways.
		return $gateways;
	}

	public function update_extensions( $integrations ) {
		$integrations[] = new \KnitPay\Extensions\AWPCP\Extension();
		$integrations[] = new \KnitPay\Extensions\BooklyPro\Extension();
		$integrations[] = new \KnitPay\Extensions\EventsManagerPro\Extension();
		$integrations[] = new \Pronamic\WordPress\Pay\Extensions\FormidableForms\Extension();
		$integrations[] = new \Pronamic\WordPress\Pay\Extensions\GravityForms\Extension();
		$integrations[] = new \KnitPay\Extensions\IndeedUltimateMembershipPro\Extension();
		$integrations[] = new \KnitPay\Extensions\LatePoint\Extension();
		$integrations[] = new \Pronamic\WordPress\Pay\Extensions\MemberPress\Extension();
		$integrations[] = new \KnitPay\Extensions\MotopressHotelBooking\Extension();
		$integrations[] = new \KnitPay\Extensions\MycredBuycred\Extension();
		$integrations[] = new \Pronamic\WordPress\Pay\Extensions\RestrictContentPro\Extension();
		$integrations[] = new \KnitPay\Extensions\RestroPress\Extension();
		$integrations[] = new \KnitPay\Extensions\RegistrationsForTheEventsCalendarPro\Extension();
		$integrations[] = new \KnitPay\Extensions\SproutInvoices\Extension();
		$integrations[] = new \KnitPay\Extensions\TeamBooking\Extension();
		$integrations[] = new \KnitPay\Extensions\Tickera\Extension();
		$integrations[] = new \KnitPay\Extensions\VikWP\Extension();
		$integrations[] = new \KnitPay\Extensions\WPAdverts\Extension();
		$integrations[] = new \KnitPay\Extensions\WPForms\Extension();

		return $integrations;
	}
}
