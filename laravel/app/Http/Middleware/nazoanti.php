<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cookie;

class nazoanti
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
		if ($role == 1) {
			if (!$request->session()->has('level')||$request->session()->get('level') == 0) {
				$request->session()->put('level', $role);
			}
				return $next($request);
		}
		else
		{
			if (!$request->session()->has('level')||$request->session()->get('level') == 0) {
				return response()->view('anti');
			}
			else
			{
				$value = $request->session()->get('level', '0');
				if($role < $value)
				{
					return $next($request);
				}
				else
				{
					if($role - $value > 1)
					{
						return response()->view('anti');
					}
					else
					{
						$request->session()->put('level', $role);
						return $next($request);
					}
				}
			}

		}
    }
}
