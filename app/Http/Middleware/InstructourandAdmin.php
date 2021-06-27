<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
class InstructourandAdmin
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
      if($request->user() && $request->user()->role ==3 || $request->user() && $request->user()->role ==2){
         return $next($request);
      }
        return redirect('login');
    }

}
