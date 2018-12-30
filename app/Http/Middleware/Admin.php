<?php

namespace App\Http\Middleware;

use Auth;
use Session;

use Closure;


class Admin
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
        // Check if user has permission to access route
        if(!Auth::user()->admin) {
            Session::flash('info', 'You do not have permission to perform this operation!');

            return redirect()->back();
        }

        return $next($request);
    }
}
