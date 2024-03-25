<?php

use Illuminate\Support\Facades\Route;

Route::domain('{name}.'.config('app.url'))->group(function () {
    Route::get('/', function (string $name) {
        if ($name == '_acme-challenge') {
            return 'w-MJzR9KGn_QAINwmVZyzPWpwBh0O-OLrS-W0TMyqFQ';
        }

        return $name;
    });
});

Route::get('/', function () {
    return 'root';
});
