<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
{
    if (!auth()->check() || !auth()->user()->is_admin) {
        abort(403, 'Ação não autorizada.');
    }

    return $next($request);
}
}
