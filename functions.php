<?php

// all actions & filters
add_action( 'wp_enqueue_scripts', 'ghs_scrs' );
add_action('wp_head', 'head');

function ghs_scrs(){
    //styles
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');

    //js scripts

    wp_enqueue_script('jq', get_stylesheet_directory_uri() . '/scripts/js/jquery-2.1.3.js');
    wp_enqueue_script('angularjs', get_stylesheet_directory_uri() . '/scripts/js/angular.min.js');
    wp_enqueue_script('angularjs-resource', get_stylesheet_directory_uri() . '/scripts/js/angular-resource.min.js');
    wp_enqueue_script('angularjs-route',  get_stylesheet_directory_uri() . '/scripts/js/angular-route.min.js');
    wp_enqueue_script('cookies',  get_stylesheet_directory_uri() . '/scripts/js/cookies.js');
    wp_enqueue_script('GhsJS', get_stylesheet_directory_uri() . '/scripts/js/main.js', array( 'angularjs', 'angularjs-route', 'angularjs-resource', 'jq', 'cookies'), true);

    //localization of scripts
    wp_localize_script('GhsJS', 'myLocalized', array('partials' => trailingslashit( get_template_directory_uri() ) . 'partials/'));
}

function head(){ ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="google-signin-client_id" content="979177383237-vevih7vk4k8niblajr70uu1qfbesapt0.apps.googleusercontent.com">
<!--    <link rel="shortcut icon" type="image/x-icon" href="https://ghostszmusic.com/wp-content/uploads/2016/03/favicon.ico" />-->
    <base href="<?php echo site_url('/'); ?>">
<?php
}