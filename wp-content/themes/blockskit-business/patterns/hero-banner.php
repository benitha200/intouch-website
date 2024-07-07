<?php
/**
 * Title: Hero Banner
 * Slug: blockskit-business/hero-banner
 * Categories: all, banner
 * Keywords: hero banner
 */
$blockskit_business_images = array(
    BLOCKSKIT_BUSINESS_URL . 'assets/images/home-banner-img1.jpg',
);
?>

<!-- wp:cover {"url":"<?php echo esc_url($blockskit_business_images[0]); ?>","id":476,"dimRatio":20,"overlayColor":"primary","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0},"minHeight":680,"contentPosition":"bottom center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large);min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-476" alt="" src="<?php echo esc_url($blockskit_business_images[0]); ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"20px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|body"}}}},"textColor":"body","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-body-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'TAKE YOUR BUSINESS TO NEXT LEVEL', 'blockskit-business' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-heading-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'INNOVATE SOLUTON FOR BUSINESS', 'blockskit-business' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|small"}},"elements":{"link":{"color":{"text":"var:preset|color|body"}}}},"textColor":"body"} -->
<p class="has-body-color has-text-color has-link-color" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Risus perspiciatis nullam magna. Rhoncus quam debitis blanditiis dis omnis faucibus asperiores dignissim dictumst, ipsam, tempor cillum varius nostra? Consequatur ducimus.', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:10px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e( 'HIRE US NOW', 'blockskit-business' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"10px"}},"className":"is-style-bk-button-secondary","fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size is-style-bk-button-secondary has-x-small-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:10px"><?php esc_html_e( 'LEARN MORE', 'blockskit-business' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->