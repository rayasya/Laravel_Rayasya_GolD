<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class SweetAlertMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (session()->has('success')) {
            Alert::success('Success', session()->get('success'));
            session()->forget('success');
        }

        if (session()->has('error')) {
            Alert::error('Error', session()->get('error'));
            session()->forget('error');
        }

        if (session()->has('warning')) {
            Alert::warning('Warning', session()->get('warning'));
            session()->forget('warning');
        }

        return $response;
    }
}
