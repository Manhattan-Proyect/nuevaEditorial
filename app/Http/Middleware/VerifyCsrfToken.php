<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */

    //URL a las que no validar porque van a ser ingresadas solo desde un usuario Administrador
    protected $except = [
        'orders/*'
    ];
}
