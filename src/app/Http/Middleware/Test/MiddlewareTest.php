<?php

namespace App\Http\Middleware\Test;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MiddlewareTest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request->url());
        $user = User::find(2);
        // $user = Auth::user();
        echo $user;
        Auth::login($user);

        if ($request->path() == 'show-import-csv'){
            echo 'middlewareの処理中です';
        }
        
        return $next($request);
    }
}
