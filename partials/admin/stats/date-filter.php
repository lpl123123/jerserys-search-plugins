<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="dgwt-wcas-analytics-date-filter"
	 data-period="<?php echo esc_attr( $vars['period'] ); ?>"
	 data-date-from="<?php echo esc_attr( $vars['date-from'] ); ?>"
	 data-date-to="<?php echo esc_attr( $vars['date-to'] ); ?>">
	<h3><?php _e( 'Date range', 'ajax-search-for-woocommerce' ); ?></h3>
	<p class="dgwt-wcas-analytics-subtitle"><?php _e( 'Filter search analytics by a selected time period.', 'ajax-search-for-woocommerce' ); ?></p>

	<div class="dgwt-wcas-analytics-date-filter__controls">
		<label class="screen-reader-text" for="dgwt-wcas-analytics-period"><?php _e( 'Period', 'ajax-search-for-woocommerce' ); ?></label>
		<select id="dgwt-wcas-analytics-period" class="js-dgwt-wcas-analytics-period">
			<option value="today" <?php selected( $vars['period'], 'today' ); ?>><?php _e( 'Today', 'ajax-search-for-woocommerce' ); ?></option>
			<?php if ( $vars['expiration-days'] >= 7 ) : ?>
				<option value="7" <?php selected( $vars['period'], '7' ); ?>><?php _e( 'Last 7 days', 'ajax-search-for-woocommerce' ); ?></option>
			<?php endif; ?>
			<?php if ( $vars['expiration-days'] >= 30 ) : ?>
				<option value="30" <?php selected( $vars['period'], '30' ); ?>><?php _e( 'Last 30 days', 'ajax-search-for-woocommerce' ); ?></option>
			<?php endif; ?>
			<option value="custom" <?php selected( $vars['period'], 'custom' ); ?>><?php _e( 'Custom range', 'ajax-search-for-woocommerce' ); ?></option>
		</select>

		<span class="dgwt-wcas-analytics-date-filter__custom js-dgwt-wcas-analytics-custom-range" <?php echo $vars['period'] === 'custom' ? '' : 'style="display:none;"'; ?>>
			<label for="dgwt-wcas-analytics-date-from"><?php _e( 'From', 'ajax-search-for-woocommerce' ); ?></label>
			<input type="date"
				   id="dgwt-wcas-analytics-date-from"
				   class="js-dgwt-wcas-analytics-date-from"
				   value="<?php echo esc_attr( $vars['date-from'] ); ?>"
				   min="<?php echo esc_attr( $vars['min-date'] ); ?>"
				   max="<?php echo esc_attr( $vars['max-date'] ); ?>" />

			<label for="dgwt-wcas-analytics-date-to"><?php _e( 'To', 'ajax-search-for-woocommerce' ); ?></label>
			<input type="date"
				   id="dgwt-wcas-analytics-date-to"
				   class="js-dgwt-wcas-analytics-date-to"
				   value="<?php echo esc_attr( $vars['date-to'] ); ?>"
				   min="<?php echo esc_attr( $vars['min-date'] ); ?>"
				   max="<?php echo esc_attr( $vars['max-date'] ); ?>" />

			<button type="button" class="button js-dgwt-wcas-analytics-apply-date"><?php _e( 'Apply', 'ajax-search-for-woocommerce' ); ?></button>
		</span>
	</div>
</div>
