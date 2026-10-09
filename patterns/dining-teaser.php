<?php
/**
 * Title: Dining teaser
 * Slug: hotelia/dining-teaser
 * Categories: hotelia
 * Description: Restaurant teaser with two food photos and reservation CTA.
 *
 * @package Hotelia
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#faf7f0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#faf7f0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:gallery {"columns":2,"linkTo":"none"} -->
			<figure class="wp-block-gallery has-nested-images columns-2 is-cropped">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/restaurant.jpg" alt="Fine dining dish at Hotelia restaurant"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/spa-massage.jpg" alt="Relaxing spa treatment at Hotelia"/></figure>
				<!-- /wp:image -->
			</figure>
			<!-- /wp:gallery -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","letterSpacing":"0.24em","textTransform":"uppercase"},"color":{"text":"#c8a45c"}}} -->
			<p class="has-text-color" style="color:#c8a45c;font-size:0.85rem;letter-spacing:0.24em;text-transform:uppercase">✦ Taste &amp; Relax ✦</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h2 class="wp-block-heading">Dining &amp; Spa</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"},"color":{"text":"#5d6b7c"}}} -->
			<p class="has-text-color" style="color:#5d6b7c;font-size:1.05rem">Mornings begin with fresh pastries in our sunlit dining room; evenings end with a tasting menu and a nightcap at the bar. In between, our spa melts the day away.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item -->
				<li><strong>La Table d'Or</strong> — seasonal fine dining, Tue–Sun from 6 PM</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>The Lobby Bar</strong> — cocktails and live jazz, nightly</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong>Serenity Spa</strong> — treatments daily from 9 AM to 9 PM</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Reserve a Table</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
