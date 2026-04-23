<?php
/**
 * Title: News Content Grid
 * Slug: architectural-trust/news-content
 * Categories: architectural-trust-news
 * Description: A dynamic editorial layout with a featured post, recent stories, and newsletter/sidebar content.
 * Keywords: editorial, query, posts, newsletter
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"at-news-layout","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull at-news-layout" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":20,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"0.25rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.6875rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"label"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"primary","fontSize":"headline-sm","fontFamily":"headline","className":"wp-block-heading"} /-->

<!-- wp:post-excerpt {"excerptLength":32,"textColor":"on-surface-variant","fontSize":"body-sm","moreText":"","showMoreOnNewLine":false} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"on-surface-variant","fontSize":"label-md","fontFamily":"label"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size">Publish a post to feature your latest story here.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":21,"query":{"perPage":4,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","inherit":false},"displayLayout":{"type":"grid","columns":2},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"0.25rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.6875rem","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"label"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontWeight":"700","letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"primary","fontSize":"title-lg","fontFamily":"headline","className":"wp-block-heading"} /-->

<!-- wp:post-date {"textColor":"on-surface-variant","fontSize":"label-md","fontFamily":"label"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size">Recent articles will appear here automatically.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|50"}},"border":{"radius":"0.25rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:0.25rem;margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase","fontSize":"0.75rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"primary-fixed-dim","fontFamily":"label"} -->
<h4 class="wp-block-heading has-primary-fixed-dim-color has-text-color has-label-font-family" style="margin-bottom:var(--wp--preset--spacing--30);font-size:0.75rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase">Editorial Email</h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"white","fontSize":"headline-sm","fontFamily":"headline","className":"wp-block-heading"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-headline-sm-font-size has-headline-font-family" style="margin-bottom:var(--wp--preset--spacing--20)">Intelligence Weekly</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"primary-fixed-dim","fontSize":"body-sm"} -->
<p class="has-primary-fixed-dim-color has-text-color has-body-sm-font-size" style="margin-bottom:var(--wp--preset--spacing--30)">Curated market intelligence, research, and strategic commentary delivered to your inbox every Monday.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"primary","className":"has-custom-width wp-block-button__width-100","style":{"border":{"radius":"0.125rem"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/login/' ) ); ?>" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">Join the Mailing List</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"at-border-left-secondary","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group at-border-left-secondary" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":5,"style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase","fontSize":"0.6875rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"on-surface-variant","fontFamily":"label"} -->
<h5 class="wp-block-heading has-on-surface-variant-color has-text-color has-label-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-size:0.6875rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase">Recent Headlines</h5>
<!-- /wp:heading -->

<!-- wp:query {"queryId":22,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"},"margin":{"bottom":"var:preset|spacing|20"}},"border":{"bottom":{"width":"1px","color":"var:preset|color|outline-variant"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--outline-variant);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-title {"level":6,"isLink":true,"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"body-sm","fontFamily":"headline","className":"wp-block-heading"} /-->

<!-- wp:post-date {"textColor":"on-surface-variant","fontSize":"label-md","fontFamily":"label"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size">Your latest headlines will appear here once posts are published.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cta-outline"} -->
<div class="wp-block-button is-style-cta-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Browse the Archive</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
