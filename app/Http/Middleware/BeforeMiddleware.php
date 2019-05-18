<?php

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {
        // 这是前置中间件，在还未进入 $next 之前调用

        return $next($request);
    }
}
