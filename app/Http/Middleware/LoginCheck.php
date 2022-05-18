<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('user_portal')) {
            if (session()->get('user_portal') == 'dashboard') {
                if(!session()->has('user_role') && ($request->path() != 'portal/login')){
                    return redirect('portal/login')->with('error','You must be logged in');
                }
        
                if(session()->has('user_role') && ($request->path() == 'portal/login') ){
                    return back();
                }
            } else {
                return redirect('guest/profile')->with('access_error','You are not allowed to access.');
            }
        } else {
            return redirect('portal/login')->with('error','You must be logged in');
        }
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
