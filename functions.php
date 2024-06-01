<?php
// Enqueue styles and scripts
function onpeak_enqueue_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'onpeak_enqueue_styles');

// Handle the contact form submission
function handle_contact_form() {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'Input Email Address(es) here'; // Replace with your email address
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";

        wp_mail($to, $subject, $body);

        wp_redirect(home_url());
        exit;
    }
}
add_action('admin_post_nopriv_contact_form', 'handle_contact_form');
add_action('admin_post_contact_form', 'handle_contact_form');
