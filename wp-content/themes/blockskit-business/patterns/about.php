<?php
/**
 * Title: About
 * Slug: blockskit-business/about
 * Categories: all, about
 * Keywords: about
 */
$blockskit_business_images = array(
    BLOCKSKIT_BUSINESS_URL . 'assets/images/about-img1.png',
    BLOCKSKIT_BUSINESS_URL . 'assets/images/about-img2.png',
    BLOCKSKIT_BUSINESS_URL . 'assets/images/about-img3.jpg',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"pure-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-pure-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_business_images[2]); ?>","id":256,"dimRatio":10,"overlayColor":"primary","isUserOverlayColor":true,"focalPoint":{"x":0.44,"y":0.5},"minHeight":600,"isDark":false,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:20px;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-256" alt="" src="<?php echo esc_url($blockskit_business_images[2]); ?>" style="object-position:44% 50%" data-object-fit="cover" data-object-position="44% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:image {"id":255,"sizeSlug":"full","linkDestination":"custom","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_business_images[1]); ?>" alt="" class="wp-image-255"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|body"}}}},"textColor":"body","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-body-color has-text-color has-link-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:700"><strong><?php esc_html_e( 'INTRODUCTION OF US', 'blockskit-business' ); ?></strong></h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small);font-style:normal;font-weight:700"><?php esc_html_e( 'WE WORK TO ENSURE YOUR BUSINESS SUCCESS!!', 'blockskit-business' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Varius nobis volutpat pharetra curae auctor eligendi consectetuer iusto fugiat ligula hic atque excepturi esse, nullam veniam voluptates lacinia ex facilisis voluptatum leo laborum. Dolores sapien non metusOdio aliqua.', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|medium"},"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:column {"verticalAlignment":"center","width":"64%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:64%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"4px","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:4px;margin-bottom:0;line-height:1"><img class="wp-image-254" style="width: 14px;" src="<?php echo esc_url($blockskit_business_images[0]); ?>" alt=""></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Aliquam inventore magnam excepturi semper.', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"4px","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:4px;margin-bottom:0;line-height:1"><img class="wp-image-254" style="width: 14px;" src="<?php echo esc_url($blockskit_business_images[0]); ?>" alt=""></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Nesciunt magni ullamcorper aenean vivamus.', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"4px","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:4px;margin-bottom:0;line-height:1"><img class="wp-image-254" style="width: 14px;" src="<?php echo esc_url($blockskit_business_images[0]); ?>" alt=""></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Excepturi et ultrices ipsum, reprehenderit.', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"4px","bottom":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:4px;margin-bottom:0;line-height:1"><img class="wp-image-254" style="width: 14px;" src="<?php echo esc_url($blockskit_business_images[0]); ?>" alt=""></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Incidunt autem sociosqu habitant. Curae.', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"165px","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:165px"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"10px"}},"backgroundColor":"primary","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-primary-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.1"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"xxx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-accent-text-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:800;line-height:1.1"><?php esc_html_e( '25', 'blockskit-business' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"accent-text"} -->
<h6 class="wp-block-heading has-text-align-center has-accent-text-color has-text-color has-link-color" style="font-style:normal;font-weight:700"><?php esc_html_e( 'YEARS', 'blockskit-business' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"x-small"} -->
<p class="has-text-align-center has-accent-text-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'OF EXPERIENCE', 'blockskit-business' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"typography":{"lineHeight":"1.5"}}} -->
<div class="wp-block-buttons" style="line-height:1.5"><!-- wp:button {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"fontSize":"x-small"} -->
<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a class="wp-block-button__link wp-element-button" style="border-radius:10px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e( 'MORE ABOUT US', 'blockskit-business' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->