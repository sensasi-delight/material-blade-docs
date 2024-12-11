<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

if (config('app.env') === 'production') {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('index');
})->name('index');

include __DIR__.'/subroutes/doc-routes.php';
