<?php
/**
 * Title: About story with stats
 * Slug: hotelia/about-story
 * Categories: hotelia
 * Description: Hotel story with photo and animated stat counters.
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
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","letterSpacing":"0.24em","textTransform":"uppercase"},"color":{"text":"#c8a45c"}}} -->
			<p class="has-text-color" style="color:#c8a45c;font-size:0.85rem;letter-spacing:0.24em;text-transform:uppercase">✦ Our Story ✦</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
			<h2 class="wp-block-heading">A Toronto landmark since 1998</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"},"color":{"text":"#5d6b7c"}}} -->
			<p class="has-text-color" style="color:#5d6b7c;font-size:1.05rem">What began as a twelve-room guesthouse is now the city's most loved boutique hotel. We kept the soul — warm smiles, honest cooking, rooms that feel like home — and added everything a modern traveller needs.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#5d6b7c"}}} -->
			<p class="has-text-color" style="color:#5d6b7c">Every suite is dressed in natural fabrics, every corridor lit to flatter, and every member of our team trained to anticipate — not just to serve.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"className":"is-style-soft-frame","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/exterior-day.jpg" alt="Hotelia hotel building during the day"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:spacer {"height":"2.5rem"} -->
	<div style="height:2.5rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:group {"align":"full","style":{"color":{"background":"#0d1420","text":"#ffffff"},"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-background has-text-color" style="background-color:#0d1420;color:#ffffff;border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontFamily":"var:preset|font-family|display"},"color":{"text":"#e6cf9a"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#e6cf9a;font-size:2.5rem"><span class="hotelia-count" data-count="28">28</span></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","letterSpacing":"0.14em"},"color":{"text":"#b8c4d0"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#b8c4d0;font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">Years of hospitality</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontFamily":"var:preset|font-family|display"},"color":{"text":"#e6cf9a"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#e6cf9a;font-size:2.5rem"><span class="hotelia-count" data-count="120">120</span></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","letterSpacing":"0.14em"},"color":{"text":"#b8c4d0"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#b8c4d0;font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">Elegant rooms &amp; suites</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontFamily":"var:preset|font-family|display"},"color":{"text":"#e6cf9a"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#e6cf9a;font-size:2.5rem"><span class="hotelia-count" data-count="98">98</span>%</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","letterSpacing":"0.14em"},"color":{"text":"#b8c4d0"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#b8c4d0;font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">Guests would return</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","fontFamily":"var:preset|font-family|display"},"color":{"text":"#e6cf9a"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#e6cf9a;font-size:2.5rem"><span class="hotelia-count" data-count="12">12</span></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","letterSpacing":"0.14em"},"color":{"text":"#b8c4d0"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#b8c4d0;font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">Hospitality awards</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
