<?php

$config = array(
    'auth/login' => array(
        array(
            'field' => 'email',
            'label' => 'email',
            'rules' => 'trim|required|valid_email',
            'errors' => array(
                'required' => 'Email harus diisi',
                'valid_email' => 'Email tidak valid'
            )
        ),
        array(
            'field' => 'password',
            'label' => 'password',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Password harus diisi'
            )
        )
    ),
    'auth/register' => array(
        array(
            'field' => 'fullname',
            'label' => 'fullname',
            'rules' => 'trim|required',
            'errors' => array(
                'required' => 'Nama harus diisi',
            )
        ),
        array(
            'field' => 'email',
            'label' => 'email',
            'rules' => 'trim|required|valid_email|is_unique[users.email]',
            'errors' => array(
                'required' => 'Email harus diisi',
                'valid_email' => 'Email tidak valid',
                'is_unique' => 'Email sudah terpakai'
            )
        ),
        array(
            'field' => 'password',
            'label' => 'password',
            'rules' => 'trim|required|min_length[8]',
            'errors' => array(
                'required' => 'Password harus diisi',
                'min_length' => 'Panjang minimal 8 karakter'
            )
        ),
        array(
            'field' => 'confirm_password',
            'label' => 'confirm_password',
            'rules' => 'trim|required|matches[password]',
            'errors' => array(
                'required' => 'Konfirmasi password harus diisi',
                'matches' => 'Password tidak sama'
            )
        )
    )
);
