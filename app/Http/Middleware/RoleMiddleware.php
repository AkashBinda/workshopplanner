<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the user has the required role
        if (auth()->check() && auth()->user()->role != $role) {
            return redirect('/'); // Redirect if the role doesn't match
        }

        return $next($request);
    }
}
