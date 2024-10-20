<?php
/**
 * Restrict Content Pro edit membership after.
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2023 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay\Extensions\RestrictContentPro
 *
 * @link https://gitlab.com/pronamic-plugins/restrict-content-pro/blob/3.0.10/includes/admin/memberships/edit-membership.php#L285-294
 */

?>
<tr>
	<th scope="row" class="row-title">
		<?php esc_html_e( 'Knit Pay Subscription:', 'pronamic_ideal' ); ?>
	</th>
	<td>
		<?php

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();

				printf(
					'<a href="%s">%s</a>',
					esc_url( get_edit_post_link() ),
					esc_html( get_the_ID() )
				);
			}
		}

		?>
	</td>
</tr>
