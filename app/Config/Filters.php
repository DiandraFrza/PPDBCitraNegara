<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public array $aliases = [
        'csrf'       => \CodeIgniter\Filters\CSRF::class,
        'toolbar'    => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot'   => \CodeIgniter\Filters\Honeypot::class,
        'login'      => \App\Filters\LoginFilter::class,
        'role'       => \App\Filters\RoleFilter::class,
        'permission' => \App\Filters\PermissionFilter::class,
        'login'      => \App\Filters\LoginFilter::class,
    ];

    public array $filters = [
        'login' => ['before' => ['admin/*', 'dashboard/*']],
    ];

    public array $globals = [
        'before' => [
            'csrf',
        ],
        'after'  => [
            'toolbar',
        ],
    ];

    public array $methods = [];
}
