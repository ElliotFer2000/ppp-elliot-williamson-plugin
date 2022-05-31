<?php 
function get_user_roles(){
    $user_id = get_current_user_id();
    $user_info = get_userdata($user_id);
  
    return $user_info->roles;
}

function delete_admin_options(){
    //Members plugin is working fine for aplicante, so is not necessary add anything for aplicante here
    $user_roles = get_user_roles();
    if(in_array('oferente', $user_roles) || in_array('aplicante',$user_roles) || in_array('bolsa',$user_roles)){
        remove_menu_page( 'edit.php' );
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
        remove_menu_page('edit.php?post_type=wporg_empleo');
       
    }

    if(in_array('oferente',$user_roles)){
        remove_menu_page( 'users.php' );
    }
}
function change_publish_button( $translation, $text ) {

    if ( $text == 'Publish' ){
        return 'Publicar';
    }else if ($text == 'Save Draft'){
        return 'Guardar Borrador';
    }else if($text == 'Preview'){
        return 'Previsualización';
    } else if($text == 'Status'){
        return 'Estado';
    }
       
    
    return $translation;
}

add_filter( 'gettext', 'change_publish_button', 10, 2 );
?>