<?php

function was_login()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');

    if ($ci->session->has_userdata('id')) {
        redirect($role);
    }
}

function is_admin()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');

    if (!$ci->session->has_userdata('id')) {
        redirect('homepage');
    } else {
        if ($role != 'admin') {
            redirect($role);
        }
    }
}

function is_instruktur()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');

    if (!$ci->session->has_userdata('id')) {
        redirect('homepage');
    } else {
        if ($role != 'instruktur') {
            redirect($role);
        }
    }
}

function is_user()
{
    $ci = get_instance();
    $role = $ci->session->userdata('role');

    if (!$ci->session->has_userdata('id')) {
        redirect('homepage');
    } else {
        if ($role != 'user') {
            redirect($role);
        }
    }
}
