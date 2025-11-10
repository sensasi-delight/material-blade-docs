@php
    $pageData = [
        'title' => 'Slider',
        'metas' => [
            'description' => 'Material Design Slider component for Laravel Blade - Sliders allow users to select from a range of values by moving a slider thumb',
        ],
        'headings' => [
            'Continuous Slider',
            'Discrete Slider',
            'Discrete with Tick Marks',
            'Range Slider',
            'Custom Steps',
            'Disabled State',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/sliders',
            'https://material-components.github.io/material-components-web-catalog/#/component/slider',
        ],
        'componentsProps' => [
            'mbc::slider' => [
                ['min', 'int', '0', 'Minimum value of the slider'],
                ['max', 'int', '100', 'Maximum value of the slider'],
                ['value', 'int', '50', 'Current value (for single slider)'],
                ['step', 'int', 'null', 'Step size for value quantization'],
                ['discrete', 'boolean', 'false', 'Whether to show value indicator (discrete slider)'],
                ['tickMarks', 'boolean', 'false', 'Whether to show tick marks (requires discrete=true)'],
                ['range', 'boolean', 'false', 'Whether this is a range slider (two thumbs)'],
                ['valueStart', 'int', '30', 'Start value (for range slider)'],
                ['valueEnd', 'int', '70', 'End value (for range slider)'],
                ['minRange', 'int', 'null', 'Minimum distance between thumbs (for range slider)'],
                ['name', 'string', 'null', 'Input name attribute (for single slider)'],
                ['nameStart', 'string', 'rangeStart', 'Input name for start thumb (range slider)'],
                ['nameEnd', 'string', 'rangeEnd', 'Input name for end thumb (range slider)'],
                ['disabled', 'boolean', 'false', 'Whether the slider is disabled'],
                ['aria-label', 'string', 'required', 'Accessibility label for the slider'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Sliders allow users to make selections from a range of values. They reflect a range of values along a bar, from which users may select a single value or range of values.
    </x-mbc::typography>

    <x-component-preview>
        <div style="padding: 1rem;">
            <x-mbc::slider aria-label="Basic slider example" />
        </div>

        @slot('codeSummary')
            @include('pages.components.slider._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.slider._sections.continuous')
    @include('pages.components.slider._sections.discrete')
    @include('pages.components.slider._sections.tick-marks')
    @include('pages.components.slider._sections.range')
    @include('pages.components.slider._sections.steps')
    @include('pages.components.slider._sections.disabled')
@endsection
