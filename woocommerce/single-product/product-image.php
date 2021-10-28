<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;
$imageCounter = 1;
$sliderPopup = '';
$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<figure class="woocommerce-product-gallery__wrapper">
		<?php
		if ( $post_thumbnail_id ) {
            $html = '<div class="slider">';
                $html .= '<div class="slide">
                            <img src="'.wp_get_attachment_image_src($post_thumbnail_id,'woocommerce_single_image')[0].'" alt="Cura Cordis - '.get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', TRUE).'">
                            <div class="zoom" data-id="'.$imageCounter.'">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>';
                $sliderPopup  .= '  <div class="slide" data-id="'.$imageCounter.'">
                                        <img src="'.wp_get_attachment_image_src($post_thumbnail_id,'full')[0].'" alt="Cura Cordis - '.get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', TRUE).'">
                                    </div>';
                $attachment_ids = $product->get_gallery_image_ids();
                if ( $attachment_ids && $product->get_image_id() ) {
                    foreach ( $attachment_ids as $attachment_id ) {
                        $imageCounter++;
                        $html .= '  <div class="slide">
                                        <img src="'.wp_get_attachment_image_src($attachment_id,'woocommerce_single_image')[0].'" alt="'.get_post_meta($attachment_id, '_wp_attachment_image_alt', TRUE).'">
                                        <div class="zoom" data-id="'.$imageCounter.'">
                                            <i class="fas fa-search-plus"></i>
                                        </div>
                                    </div>';
                        $sliderPopup  .= '  <div class="slide" data-id="'.$imageCounter.'">
                                                <img src="'.wp_get_attachment_image_src($attachment_id,'full')[0].'" alt="'.get_post_meta($attachment_id, '_wp_attachment_image_alt', TRUE).'">
                                            </div>';
                    }
                }
            $html .= '</div>';
            echo $html;
            echo '  <div class="slideshow-popup">
                        <div class="close">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <div class="arrows">
                            <div class="arrow left"></div>
                            <div class="arrow right"></div>
                        </div>
                        <div class="slideshow-slides">
                            '.$sliderPopup.'
                        </div>
                    </div>';
		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html .= '</div>';
		}
        do_action( 'woocommerce_product_thumbnails' );
		?>
	</figure>
</div>