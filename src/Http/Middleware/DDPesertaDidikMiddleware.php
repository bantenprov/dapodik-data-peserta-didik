<?php namespace Bantenprov\DDPesertaDidik\Http\Middleware;

use Closure;

/**
 * The DDPesertaDidikMiddleware class.
 *
 * @package Bantenprov\DDPesertaDidik
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDPesertaDidikMiddleware
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
        return $next($request);
    }
}
