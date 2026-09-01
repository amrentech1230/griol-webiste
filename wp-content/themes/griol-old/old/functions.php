<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', [], null);
    wp_enqueue_style('griol', get_stylesheet_uri(), ['inter'], '1.0');
    wp_enqueue_script('griol', get_template_directory_uri() . '/assets/main.js', [], '1.0', true);
});

register_nav_menus(['primary' => 'Primary Menu']);
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_action('admin_post_griol_contact',        'griol_handle_contact');
add_action('admin_post_nopriv_griol_contact', 'griol_handle_contact');

function griol_handle_contact() {
    if ( ! isset($_POST['_wpnonce']) || ! wp_verify_nonce($_POST['_wpnonce'], 'griol_contact') ) {
        wp_die('Security check failed.');
    }

    $name    = sanitize_text_field($_POST['name']      ?? '');
    $email   = sanitize_email($_POST['email']           ?? '');
    $phone   = sanitize_text_field($_POST['phone']      ?? '');
    $service = sanitize_text_field($_POST['service']    ?? '');
    $address = sanitize_textarea_field($_POST['address'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    $to      = 'info@griolfireprotection.co.uk';
    $subject = 'New Enquiry: ' . ($service ?: 'General');
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nAddress:\n$address\n\nMessage:\n$message";
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    wp_mail($to, $subject, $body, $headers);

    wp_redirect(add_query_arg('enquiry', 'sent', wp_get_referer()));
    exit;
}
