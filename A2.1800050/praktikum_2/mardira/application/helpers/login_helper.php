<?php

function cek_session()
{
    $CI = &get_instance();
    $session = $CI->session->userdata('email');
    of ($session == NULL) {
        redirect('login');
    }
}