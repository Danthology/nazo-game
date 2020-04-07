<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Support\Facades\Redirect;

/**
 * 把大写uri转换为小写.
 * Class LowerCaseRoutes
 * @package App\Http\Middleware
 */
class LowerCaseRoutes
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
        if (preg_match('/([A-Z]+)/', $request->path(), $match)) {
            $newRoute = str_replace($request->path(), strtolower($request->path()), $request->fullUrl());
            return Redirect::to($newRoute, 301);
        }

        return $next($request);
    }
}
