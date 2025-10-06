<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function ($middleware) {
        $middleware->redirectGuestsTo(function ($request) {
            // check if the guard in use is admin or route prefix belongs to admin
            // but this callback doesn’t directly receive the guard parameter
            // so might need to detect from the route or request

            if ($request->routeIs('admin.*') && !$request->routeIs('admin.login')) {
                return route('admin.login');
            }
            return route('login');
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
