@php
    $pageData = [
        'title' => 'Switch',
        'metas' => [
            'description' => 'Material Design Switch component for Laravel Blade - Switches toggle the state of a single item on or off',
        ],
        'headings' => [
            'Basic Switch',
            'Switch States',
            'Switch with Icons',
            'Switch Colors',
            'Disabled State',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/switches',
            'https://material-components.github.io/material-components-web-catalog/#/component/switch',
        ],
        'componentsProps' => [
            'mbc::switch' => [
                ['on', 'boolean', 'false', 'Whether the switch is in the on/selected state'],
                ['color', 'string', 'primary', 'Switch color (primary, secondary, or custom color)'],
                ['icon', 'string', 'null', 'Icon name to display when switch is ON'],
                ['offIcon', 'string', 'null', 'Icon name to display when switch is OFF'],
                ['disabled', 'boolean', 'false', 'Whether the switch is disabled'],
                ['aria-label', 'string', 'recommended', 'Accessibility label for the switch'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Switches toggle the state of a single item on or off. They are the preferred way to adjust settings on mobile devices.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 2rem; align-items: center;">
            <x-mbc::switch aria-label="Basic switch example" />
            <x-mbc::switch :on="true" aria-label="Switch on example" />
        </div>

        @slot('codeSummary')
            @include('pages.components.switch._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.switch._sections.basic')
    @include('pages.components.switch._sections.states')
    @include('pages.components.switch._sections.icons')
    @include('pages.components.switch._sections.colors')
    @include('pages.components.switch._sections.disabled')
@endsection
