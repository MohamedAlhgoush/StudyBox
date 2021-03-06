<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
class AdminMiddleware
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
      if($request->user() && $request->user()->role ==3){
         return $next($request);
      }
        return redirect('login');
    }
}
