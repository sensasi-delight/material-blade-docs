@php
    $pageData = [
        'title' => 'Navigation Drawer',
        'metas' => [
            'description' => 'Material Design Navigation Drawer component for Laravel Blade - Side navigation panels that can display app navigation and other content',
        ],
        'headings' => [
            'Permanent Drawer',
            'Dismissible Drawer',
            'Modal Drawer',
            'Drawer with Header',
            'Drawer Content',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/navigation-drawer',
            'https://material-components.github.io/material-components-web-catalog/#/component/drawer',
            'https://mui.com/material-ui/react-drawer/',
        ],
        'componentsProps' => [
            'mbc::drawer' => [
                ['variant', 'string', 'permanent', 'Drawer behavior: permanent, dismissible, modal'],
                ['title', 'string', 'null', 'Optional header title'],
                ['subtitle', 'string', 'null', 'Optional header subtitle'],
                ['slot', 'html', '', 'Drawer content (typically navigation items)'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Navigation drawers provide access to destinations and app functionality, such as switching accounts. They can either be permanently on-screen or controlled by a navigation menu icon.
    </x-mbc::typography>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Alias:</strong> This component can be used with <code>x-mbc::drawer</code> or <code>x-mbc::navigation-drawer</code>.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; height: 300px; border: 1px solid #e0e0e0; position: relative;">
            <x-mbc::drawer variant="permanent" title="Navigation">
                <x-mbc::list>
                    <x-mbc::list-item primary="Home" startIcon="home" />
                    <x-mbc::list-item primary="Profile" startIcon="person" />
                    <x-mbc::list-item primary="Settings" startIcon="settings" />
                </x-mbc::list>
            </x-mbc::drawer>
            
            <div style="flex: 1; padding: 1rem; background: #fafafa;">
                <x-mbc::typography variant="h6">Main Content Area</x-mbc::typography>
                <x-mbc::typography>The drawer is permanently visible on the left side.</x-mbc::typography>
            </div>
        </div>

        @slot('codeSummary')
            @include('pages.components.navigation-drawer._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.navigation-drawer._sections.permanent')
    @include('pages.components.navigation-drawer._sections.dismissible')
    @include('pages.components.navigation-drawer._sections.modal')
    @include('pages.components.navigation-drawer._sections.header')
    @include('pages.components.navigation-drawer._sections.content')
@endsection
