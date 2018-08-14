<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class logonauth
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

		if( Auth::check() ){
		    $auth = Auth::user();	
		    if( $auth->isPass($auth)){
		        return $next($request);
		    }
		}
		return redirect('/');

    }
}
