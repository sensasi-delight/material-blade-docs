@php
    $pageData = [
        'title' => 'Tab Bar',
        'metas' => [
            'description' => 'Material Design Tab Bar component for Laravel Blade - Tabs organize content across different screens and views',
        ],
        'headings' => [
            'Basic Tab Bar',
            'Tab Bar with Icons',
            'Icon-Only Tab Bar',
            'Stacked Tab Bar',
            'Tab Bar Colors',
            'Tab Bar Elevation',
            'Indicator Styles',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/tabs',
            'https://material-components.github.io/material-components-web-catalog/#/component/tabs',
        ],
        'componentsProps' => [
            'mbc::tab-bar' => [
                ['tabs', 'array', 'required', 'Array of tab labels. Use associative array with icon names as keys for tabs with icons'],
                ['activeTabNo', 'int', 'null', 'The active tab number (1-indexed). First tab is active by default'],
                ['color', 'string', 'initial', 'Background color of the tab bar'],
                ['fadeIndicator', 'boolean', 'false', 'Use fade animation for the indicator instead of slide'],
                ['stacked', 'boolean', 'false', 'Stack icons above text labels'],
                ['lightText', 'boolean', 'false', 'Use light text color for tabs (for dark backgrounds)'],
                ['iconOnly', 'boolean', 'false', 'Show only icons without text labels'],
                ['indicatorIcon', 'string|array', 'null', 'Icon to use as active indicator instead of underline'],
                ['elevation', 'int', 'null', 'Elevation level (0-24) for the tab bar'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Tabs organize content across different screens, data sets, and other interactions. They make it easy to explore and switch between different views.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" />

        @slot('codeSummary')
            @include('pages.components.tab-bar._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.tab-bar._sections.basic')
    @include('pages.components.tab-bar._sections.with-icons')
    @include('pages.components.tab-bar._sections.icon-only')
    @include('pages.components.tab-bar._sections.stacked')
    @include('pages.components.tab-bar._sections.colors')
    @include('pages.components.tab-bar._sections.elevation')
    @include('pages.components.tab-bar._sections.indicators')
@endsection
