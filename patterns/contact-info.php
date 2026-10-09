<?php
/**
 * Title: Contact information
 * Slug: hotelia/contact-info
 * Categories: hotelia
 * Description: Contact columns with hotel photo, address, hours and phone.
 *
 * @package Hotelia
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"className":"is-style-soft-frame","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hotel-facade.jpg" alt="Hotelia hotel facade"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","letterSpacing":"0.24em","textTransform":"uppercase"},"color":{"text":"#c8a45c"}}} -->
			<p class="has-text-color" style="color:#c8a45c;font-size:0.85rem;letter-spacing:0.24em;text-transform:uppercase">✦ Find Us ✦</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h2 class="wp-block-heading">Get in Touch</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"},"color":{"text":"#5d6b7c"}}} -->
			<p class="has-text-color" style="color:#5d6b7c;font-size:1.05rem">Our team replies within a few hours — for reservations, events or anything in between.</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph -->
				<p><strong>Address</strong><br>88 Bay Street, Toronto, ON M5J 0A9</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><strong>Reservations</strong><br>+1 (416) 555-0187 · stay@hotelia.com</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><strong>Front desk</strong><br>Open 24 hours, every day</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
