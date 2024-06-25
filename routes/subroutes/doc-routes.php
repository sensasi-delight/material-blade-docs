<?php

use Illuminate\Support\Facades\Route;

$docRoutes = [
    'getting-started' => ['introduction', 'requirements', 'installation'],
    'components' => ['list'],
];

foreach ($docRoutes as $subpath => $pages) {
    foreach ($pages as $page) {
        Route::get(
            $subpath . '/' . $page,
            fn () => view('pages.' . $subpath . '.' . $page . '.index')
        )->name($subpath . '.' . $page);
    }
}
