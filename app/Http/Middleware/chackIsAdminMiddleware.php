<?php

namespace App\Http\Middleware;

use App\Http\Component;
use Closure;
use Illuminate\Http\Request;

class chackIsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $isAdmin = Component::verifyIsAdmin();

        if ($isAdmin == true) {
            return $next($request);

        } else {
            return redirect()->route('home-index');
        }

    }
}