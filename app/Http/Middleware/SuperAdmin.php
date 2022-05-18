<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Session;

class SuperAdmin
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
            return redirect()->route('login');
        } else {
            $user_roles = Session::get('user_role')[0];
            if ($user_roles->slug == 'super_admin') {
                return $next($request);
            }
        }
        Auth::logout();
        return redirect()->route('portal/login');
    
    

 
        //  return $next($request);
    }
}