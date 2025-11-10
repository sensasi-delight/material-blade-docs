@php
    $pageData = [
        'title' => 'Menu',
        'metas' => [
            'description' => 'Material Design Menu component for Laravel Blade - Display a list of choices on a temporary surface',
        ],
        'headings' => [
            'Basic Menu',
            'Menu Items',
            'Anchor Corner',
            'Fixed Position',
            'Interactive Example',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/menus',
            'https://material-components.github.io/material-components-web-catalog/#/component/menu',
        ],
        'componentsProps' => [
            'mbc::menu' => [
                ['open', 'boolean', 'false', 'Whether the menu is open by default'],
                ['anchorCorner', 'string', 'null', 'Corner of the anchor to align the menu (TOP_LEFT, TOP_RIGHT, BOTTOM_LEFT, BOTTOM_RIGHT)'],
                ['fixed', 'boolean', 'false', 'Whether the menu is in a fixed position'],
                ['slot', 'string', '', 'Menu items content (list items)'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Menus display a list of choices on a temporary surface. They appear when users interact with a button, action, or
        other control.
    </x-mbc::typography>

    <x-component-preview>
        <div style="position: relative; height: 250px;">
            <x-mbc::button id="menu-button-demo" label="Open Menu" variant="raised" />

            <x-mbc::menu id="menu-demo" style="position: absolute; top: 48px; left: 0;">
                <x-mbc::list-item primary="Item 1" />
                <x-mbc::list-item primary="Item 2" />
                <x-mbc::list-item primary="Item 3" />
            </x-mbc::menu>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const menuEl = document.getElementById('menu-demo');
                const menu = menuEl.MDCMenu;
                const button = document.getElementById('menu-button-demo');

                button.addEventListener('click', function () {
                    menu.open = !menu.open;
                });
            });
        </script>

        @slot('codeSummary')
        @include('pages.components.menu._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.menu._sections.basic')
    @include('pages.components.menu._sections.items')
    @include('pages.components.menu._sections.anchor')
    @include('pages.components.menu._sections.fixed')
    @include('pages.components.menu._sections.interactive')
@endsection