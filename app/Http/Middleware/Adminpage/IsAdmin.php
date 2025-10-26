<?php

namespace App\Http\Middleware\Adminpage;

use App\Models\AdminPermissionRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (AdminPermissionRole::where('user_id', '=', auth()->user()->id)->count() > 0) {

            return $next($request);
            
        }

        abort(404);
    }
}
