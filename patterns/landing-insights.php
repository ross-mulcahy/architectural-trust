<?php
/**
 * Title: Market Intelligence
 * Slug: architectural-trust/landing-insights
 * Categories: architectural-trust-landing
 * Description: A dynamic latest-posts section designed for the homepage or a campaign landing page.
 * Keywords: editorial, news, posts, intelligence
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"at-home-insights-layout","backgroundColor":"surface-container-lowest","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull at-home-insights-layout has-surface-container-lowest-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"textColor":"secondary","fontSize":"label-md","fontFamily":"label","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.3em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<p class="has-secondary-color has-text-color has-label-md-font-size has-label-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-weight:600;letter-spacing:0.3em;text-transform:uppercase">MARKET INTELLIGENCE</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textColor":"primary","style":{"typography":{"fontSize":"var:preset|font-size|display-sm","fontWeight":"800","letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontFamily":"headline","className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-headline-font-family" style="margin-bottom:var(--wp--preset--spacing--30);font-size:var(--wp--preset--font-size--display-sm);font-weight:800;letter-spacing:-0.02em">Fresh reporting, ready for the homepage.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-lg","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<p class="has-on-surface-variant-color has-text-color has-body-lg-font-size" style="margin-bottom:var(--wp--preset--spacing--40)">This section now pulls from published posts, so your homepage highlights stay current as soon as the editorial team publishes a new story.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary-container","textColor":"on-primary","style":{"border":{"radius":"0.125rem"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-on-primary-color has-primary-container-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">View All Articles</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"bottom":"var:preset|spacing|40"}},"border":{"bottom":{"width":"1px","style":"solid","color":"var:preset|color|outline-variant"}}}} -->
<div class="wp-block-columns is-stacked-on-mobile" style="border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"128px"} -->
<div class="wp-block-column" style="flex-basis:128px"><!-- wp:post-featured-image {"isLink":true,"width":"128px","height":"128px","style":{"border":{"radius":"0.25rem"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"secondary","fontSize":"label-md","fontFamily":"label"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"textColor":"primary","fontSize":"title-lg","fontFamily":"headline","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"className":"wp-block-heading"} /-->

<!-- wp:post-excerpt {"excerptLength":18,"textColor":"on-surface-variant","fontSize":"body-sm","moreText":"","showMoreOnNewLine":false} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size">Publish a few posts and the latest intelligence will automatically appear here.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
