<?php


function helloAku()
{
    return 'Say Hello';
}

function cekLogin()
{
    $CI = &get_instance();
    if (!$CI->session->userdata('id_user')) {
        redirect('auth', 'refresh');
        exit;
    }
}
