<?php

namespace App\Http\Middleware;

use Closure;

class checkUsuario
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

        if(strlen($request->nombre) < 4 )
        {
            return redirect('error');
        }
        return $next($request);
    }
}
