<?php
/**
 * Title: Rooms and suites showcase
 * Slug: hotelia/rooms-showcase
 * Categories: hotelia
 * Description: Three elegant room cards with photos, amenities and nightly prices.
 *
 * @package Hotelia
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","letterSpacing":"0.24em","textTransform":"uppercase"},"color":{"text":"#c8a45c"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#c8a45c;font-size:0.85rem;letter-spacing:0.24em;text-transform:uppercase">✦ Stay With Us ✦</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","className":"is-style-gold-rule","style":{"typography":{"fontFamily":"var:preset|font-family|display"}}} -->
	<h2 class="wp-block-heading has-text-align-center is-style-gold-rule">Rooms &amp; Suites</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.05rem"},"color":{"text":"#5d6b7c"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#5d6b7c;font-size:1.05rem">From cosy deluxe rooms to our breathtaking presidential suite — every room is a quiet retreat.</p>
	<!-- /wp:paragraph -->
	<!-- wp:spacer {"height":"2rem"} -->
	<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-room-card hotelia-reveal","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-room-card hotelia-reveal has-background" style="background-color:#ffffff">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/suite-deluxe.jpg" alt="Deluxe King Room with elegant bedding"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.4rem"}}} -->
					<h3 class="wp-block-heading" style="font-size:1.4rem">Deluxe King Room</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#5d6b7c"}}} -->
					<p class="has-text-color" style="color:#5d6b7c;font-size:0.95rem">32 m² · King bed · City view · Marble bathroom</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#0d1420"}}} -->
						<p class="has-text-color" style="color:#0d1420;font-size:1.25rem"><strong>$189</strong> <span style="font-size:0.9rem;color:#5d6b7c">/ night</span></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-gold-outline"} -->
						<div class="wp-block-button is-style-gold-outline"><a class="wp-block-button__link wp-element-button">Reserve</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-room-card hotelia-reveal","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-room-card hotelia-reveal has-background" style="background-color:#ffffff">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/suite-executive.jpg" alt="Executive Suite with sitting area"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.4rem"}}} -->
					<h3 class="wp-block-heading" style="font-size:1.4rem">Executive Suite</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#5d6b7c"}}} -->
					<p class="has-text-color" style="color:#5d6b7c;font-size:0.95rem">54 m² · King bed · Lounge access · Lake view</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#0d1420"}}} -->
						<p class="has-text-color" style="color:#0d1420;font-size:1.25rem"><strong>$329</strong> <span style="font-size:0.9rem;color:#5d6b7c">/ night</span></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-gold-outline"} -->
						<div class="wp-block-button is-style-gold-outline"><a class="wp-block-button__link wp-element-button">Reserve</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-room-card hotelia-reveal","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-room-card hotelia-reveal has-background" style="background-color:#ffffff">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/suite-presidential.jpg" alt="Presidential Suite with dramatic lighting"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.4rem"}}} -->
					<h3 class="wp-block-heading" style="font-size:1.4rem">Presidential Suite</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#5d6b7c"}}} -->
					<p class="has-text-color" style="color:#5d6b7c;font-size:0.95rem">120 m² · Private terrace · Butler service</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#0d1420"}}} -->
						<p class="has-text-color" style="color:#0d1420;font-size:1.25rem"><strong>$749</strong> <span style="font-size:0.9rem;color:#5d6b7c">/ night</span></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-gold-outline"} -->
						<div class="wp-block-button is-style-gold-outline"><a class="wp-block-button__link wp-element-button">Reserve</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
