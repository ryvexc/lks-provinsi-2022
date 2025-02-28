<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'api/v1/auth/login',
        'api/v1/auth/logout',
        'api/v1/validation',
        'api/v1/validations',
        'api/v1/applications'
    ];
}
