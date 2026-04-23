<?php
/**
 * Title: Related Intelligence
 * Slug: architectural-trust/article-related
 * Categories: architectural-trust-news
 * Description: A three-card related-posts section for single articles and long-form editorial pages.
 * Keywords: related, posts, editorial, query
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-surface-container-low-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"primary","fontSize":"headline-sm","fontFamily":"headline","className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-headline-sm-font-size has-headline-font-family" style="letter-spacing:0.08em;text-transform:uppercase">Keep Reading</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-secondary-color has-text-color has-label-md-font-size has-label-font-family"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">View All Articles &rarr;</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":30,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"displayLayout":{"type":"grid","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"backgroundColor":"white","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"0"},"border":{"radius":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|50","top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"secondary","fontSize":"label-md","fontFamily":"label"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"textColor":"primary","fontSize":"title-lg","fontFamily":"headline","className":"wp-block-heading"} /-->

<!-- wp:post-excerpt {"excerptLength":18,"textColor":"on-surface-variant","fontSize":"body-sm","moreText":"","showMoreOnNewLine":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|surface-container-low","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--surface-container-low);border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-date {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} /-->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"label-md"} -->
<p class="has-secondary-color has-text-color has-label-md-font-size"><span class="material-symbols-outlined">north_east</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size">Publish more posts to automatically populate this section.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
