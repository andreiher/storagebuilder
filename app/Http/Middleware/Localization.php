<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( \Session::has('lang')) {
            \App::setLocale(\Session::get('lang'));

            // You also can set the Carbon locale
            Carbon::setLocale(\Session::get('lang'));
        }

        return $next($request);
    }
}
