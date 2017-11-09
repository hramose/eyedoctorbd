<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class VisitorsMiddleware
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
        if (!Sentinel::check()) {
            return $next($request);
        } else {
             if (Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin'){
                 return redirect()->route('adminDashboard');
             }elseif (Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'doctor') {
                 return redirect()->route('doctorDashboard');                 
             }else {
                 return redirect('/');
             }
            
        }
        
    }
}
