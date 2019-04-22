<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class Localization
{
    public function handle($request, Closure $next)
    {
        if ( \Session::has('lang')) {
            \App::setLocale(\Session::get('lang'));
            Carbon::setLocale(\Session::get('lang'));
        }

        return $next($request);
    }
}
