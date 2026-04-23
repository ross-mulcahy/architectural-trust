<?php
/**
 * Title: Account Dashboard
 * Slug: architectural-trust/dashboard-layout
 * Categories: architectural-trust
 * Description: A demo dashboard layout for account summaries, balances, and portfolio snapshots.
 * Keywords: dashboard, account, balances, portal
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"at-dashboard-layout","backgroundColor":"surface","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull at-dashboard-layout has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.02em","fontWeight":"800"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"primary","fontSize":"display-sm","fontFamily":"headline","className":"wp-block-heading"} -->
<h1 class="wp-block-heading has-primary-color has-text-color has-display-sm-font-size has-headline-font-family" style="margin-bottom:var(--wp--preset--spacing--10);font-weight:800;letter-spacing:-0.02em">Net Worth Overview</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm","fontFamily":"label"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size has-label-font-family">Consolidated view of your holdings as of March 25, 2026</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"backgroundColor":"primary-container","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"0.125rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-container-background-color has-background" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"white","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-white-color has-text-color has-label-md-font-size has-label-font-family" style="letter-spacing:0.08em;text-transform:uppercase">Total Available Balance</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"800","letterSpacing":"-0.02em"}},"textColor":"white","fontSize":"headline-lg","fontFamily":"headline","className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-headline-lg-font-size has-headline-font-family" style="font-weight:800;letter-spacing:-0.02em">$142,850.42</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary-fixed","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-primary-fixed-color has-text-color has-label-md-font-size has-label-font-family">+2.4% from last month</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"backgroundColor":"surface-container-lowest","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-surface-container-lowest-background-color has-background" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"textColor":"primary","fontSize":"title-lg","fontFamily":"headline","className":"wp-block-heading"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-title-lg-font-size has-headline-font-family">Cash &amp; Savings</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-secondary-color has-text-color has-label-md-font-size has-label-font-family"><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Manage Accounts</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|20"}},"border":{"radius":"0.125rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-surface-container-low-background-color has-background" style="border-radius:0.125rem;margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"primary","fontSize":"body-sm","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-body-sm-font-size has-headline-font-family">Premier Checking</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-outline-color has-text-color has-label-md-font-size has-label-font-family">••••4821</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"title-md","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-title-md-font-size has-headline-font-family" style="font-weight:700">$24,530.18</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"0.125rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-surface-container-low-background-color has-background" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"primary","fontSize":"body-sm","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-body-sm-font-size has-headline-font-family">High-Yield Savings</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-outline-color has-text-color has-label-md-font-size has-label-font-family">••••7395</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"title-md","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-title-md-font-size has-headline-font-family" style="font-weight:700">$85,220.24</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3,"textColor":"white","fontSize":"title-lg","fontFamily":"headline","className":"wp-block-heading"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-title-lg-font-size has-headline-font-family">Credit Profile</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"primary-fixed","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-primary-fixed-color has-text-color has-label-md-font-size has-label-font-family" style="margin-bottom:0;letter-spacing:0.08em;text-transform:uppercase">Platinum Reserve Card</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"white","fontSize":"headline-sm","fontFamily":"headline"} -->
<p class="has-white-color has-text-color has-headline-sm-font-size has-headline-font-family" style="font-weight:700">$3,240.00</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary-fixed-dim","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-primary-fixed-dim-color has-text-color has-label-md-font-size has-label-font-family">of $25,000.00 limit</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"primary-fixed","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-primary-fixed-color has-text-color has-label-md-font-size has-label-font-family" style="letter-spacing:0.08em;text-transform:uppercase">Credit Utilization</p>
<!-- /wp:paragraph -->

<!-- wp:group {"backgroundColor":"primary-fixed-dim","style":{"spacing":{"padding":{"top":"4px","bottom":"4px"}},"border":{"radius":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-fixed-dim-background-color has-background" style="border-radius:4px;padding-top:4px;padding-bottom:4px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px"}},"border":{"radius":"4px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:4px;padding-top:4px;padding-bottom:4px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1px"},"color":{"text":"#00000000"}}} -->
<p class="has-custom-font-size has-text-color" style="color:#00000000;font-size:1px">&nbsp;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"primary-fixed-dim","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-primary-fixed-dim-color has-text-color has-label-md-font-size has-label-font-family">13% utilized</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"border":{"top":{"color":"var:preset|color|primary-fixed-dim","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--primary-fixed-dim);border-top-width:1px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"primary-fixed","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-primary-fixed-color has-text-color has-label-md-font-size has-label-font-family" style="margin-top:var(--wp--preset--spacing--30);letter-spacing:0.08em;text-transform:uppercase">Upcoming Payment</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"white","fontSize":"title-md","fontFamily":"headline"} -->
<p class="has-white-color has-text-color has-title-md-font-size has-headline-font-family" style="font-weight:700">$850.00 — Apr 15</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"backgroundColor":"surface-container-lowest","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-surface-container-lowest-background-color has-background" style="border-radius:0.125rem;margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"textColor":"primary","fontSize":"title-lg","fontFamily":"headline","className":"wp-block-heading"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-title-lg-font-size has-headline-font-family">Recent Transactions</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-secondary-color has-text-color has-label-md-font-size has-label-font-family"><a href="<?php echo esc_url( home_url( '/news-intelligence/' ) ); ?>">View All</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|10"}},"border":{"bottom":{"color":"var:preset|color|surface-container-low","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--surface-container-low);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-outline-color has-text-color has-label-md-font-size has-label-font-family">Mar 24</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"body-sm","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-body-sm-font-size has-headline-font-family">Whole Foods Market</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"0.125rem"}},"textColor":"on-surface-variant","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-on-surface-variant-color has-surface-container-low-background-color has-text-color has-background has-label-md-font-size has-label-font-family" style="border-radius:0.125rem;padding-top:2px;padding-right:var(--wp--preset--spacing--20);padding-bottom:2px;padding-left:var(--wp--preset--spacing--20)">Groceries</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-outline-color has-text-color has-label-md-font-size has-label-font-family">Premier Checking</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"body-sm","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-body-sm-font-size has-headline-font-family" style="font-weight:600">-$134.52</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|10"}},"border":{"bottom":{"color":"var:preset|color|surface-container-low","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--surface-container-low);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-outline-color has-text-color has-label-md-font-size has-label-font-family">Mar 23</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"body-sm","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-body-sm-font-size has-headline-font-family">Direct Deposit — Payroll</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"0.125rem"}},"textColor":"on-surface-variant","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-on-surface-variant-color has-surface-container-low-background-color has-text-color has-background has-label-md-font-size has-label-font-family" style="border-radius:0.125rem;padding-top:2px;padding-right:var(--wp--preset--spacing--20);padding-bottom:2px;padding-left:var(--wp--preset--spacing--20)">Income</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-outline-color has-text-color has-label-md-font-size has-label-font-family">Premier Checking</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"color":{"text":"#16a34a"}},"fontSize":"body-sm","fontFamily":"headline"} -->
<p class="has-text-color has-body-sm-font-size has-headline-font-family" style="color:#16a34a;font-weight:600">+$4,850.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|10"}},"border":{"bottom":{"color":"var:preset|color|surface-container-low","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--surface-container-low);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--10);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-outline-color has-text-color has-label-md-font-size has-label-font-family">Mar 22</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"body-sm","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-body-sm-font-size has-headline-font-family">Delta Air Lines</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"0.125rem"}},"textColor":"on-surface-variant","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-on-surface-variant-color has-surface-container-low-background-color has-text-color has-background has-label-md-font-size has-label-font-family" style="border-radius:0.125rem;padding-top:2px;padding-right:var(--wp--preset--spacing--20);padding-bottom:2px;padding-left:var(--wp--preset--spacing--20)">Travel</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-outline-color has-text-color has-label-md-font-size has-label-font-family">Platinum Reserve</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"body-sm","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-body-sm-font-size has-headline-font-family" style="font-weight:600">-$482.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-outline-color has-text-color has-label-md-font-size has-label-font-family">Mar 20</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"body-sm","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-body-sm-font-size has-headline-font-family">Transfer to Savings</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"0.125rem"}},"textColor":"on-surface-variant","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-on-surface-variant-color has-surface-container-low-background-color has-text-color has-background has-label-md-font-size has-label-font-family" style="border-radius:0.125rem;padding-top:2px;padding-right:var(--wp--preset--spacing--20);padding-bottom:2px;padding-left:var(--wp--preset--spacing--20)">Transfer</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"outline","fontSize":"label-md","fontFamily":"label"} -->
<p class="has-outline-color has-text-color has-label-md-font-size has-label-font-family">Premier Checking</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"body-sm","fontFamily":"headline"} -->
<p class="has-primary-color has-text-color has-body-sm-font-size has-headline-font-family" style="font-weight:600">-$2,000.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-surface-container-low-background-color has-background" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"textColor":"secondary","fontSize":"title-md"} -->
<p class="has-secondary-color has-text-color has-title-md-font-size"><span class="material-symbols-outlined">trending_up</span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"textColor":"primary","fontSize":"title-md","fontFamily":"headline","className":"wp-block-heading"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-title-md-font-size has-headline-font-family">Spending Trends</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size">Your dining spend decreased 12% this month compared to your 3-month average.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-surface-container-low-background-color has-background" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"textColor":"secondary","fontSize":"title-md"} -->
<p class="has-secondary-color has-text-color has-title-md-font-size"><span class="material-symbols-outlined">shield</span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"textColor":"primary","fontSize":"title-md","fontFamily":"headline","className":"wp-block-heading"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-title-md-font-size has-headline-font-family">Security Alert</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size">All accounts secured. Last login from New York, NY on March 24 at 9:15 AM.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"surface-container-low","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"0.125rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-surface-container-low-background-color has-background" style="border-radius:0.125rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"textColor":"secondary","fontSize":"title-md"} -->
<p class="has-secondary-color has-text-color has-title-md-font-size"><span class="material-symbols-outlined">savings</span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"textColor":"primary","fontSize":"title-md","fontFamily":"headline","className":"wp-block-heading"} -->
<h4 class="wp-block-heading has-primary-color has-text-color has-title-md-font-size has-headline-font-family">Savings Goal</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"on-surface-variant","fontSize":"body-sm"} -->
<p class="has-on-surface-variant-color has-text-color has-body-sm-font-size">You are 68% toward your $125,000 emergency fund target. On track for September.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
