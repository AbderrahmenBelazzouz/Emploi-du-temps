<?php

namespace App\Http\Middleware;

use Closure;

class name1
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
	echo "using middleware name1" ;
        return $next($request);
    }
}
