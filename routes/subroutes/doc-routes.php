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
