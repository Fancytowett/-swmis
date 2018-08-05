<?php

namespace App\Http\Middleware;

use Closure;

class RouteByGroup
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            switch (auth()->user()->user_type) {
                case 0:
                    return redirect('/home');
                case 1:
                    return redirect('agentslanding');
                case 2:
                    return redirect('zoneadminlanding');
                case 3:
                    return redirect('wasteproducerlanding');
                case 4:
                    return redirect('recyclerlanding');

            }
            return $next($request);
        }
    }
}