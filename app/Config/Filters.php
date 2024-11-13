<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public array $aliases = [
        'csrf'       => \CodeIgniter\Filters\CSRF::class,
        'toolbar'    => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot'   => \CodeIgniter\Filters\Honeypot::class,
        // 'login'      => \Myth\Auth\Filters\LoginFilter::class,
        // 'role'       => \Myth\Auth\Filters\RoleFilter::class,
        // 'permission' => \Myth\Auth\Filters\PermissionFilter::class,
    ];

    public array $filters = [
        'login' => ['before' => ['account/*']],
    ];

    public array $globals = [
        'before' => [
            'csrf',
            'honeypot',
            // 'login',
        ],
        'after'  => [
            'toolbar',
        ],
    ];

    public array $methods = [];
}
