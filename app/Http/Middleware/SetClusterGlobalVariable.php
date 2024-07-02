<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SetClusterGlobalVariable
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $cluster = Auth::user()->cluster;
            config(['database.connections.cluster.database' => $cluster]);
        }
        return $next($request);
    }
}
