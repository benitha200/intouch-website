<?php
/**
 * Title: Latest Posts
 * Slug: blockskit-business/latest-posts
 * Categories: all, latest-posts
 * Keywords: latest-posts
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom","width":""} -->
<div class="wp-block-column is-vertically-aligned-bottom"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|body"}}}},"textColor":"body","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-center has-body-color has-text-color has-link-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:700"><strong><strong><strong><?php esc_html_e( 'OUR LATEST POST', 'blockskit-business' ); ?></strong></strong></strong></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700"><?php esc_html_e( 'CHECKOUT RECENT BLOGS', 'blockskit-business' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Torquent facilisis habitasse eum, ratione, necessitatibus diam repellat aut quam euismod cum facilisis habitass facilisis habitasse eum.', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":""} -->
<div class="wp-block-column is-vertically-aligned-bottom"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":17,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"style":{"border":{"radius":"20px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:post-title {"level":5,"isLink":true,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}}} /-->

<!-- wp:post-excerpt {"moreText":"Learn More..","excerptLength":15,"className":"link-no-underline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->