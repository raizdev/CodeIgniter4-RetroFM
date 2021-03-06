<?php 
namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'        => \CodeIgniter\Filters\CSRF::class,
        'toolbar'     => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot'    => \CodeIgniter\Filters\Honeypot::class,
        'LoginFilter' => \App\Filters\LoginFilter::class,
        'GuestFilter' => \App\Filters\GuestFilter::class,
        'PermissionFilter' => [
          \App\Filters\LoginFilter::class,
          \App\Filters\PermissionFilter::class
      ]
    ];


    public $globals = [
        'after'  => [
            'toolbar',
        ],
    ];

    public $methods = [];

    public $filters = [
        'LoginFilter' => [
            'before' => [
                'auth/logout'
            ]
        ]
    ];
}