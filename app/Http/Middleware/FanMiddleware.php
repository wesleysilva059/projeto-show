<?php

namespace App\Http\Middleware;

use Closure;

class FanMiddleware
{
    public function handle($request, Closure $next)
    {
      if ($request->user() && $request->user()->tipo != 0){
        return response()->redirectTo(route('sistema.index'));
      }
      return $next($request);
    }
}
