<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('locale')) {
            // Set the default locale to 'tc'
            Session::put('locale', 'tc');
        }

        App::setLocale(Session::get('locale'));

        return $next($request);
    }
}
