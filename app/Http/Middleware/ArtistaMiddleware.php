<?php

namespace App\Http\Middleware;

use Closure;

class ArtistaMiddleware
{
    public function handle($request, Closure $next)
    {
      if ($request->user() && $request->user()->tipo != 1){
        return response()->redirectTo(route('sistema.index'));
      }
      return $next($request);
    }
}
