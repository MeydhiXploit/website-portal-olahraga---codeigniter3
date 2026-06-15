<?php 

function isAdminLogin() {

    $CI =& get_instance();
    if (empty($CI->session->id) || empty($CI->session->role)) 
    {
        redirect('admin/login');
    } 
}
