<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        // ini bwt validasi strong atau ngga
        
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $register = [
        'username' => 'required|alpha_numeric|is_unique[users.username]',
        'email' => 'required|min_length[4]|max_length[50]|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]|alpha_numeric_punct',
        'confirm' => 'matches[password]'
        ];
        
    public $register_errors = [
       'username' => [
           'required' => 'Username masih kosong!',
           'alpha_numeric' => 'Username hanya boleh mengandung huruf dan angka',
           'is_unique' => 'Username sudah dipakai'
           ],
        'email' => [
           'required' => 'Email masih kosong!',
           'min_length' => 'Panjang email minimal 4 karakter',
           'min_length' => 'Panjang email maksimal 50 karakter',
           'is_unique' => 'Email telah terdaftar'
           ],
        'password' => [
           'required' => 'Password masih kosong!',
            'min_length' => 'Password harus terdiri dari 8 karakter',
            'alpha_numeric_punct' => 'Password hanya boleh mengandung angka, huruf, dan karakter yang valid
            '
            ],
       'confirm' => [
           'matches' => 'Konfirmasi password tidak cocok'
           ]
       ];
}
