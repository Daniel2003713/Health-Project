<?php
// Theme setup function
function mycustomtheme_setup() {
    add_theme_support('woocommerce');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mycustomtheme')
    ));
}
add_action('after_setup_theme', 'mycustomtheme_setup');

// Enqueue scripts and styles
function mycustomtheme_scripts() {
    wp_enqueue_style('mycustomtheme-style', get_stylesheet_uri());
    // Ensure the bootstrap.js file exists in your theme's js folder
    wp_enqueue_script('mycustomtheme-script', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mycustomtheme_scripts');

// Display the custom field on the product page
// Display the custom field on the product page
function display_custom_product_field() {
    woocommerce_wp_text_input(
        array(
            'id' => '_custom_message',
            'label' => 'Special Message',
            'placeholder' => 'Enter a special message',
            'desc_tip' => 'true',
        )
    );
}
add_action('woocommerce_before_add_to_cart_button', 'display_custom_product_field');

// Save the custom field value to the product
function save_custom_product_field($product_id) {
    if (isset($_POST['_custom_message'])) {
        $custom_message = sanitize_text_field($_POST['_custom_message']);
        update_post_meta($product_id, '_custom_message', $custom_message);
    }
}
add_action('woocommerce_process_product_meta', 'save_custom_product_field');

// Change the position of the price display
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 25);

// Redirect to homepage if a specific product is not in the cart
function custom_checkout_redirect() {
    global $wp;
    if (is_checkout() && !is_wc_endpoint_url('order-received')) {
        $product_id = 123; // Replace with your specific product ID
        $product_in_cart = false;
        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
            if ($cart_item['product_id'] === $product_id) {
                $product_in_cart = true;
                break;
            }
        }
        if (!$product_in_cart) {
            wp_safe_redirect(home_url());
            exit;
        }
    }
}
add_action('template_redirect', 'custom_checkout_redirect');
?>

