<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class CustomAuthenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (Auth::guest()) {
            // web.phpで->name('');を設定する必要がある
            return route('success'); // カスタムログインページにリダイレクト
            // return route('create-table');
            // return route('login');
        }
    }
}
