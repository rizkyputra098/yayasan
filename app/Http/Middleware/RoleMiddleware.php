<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        // Jika role = admin dan user bukan admin, tolak akses
        if ($role === 'admin' && !$user->is_admin) {
            abort(403, 'Unauthorized (Admin only)');
        }

        // Jika role = user dan user adalah admin, tolak akses
        if ($role === 'user' && $user->is_admin) {
            abort(403, 'Unauthorized (User only)');
        }

        return $next($request);
    }
}
