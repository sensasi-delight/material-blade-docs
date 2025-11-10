@php
    $pageData = [
        'title' => 'Snackbar',
        'metas' => [
            'description' => 'Material Design Snackbar component for Laravel Blade - Snackbars provide brief messages about app processes at the bottom of the screen',
        ],
        'headings' => [
            'Basic Snackbar',
            'With Message Attribute',
            'With Action Button',
            'Snackbar Variants',
            'Opening Snackbar',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/snackbars',
            'https://material-components.github.io/material-components-web-catalog/#/component/snackbar',
        ],
        'componentsProps' => [
            'mbc::snackbar' => [
                ['message', 'string', 'null', 'Message text to display (can also use slot content)'],
                ['variant', 'string', 'default', 'Snackbar variant: default, leading, or stacked'],
                ['id', 'string', 'optional', 'Element ID for programmatic control'],
                ['class', 'string', 'optional', 'Additional CSS classes'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Snackbars provide brief messages about app processes at the bottom of the screen. They appear temporarily, towards the bottom of the screen, and shouldn't interrupt the user experience.
    </x-mbc::typography>

    <x-component-preview>
        <div style="position: relative; height: 200px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
            <x-mbc::snackbar message="This is a basic snackbar message" class="mdc-snackbar--open" />
        </div>

        @slot('codeSummary')
            @include('pages.components.snackbar._codes.description-summary')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> In production, snackbars are programmatically opened using JavaScript. The examples on this page use the <code>mdc-snackbar--open</code> class for demonstration purposes. Always use the <code>message</code> attribute to pass snackbar content.
    </x-mbc::typography>
@endsection

@section('content')
    @include('pages.components.snackbar._sections.basic')
    @include('pages.components.snackbar._sections.message-attribute')
    @include('pages.components.snackbar._sections.action')
    @include('pages.components.snackbar._sections.variants')
    @include('pages.components.snackbar._sections.opening')
@endsection
