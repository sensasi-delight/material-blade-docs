<?php

use App\Enums\DocRoute;
use Illuminate\Support\Facades\Route;

foreach (DocRoute::cases() as $routeEnum) {
    $route = $routeEnum->value;
    $path = implode('/', explode('.', $route));

    Route::get(
        $path,
        fn () => view("pages.{$route}.index")
    )->name($route);
}
