<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminUser
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $admin = Admin::where("user_id", $user->id)->first();
        if (!auth()->check() || !auth()->user()->id == $admin) {
            abort(403, 'Відсутні права доступу');
        }

        return $next($request);
    }
}
