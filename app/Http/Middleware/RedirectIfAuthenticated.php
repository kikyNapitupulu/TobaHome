<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if(Auth::guard($guard)->check()){
                if(Auth::user()->Admin){
                    return redirect('admin');
                }
                elseif(Auth::user()->Owner){
                    return redirect('owner');
                }elseif(Auth::user()->Visitor){
                    return redirect('Visitor');
                }
            }
            return redirect('home');
        }

        return $next($request);
    }
}
