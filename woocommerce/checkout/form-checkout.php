<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}
echo do_shortcode('[raw]');
?>
<article class="wc-checkout">
    <div class="content-wrapper">
        <div class="columns-12 center pad-both">
            <div class="checkout-wrapper">
                <h1>Bestelling afronden</h1>
                <div class="checkout-steps">
                    <ul id="steps" class="staps-ul">
                        <li class="current" data-value="1"><span>Gegevens</span></li>
                        <li data-value="2"><span>Overzicht &amp; betaling</span></li>
                        <li><span>Bedankt</span></li>
                    </ul>
                </div>
                <div class="wrapper">
                    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

                    <div id="step-1" class="cart-steps active" data-name="1">

                        <?php if ( $checkout->get_checkout_fields() ) : ?>

                            <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <?php do_action( 'woocommerce_checkout_billing' ); ?>
                                </div>

                                <div class="col-2">
                                    <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                                </div>
                            </div>

                            <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

                        <?php endif; ?>
                    </div>

                    <div id="step-2" class="cart-steps" data-name="2">

                        <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
                        
                        <h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
                        
                        <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                        </div>

                        <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
                    </div>

                    </form>

                    <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
                </div>
                <div class="checkout-step-buttons">
                    <div class="left">
                        <a href="/" title="Verder winkelen" class="btn-primary">
                            Verder winkelen
                        </a>
                    </div>
                    <div class="right">
                        <div class="btn-primary">
                            Doorgaan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<?php echo do_shortcode('[/raw]');?>