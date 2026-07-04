<?php 

function isAdminLogin() {

    $CI =& get_instance();
    if (empty($CI->session->id) || empty($CI->session->role)) 
    {
        redirect('admin/login');
    } 
}

function get_image_url($db_url) {
    if (empty($db_url)) {
        return base_url('assets/img/no-image.jpg');
    }
    $filename = basename($db_url);
    if (empty($filename)) {
        return base_url('assets/img/no-image.jpg');
    }
    return base_url('upload/' . $filename);
}
