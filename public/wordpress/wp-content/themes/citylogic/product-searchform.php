<?php
/**
 * The template for displaying the product search form
 *
 */
?>
<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'citylogic' ); ?></label>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'citylogic' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'citylogic' ); ?>" />
	<div class="search-submit-container">
		<a class="search-submit">
			<i class="otb-fa otb-fa-search"></i>
		</a>
	</div>
	<input type="hidden" name="post_type" value="product" />
</form>
