<?php
/**
 * Title: Gallery masonry
 * Slug: hotelia/gallery-masonry
 * Categories: hotelia
 * Description: A photo gallery showcasing the hotel's spaces.
 *
 * @package Hotelia
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","letterSpacing":"0.24em","textTransform":"uppercase"},"color":{"text":"#c8a45c"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#c8a45c;font-size:0.85rem;letter-spacing:0.24em;text-transform:uppercase">✦ A Glimpse Inside ✦</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
	<h2 class="wp-block-heading has-text-align-center">The Gallery</h2>
	<!-- /wp:heading -->
	<!-- wp:spacer {"height":"2rem"} -->
	<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:gallery {"columns":3,"linkTo":"none"} -->
	<figure class="wp-block-gallery has-nested-images columns-3 is-cropped">
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/lobby.jpg" alt="Hotelia grand lobby"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/resort-pool.jpg" alt="Hotelia pool at golden hour"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/restaurant-interior.jpg" alt="Hotelia restaurant dining room"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/spa.jpg" alt="Hotelia spa treatment room"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/suite-deluxe.jpg" alt="Hotelia deluxe room"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bathroom.jpg" alt="Hotelia marble bathroom"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
