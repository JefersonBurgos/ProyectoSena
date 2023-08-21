<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperAdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session('user_id') && session('user_role') && session('user_role') === 'superAdmin') {
            return $next($request);
        }
        return redirect('logout');
    }
}
