<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Adminmiddleware
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
        if(Auth::check())
        {
            if (Auth::user()->role_as == '1') 
            {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('status','Akses dilarang !! Karena anda bukan admin');
            }
        }
        else
        {
            return redirect('/home')->with('status','Silahkan login terlebih dahulu');
        }
    }
}
