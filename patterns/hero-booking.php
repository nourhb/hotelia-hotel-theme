<?php
/**
 * Title: Hero with booking bar
 * Slug: hotelia/hero-booking
 * Categories: hotelia
 * Description: Full-width luxury hero with headline and a booking bar mock.
 *
 * @package Hotelia
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-exterior.jpg","dimRatio":55,"overlayColor":"ink","minHeight":640,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-55 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Hotelia boutique hotel at dusk" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-exterior.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.28em","textTransform":"uppercase"},"color":{"text":"#e6cf9a"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#e6cf9a;font-size:0.9rem;letter-spacing:0.28em;text-transform:uppercase">✦ Boutique Hotel · Toronto ✦</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display"},"color":{"text":"#ffffff"}}} -->
			<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Where every stay feels like a story</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"#dfe6ec"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#dfe6ec;font-size:1.125rem">Elegant suites, a rooftop pool and fine dining — in the heart of the city since 1998.</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"hotelia-booking-bar","style":{"color":{"background":"#ffffff"},"border":{"radius":"14px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group hotelia-booking-bar has-background" style="background-color:#ffffff;border-radius:14px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:columns {"verticalAlignment":"center"} -->
				<div class="wp-block-columns are-vertically-aligned-center">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","textTransform":"uppercase","letterSpacing":"0.14em"},"color":{"text":"#5d6b7c"}}} -->
						<p class="has-text-color" style="color:#5d6b7c;font-size:0.8rem;letter-spacing:0.14em;text-transform:uppercase"><strong>Check-in</strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#1c2836"}}} -->
						<p class="has-text-color" style="color:#1c2836">Fri, Oct 16</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","textTransform":"uppercase","letterSpacing":"0.14em"},"color":{"text":"#5d6b7c"}}} -->
						<p class="has-text-color" style="color:#5d6b7c;font-size:0.8rem;letter-spacing:0.14em;text-transform:uppercase"><strong>Check-out</strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#1c2836"}}} -->
						<p class="has-text-color" style="color:#1c2836">Sun, Oct 18</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","textTransform":"uppercase","letterSpacing":"0.14em"},"color":{"text":"#5d6b7c"}}} -->
						<p class="has-text-color" style="color:#5d6b7c;font-size:0.8rem;letter-spacing:0.14em;text-transform:uppercase"><strong>Guests</strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"color":{"text":"#1c2836"}}} -->
						<p class="has-text-color" style="color:#1c2836">2 adults · 1 room</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:buttons -->
						<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">Check Availability</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
