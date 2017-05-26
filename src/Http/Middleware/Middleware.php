<?php

namespace Jalle19\Laravel\LostInterfaces\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Request;

/**
 * Interface for HTTP request middleware
 *
 * @package Jalle19\Laravel\LostInterfaces\Http\Middleware
 */
interface Middleware
{

    /**
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next);

}
