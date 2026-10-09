<?php
/**
 * Title: Booking call to action
 * Slug: hotelia/cta-booking
 * Categories: hotelia
 * Description: Full-width booking CTA with a pool photo and gold button.
 *
 * @package Hotelia
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/resort-pool.jpg","dimRatio":60,"overlayColor":"ink","minHeight":420,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Hotelia rooftop pool" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/resort-pool.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#ffffff"}}} -->
			<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Your perfect stay is one click away</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem"},"color":{"text":"#dfe6ec"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#dfe6ec;font-size:1.1rem">Book direct for the best rate — 10% off, free cancellation and a welcome gift.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"style":{"typography":{"fontSize":"1.1rem"}},"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="font-size:1.1rem" href="#">Book Your Stay</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-gold-outline"} -->
			<div class="wp-block-button is-style-gold-outline"><a class="wp-block-button__link wp-element-button" href="#">Call +1 (416) 555-0187</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
