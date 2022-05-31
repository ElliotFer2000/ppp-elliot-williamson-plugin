<?php
/**
 * Plugin Name: ppp plugin
 * Description: Plugin to implement businesss and data layer of a job search website
 */
 include "helpers/users.php";

 /**
 * Enqueue a script in the WordPress admin on edit.php.
 *
 * @param int $hook Hook suffix for the current admin page.
 */
function wpdocs_selectively_enqueue_admin_script( $hook ) {
    $user_roles = get_user_roles();
    if(in_array('oferente', $user_roles)){
        remove_menu_page( 'edit.php' );
        wp_enqueue_script( 'my_custom_script', plugin_dir_url( __FILE__ ) . 'app.js', array(), '1.0' );
    }
    
}
 add_action( 'admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script' );

 function wporg_custom_post_type() {
    


    register_post_type('wporg_empleo',
        array(
            'labels'      => array(
                'name'          => __('Empleos', 'textdomain'),
                'singular_name' => __('Empleo', 'textdomain'),
            ),
                'public'      => true,
                'has_archive' => true,
                'rewrite'     => array( 'slug' => 'empleos' )
        )
    );
}

function wporg_ofertas($current_screen){  
    $userRoles = get_user_roles(get_userdata(get_current_user_id()));
}

add_action('admin_menu', 'delete_admin_options');
add_action('init', 'wporg_custom_post_type');
?>