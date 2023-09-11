<?php

namespace App\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use App\Helpers\Data as Helper;

class VokkeMiddleware
{


    /**
     *
     */
    public function __construct()
    {

    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Application|Redirector|RedirectResponse
     */
    public function handle(Request $request, Closure $next) {
        //dd(json_encode($request->all()));
        return $next($request);
    }
}
