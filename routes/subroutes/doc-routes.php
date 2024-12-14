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
    'basic',
    'fixed',
] as $name) {
    Route::view(
        'components/app-bar/_iframes/'.$name,
        'pages.components.app-bar._iframes.'.$name
    )->name('components.app-bar._iframes.'.$name);
}

Route::get(
    'components/app-bar/_iframes/variants/{variant}',
    fn (string $variant) => view('pages.components.app-bar._iframes.variants', compact('variant'))
)->name('components.app-bar._iframes.variants');
