<?php
/**
 * Title: Header
 * Slug: blockskit-business/header
 * Categories: all, header
 */
$blockskit_business_images = array(
    BLOCKSKIT_BUSINESS_URL . 'assets/images/header-img1.png',
    BLOCKSKIT_BUSINESS_URL . 'assets/images/header-img2.png',
    BLOCKSKIT_BUSINESS_URL . 'assets/images/header-img3.png',
);
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-small"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"370px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:370px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"x-small"} -->
<p class="has-accent-text-color has-text-color has-link-color has-x-small-font-size"><img class="wp-image-266" style="width: 16px;" src="<?php echo esc_url($blockskit_business_images[0]); ?>" alt=""><?php esc_html_e( ' info@example.com', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"x-small"} -->
<p class="has-accent-text-color has-text-color has-link-color has-x-small-font-size">&nbsp;<img class="wp-image-267" style="width: 15px;" src="<?php echo esc_url($blockskit_business_images[1]); ?>" alt=""><?php esc_html_e( ' Rock Street, San Francisco', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"285px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:285px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"outline","iconColorValue":"#E5E7EB","size":"has-small-icon-size","align":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xx-small"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","top":"10px","bottom":"10px"}},"border":{"radius":"10px"}},"fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:10px;padding-top:10px;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:10px;padding-left:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'GET A QUOTE', 'blockskit-business' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:0;padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-small","left":"0"},"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"border":{"top":{"color":"var:preset|color|outline","width":"1px"}}}} -->
<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--outline);border-top-width:1px;padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:column {"verticalAlignment":"center","width":"120px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:120px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":26,"shouldSyncIcon":true,"className":"is-style-default"} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"bk-hide-mob"} -->
<div class="wp-block-column bk-hide-mob"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"67%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:67%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"ref":342,"textColor":"heading","icon":"menu","overlayBackgroundColor":"accent-text","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"x-small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"230px","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:230px"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|small","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|xx-small","left":"var:preset|spacing|xx-small"}},"border":{"left":{"color":"var:preset|color|outline","width":"1px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="border-left-color:var(--wp--preset--color--outline);border-left-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--small)"><!-- wp:column {"verticalAlignment":"center","width":"35px","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:35px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0px"}}} -->
<p style="font-size:0px"><img class="wp-image-268" style="width: 30px;" src="<?php echo esc_url($blockskit_business_images[2]); ?>" alt=""></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'CONTACT FOR INFO', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|hover"}}}},"textColor":"secondary","fontSize":"medium"} -->
<h6 class="wp-block-heading has-secondary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '+21 356 552 8489', 'blockskit-business' ); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->