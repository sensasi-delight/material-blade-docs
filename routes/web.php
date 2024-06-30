<?php

use Illuminate\Support\Facades\URL;

if (config('app.env') === 'production') {
    URL::forceScheme('https');
}

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

include __DIR__.'/subroutes/doc-routes.php';
