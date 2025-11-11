@php
    $pageData = [
        'title' => 'Progress Indicator',
        'metas' => [
            'description' => 'Material Design Progress Indicator components for Laravel Blade - Linear and circular progress indicators for showing loading states',
        ],
        'headings' => [
            'Linear Progress',
            'Circular Progress',
            'Determinate Progress',
            'Indeterminate Progress',
            'Progress with Buffer',
            'Progress Sizes',
            'Progress Colors',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/progress-indicators',
            'https://material-components.github.io/material-components-web-catalog/#/component/linear-progress-indicator',
            'https://material-components.github.io/material-components-web-catalog/#/component/circular-progress-indicator',
        ],
        'componentsProps' => [
            'mbc::linear-progress' => [
                ['value', 'float|null', 'null', 'Progress value between 0 and 1. If null, shows indeterminate state'],
                ['bufferValue', 'float|null', 'null', 'Buffer value for buffering indicator (0-1)'],
                ['color', 'string', 'primary', 'Progress bar color (primary, secondary, or any color)'],
                ['aria-label', 'string', 'required', 'Accessible label for screen readers (required)'],
            ],
            'mbc::circular-progress' => [
                ['value', 'float|null', 'null', 'Progress value between 0 and 1. If null, shows indeterminate state'],
                ['size', 'string', '48px', 'Size of the circular progress (48px, medium/36px, small/24px, or custom)'],
                ['color', 'string', 'primary', 'Progress indicator color (primary, secondary, or any color)'],
                ['aria-label', 'string', 'required', 'Accessible label for screen readers (required)'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Progress indicators express an unspecified wait time or display the length of a process. They inform users about the status of ongoing processes, such as loading an app, submitting a form, or saving updates.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; align-items: center;">
            <div style="width: 100%;">
                <x-mbc::typography variant="subtitle2" gutterBottom>Linear Progress</x-mbc::typography>
                <x-mbc::linear-progress :value="0.7" aria-label="Loading progress" />
            </div>
            
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Circular Progress</x-mbc::typography>
                <x-mbc::circular-progress :value="0.7" aria-label="Loading progress" />
            </div>
        </div>

        @slot('codeSummary')
            @include('pages.components.progress-indicator._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.progress-indicator._sections.linear')
    @include('pages.components.progress-indicator._sections.circular')
    @include('pages.components.progress-indicator._sections.determinate')
    @include('pages.components.progress-indicator._sections.indeterminate')
    @include('pages.components.progress-indicator._sections.buffer')
    @include('pages.components.progress-indicator._sections.sizes')
    @include('pages.components.progress-indicator._sections.colors')
@endsection
