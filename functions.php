<?php
function register_css()
{ // 管理画面でないなら
    if (!is_admin()) {
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/plugins/font-awesome-4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('AOS', get_template_directory_uri() .  '/styles/aos.css');
        wp_enqueue_style('main_style', get_template_directory_uri() . '/styles/main_styles.css');
    }
}

// 登録済みのjQueryを解除して、登録し直す
function remove_default_jquery()
{
    // 管理画面でないなら
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), 3.2, true);
        wp_enqueue_script('popper_js', get_template_directory_uri() . '/styles/bootstrap4/popper.js', array(), 4.0, true);
        wp_enqueue_script('bootstrap4_js', get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.js', array(), 4.0, true);
        wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), 4.0, true);
        wp_enqueue_script('counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), 1.0, true);
        wp_enqueue_style('FontAwesome', get_template_directory_uri() . '/styles/all.css');
        wp_enqueue_script('AOS', get_template_directory_uri() . '/js/aos.js', array(), 1.0, true);
    }
}
function remove_menus()
{
    remove_menu_page('themes.php');             //外観
  remove_menu_page('plugins.php');            //プラグイン
  remove_menu_page('options-general.php');    //設定
  remove_menu_page('cptui_main_menu');        //カスタム投稿タイプ CPT UI
}
function register_jquery()
{
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), null, true); /* Google CDNのJQueryの登録 */
}

add_action('wp_enqueue_scripts', 'register_jquery');
add_action('admin_menu', 'remove_menus');
add_action('wp_enqueue_scripts', 'register_css');

add_action('wp_enqueue_scripts', 'remove_default_jquery');
add_theme_support('post-thumbnails');
add_filter('acf/settings/show_admin', '__return_false');