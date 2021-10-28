<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$block = get_field('product_group', $product->ID);
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<article id="product-<?php the_ID(); ?>" <?php wc_product_class( 'product-page', $product ); ?>>
	<div class="content-wrapper">
		<div class="columns-11 center pad-both">
			<div class="product-intro">
				<div class="grid">
					<div class="images">
						<?php
							/**
							 * Hook: woocommerce_before_single_product_summary.
							 *
							 * @hooked woocommerce_show_product_sale_flash - 10
							 * @hooked woocommerce_show_product_images - 20
							 */ 
							echo woocommerce_show_product_images(); 
						?>
					</div>
					<div class="product-summary">
						<?php
						/**
						 * Hook: woocommerce_single_product_summary.
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 * @hooked WC_Structured_Data::generate_product_data() - 60
						 */
						
						?>
						
						<div class="content">
							<?php echo woocommerce_template_single_title(); ?>
							<?php echo '<h3 class="product_subtitle">'.$block['subtitle'].'</h3>'; ?>
							<?php echo woocommerce_template_single_meta(); ?>
							<?php
								$width = $product->get_attribute( 'pa_breedte' );
								$depth = $product->get_attribute( 'pa_diepte' );
								$height = $product->get_attribute( 'pa_hoogte' );
							?>
							<?php if($width || $depth || $height): ?>						
								<div class="dimensions">
									<?php
										echo ($width ? 'breedte'.$width.' x' : '').''.($depth ? 'diepte'.$width.' x' : '').''.($depth ? 'diepte'.$height.' x' : '').'';
									?>
								</div>
							<?php endif;?>
							<?php
							if($block['content']):
								foreach ($block['content'] as $key => $value) {
									switch ($value['acf_fc_layout']) {
										case 'title':
											$title = new BlockTitle(
												$value['title'],
												$value['title_type']
											);
		
											if($value['title_link']){
												$title->setLink(
													$value['title_link']['url'],
													$value['title_link']['title'],
													$value['title_link']['target'],
												);
											}
		
											$title->setLook('h3');
		
											echo $title->getTitle();
											break;

										case 'text':
											echo $value['text'];
											break;

										case 'list':
											$listItems = '';
											foreach ($value['list'] as $key => $row) {
												$listItems .= '<li>' . $row['item'] . '</li>';
											}
											echo '<ul class="angle">' . $listItems . '</ul>';
											break;

										case 'buttons':
											echo '<div class="buttons">';
											foreach ($value['buttons'] as $key => $row) {
												$button = new BlockButton($row['button_text']);
		
												switch ($row['button_type']) {
													case 'link':
														$button->setLink(
															$row['button_link']['url'],
															$row['button_link']['title'],
															$row['button_link']['target'],
														);
														break;
		
													case 'popup':
														$button->setPopup($row['button_popup']);
														break;
													
													default:
														break;
												}
												echo $button->getButton();
		
												if($row['phone']){
													echo '
														<div class="phone">
															of bel <a href="'.contactDetails(array('detail' => 'phone_link')).'" title="Bel ons">'.contactDetails(array('detail' => 'phone')).'</a>
														</div>
													';
												}
											}
											echo '</div>';
											break;
										
										default:
											break;
									}
								}
							endif;
						?>
						<?php echo woocommerce_template_single_add_to_cart(); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
<?php do_action( 'woocommerce_after_single_product' ); ?>