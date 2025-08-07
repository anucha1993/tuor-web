<?php

namespace App\Http\Middleware;

use Closure;

class StripCookieHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // ลบ header Set-Cookie
        $response->headers->remove('Set-Cookie');

        return $response;
    }
}
