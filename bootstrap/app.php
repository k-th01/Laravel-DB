<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeVerify;
use App\Http\Middleware\Password;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Single middleware
        // $middleware->append(Password::class);
        // $middleware->append(AgeVerify::class);

        // Group middleware
        $middleware->appendToGroup('verify1',[
            AgeVerify::class,
            Password::class
        ]);

        // $middleware->use([
        //     \App\Http\Middleware\Password::class
        // ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
