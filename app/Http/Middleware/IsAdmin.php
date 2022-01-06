<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(Session::has('isAdmin'));
        if(Session::has('isAdmin')){
            // dd('admin');
            return $next($request);
        }else{
            return redirect('/loggin');
        }
        
    }
}
