<?php
/**
 * Title: Newsletter Signup
 * Slug: architectural-trust/newsletter-signup
 * Categories: architectural-trust-news
 * Description: A reusable newsletter sign-up strip for article pages, campaigns, and home sections.
 * Keywords: newsletter, signup, email, editorial
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"primary-fixed-dim","fontSize":"label-md","fontFamily":"label","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<p class="has-primary-fixed-dim-color has-text-color has-label-md-font-size has-label-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Newsletter Signup</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"white","fontSize":"display-sm","fontFamily":"headline","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-display-sm-font-size has-headline-font-family" style="margin-bottom:var(--wp--preset--spacing--20)">Keep your audience close to the next story.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary-fixed","fontSize":"body-lg","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<p class="has-primary-fixed-color has-text-color has-body-lg-font-size" style="margin-bottom:var(--wp--preset--spacing--40)">Use this block as a flexible editorial signup moment on landing pages, article pages, or campaign pages.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"border":{"radius":"0.125rem"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/login/' ) ); ?>" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">Subscribe Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
