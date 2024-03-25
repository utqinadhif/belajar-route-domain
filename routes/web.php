<?php

use Illuminate\Support\Facades\Route;

Route::domain('{name}.' . config('app.url'))->group(function () {
    Route::get('/', function (string $name) {
        return $name;
    });
});

Route::get('/', function () {
    return 'root';
});
