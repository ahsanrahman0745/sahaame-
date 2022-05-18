<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Session;

class Admin
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
        if (!Auth::check()) {
            return redirect()->route('portal/login');
        } else {
            return $next($request);
            // return redirect()->route('/');
            // if (Auth::user()->role == 'sadmin') {
            //     return $next($request);
            
            // }
            // if (Auth::user()->role == 'adm') {
            //     return $next($request);
            // }

            // if (Auth::user()->role == 'edt') {
            //     if($request->segment(1)=='managelisting' or $request->segment(1)=='addlisting'){ 
            //         return $next($request); 
            //     }else{
            //         return redirect()->route('addlisting');
            //     }
            // }
        
            // Auth::logout();
            // return redirect()->route('login');
        }
    }
}