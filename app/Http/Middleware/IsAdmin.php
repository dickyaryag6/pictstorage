<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class IsAdmin
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
      if(!(auth()->user()->isAdmin())) {
                return redirect('home');
             }
            // return redirect('admin');
            //return Redirect::to('admin');
            //return Redirect::action('AdminController@admin');
              return $next($request);
      }
}
