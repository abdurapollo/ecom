<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuth
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
        if($request->session()->has('ADMIN_LOGIN'))
        {

        }
        else
        {
            $request->session()->flash('error', 'Access Denied');
            return redirect('admin');
        }
        return $next($request);
    }
}
