<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Route;
use App\Models\PageTracking;

class Tracking
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
        $route = Route::getRoutes()->match($request);
        $path = $request->path();
        $Data = DB::select("SELECT * FROM page_trackings WHERE page_path = '{$path}'");
        $count = count($Data);
        if (count($Data) > 0) {
            $Data = $Data[0];
            $visits = intval($Data->visits)+1;
            $id = $Data->id;
            $tracking = PageTracking::find($id);
            $tracking->visits = $visits;
            $tracking->save();
        } else {
            $tracking = new PageTracking();
            $tracking->page_path = $path;
            $tracking->visits = 1;
            $tracking->save();
        }
        return $next($request);
    }
}
