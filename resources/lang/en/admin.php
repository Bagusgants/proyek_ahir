<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'product' => [
        'title' => 'Product',

        'actions' => [
            'index' => 'Product',
            'create' => 'New Product',
            'edit' => 'Edit :name',
            'will_be_published' => 'Product will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'nama_product' => 'Nama product',
            'deskripsi' => 'Deskripsi',
            'harga' => 'Harga',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'pelanggan' => [
        'title' => 'Pelanggan',

        'actions' => [
            'index' => 'Pelanggan',
            'create' => 'New Pelanggan',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];