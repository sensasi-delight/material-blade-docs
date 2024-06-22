<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/installation', function () {
    return view('installation');
});

Route::get('/components/lists', function () {
    return view('docs.lists');
});
