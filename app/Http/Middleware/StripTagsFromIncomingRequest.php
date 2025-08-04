<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\TransformsRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StripTagsFromIncomingRequest extends TransformsRequest
{
    protected $except = [
        'password',
        'password_confirmation'
    ];

    protected function transform($key, $value)
    {
        if (in_array($key, $this->except, true)) {
            return $value;
        }

        return is_string($value) && $value !== '' ? strip_tags($value) :  $value;
    }
}
