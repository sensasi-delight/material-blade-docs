<?php

use App\Enums\DocRoute;
use Illuminate\Support\Facades\Route;

foreach (DocRoute::cases() as $routeEnum) {
    $route = $routeEnum->value;
    $path = implode('/', explode('.', $route));

    Route::view($path, "pages.{$route}.index")->name($route);
}

Route::view(
    'components/banner/parts/fixed-banner-preview',
    'pages.components.banner.parts.fixed-banner-preview'
)->name('components.banner.parts.fixed-banner-preview');

foreach ([
    'desc',
    'fixed',
] as $name) {
    Route::view(
        'components/app-bar/_iframes/'.$name,
        'pages.components.app-bar._iframes.'.$name
    )->name('components.app-bar._iframes.'.$name);
}
