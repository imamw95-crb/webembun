<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CachePublicPages
{
    /**
     * Handle an incoming request.
     *
     * Add browser caching headers for public pages (GET/HEAD only).
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only cache successful GET/HEAD requests for public pages
        if ($request->isMethod('GET') && ! $request->ajax() && ! auth()->check() && $response->isSuccessful()) {
            $response->headers->set('Cache-Control', 'public, max-age=600, s-maxage=3600');
        }

        return $response;
    }
}
