<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$dateFrom = isset( $vars['date-from'] ) ? $vars['date-from'] : date( 'Y-m-d', strtotime( 'today - 30 days' ) );
$dateTo   = isset( $vars['date-to'] ) ? $vars['date-to'] : date( 'Y-m-d' );
$minDate  = isset( $vars['min-date'] ) ? $vars['min-date'] : date( 'Y-m-d', strtotime( 'today - 30 days' ) );
$maxDate  = isset( $vars['max-date'] ) ? $vars['max-date'] : date( 'Y-m-d' );
$period   = isset( $vars['period'] ) ? $vars['period'] : '30';
?>
<div class="dgwt-wcas-analytics-date-filter"
	 data-period="<?php echo esc_attr( $period ); ?>"
	 data-date-from="<?php echo esc_attr( $dateFrom ); ?>"
	 data-date-to="<?php echo esc_attr( $dateTo ); ?>"
	 data-min-date="<?php echo esc_attr( $minDate ); ?>"
	 data-max-date="<?php echo esc_attr( $maxDate ); ?>">
	<h3><?php _e( 'Date range', 'ajax-search-for-woocommerce' ); ?></h3>
	<p class="dgwt-wcas-analytics-subtitle"><?php _e( 'Choose a start and end date, then click Filter to update the analytics below.', 'ajax-search-for-woocommerce' ); ?></p>

	<div class="dgwt-wcas-analytics-date-filter__controls">
		<div class="dgwt-wcas-analytics-date-filter__field">
			<label for="dgwt-wcas-analytics-date-from"><?php _e( 'From', 'ajax-search-for-woocommerce' ); ?></label>
			<input type="date"
				   id="dgwt-wcas-analytics-date-from"
				   class="js-dgwt-wcas-analytics-date-from"
				   value="<?php echo esc_attr( $dateFrom ); ?>"
				   min="<?php echo esc_attr( $minDate ); ?>"
				   max="<?php echo esc_attr( $maxDate ); ?>" />
		</div>

		<div class="dgwt-wcas-analytics-date-filter__field">
			<label for="dgwt-wcas-analytics-date-to"><?php _e( 'To', 'ajax-search-for-woocommerce' ); ?></label>
			<input type="date"
				   id="dgwt-wcas-analytics-date-to"
				   class="js-dgwt-wcas-analytics-date-to"
				   value="<?php echo esc_attr( $dateTo ); ?>"
				   min="<?php echo esc_attr( $minDate ); ?>"
				   max="<?php echo esc_attr( $maxDate ); ?>" />
		</div>

		<button type="button" class="button button-primary js-dgwt-wcas-analytics-apply-date">
			<?php _e( 'Filter', 'ajax-search-for-woocommerce' ); ?>
		</button>
	</div>

	<div class="dgwt-wcas-analytics-date-filter__presets">
		<button type="button" class="button-link js-dgwt-wcas-analytics-preset" data-preset="today"><?php _e( 'Today', 'ajax-search-for-woocommerce' ); ?></button>
		<button type="button" class="button-link js-dgwt-wcas-analytics-preset" data-preset="7"><?php _e( 'Last 7 days', 'ajax-search-for-woocommerce' ); ?></button>
		<button type="button" class="button-link js-dgwt-wcas-analytics-preset" data-preset="30"><?php _e( 'Last 30 days', 'ajax-search-for-woocommerce' ); ?></button>
	</div>
</div>
