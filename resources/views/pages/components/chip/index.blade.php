@php
    $pageData = [
        'title' => 'Chip',
        'metas' => [
            'description' => 'Material Design Chip component for Laravel Blade - Compact elements representing inputs, attributes, or actions',
        ],
        'headings' => [
            'Basic Chips',
            'Chips with Icons',
            'Filter Chips',
            'Input Chips',
            'Chip States',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/chips',
            'https://material-components.github.io/material-components-web-catalog/#/component/chips',
        ],
        'componentsProps' => [
            'mbc::chip-set' => [
                ['variant', 'string', 'basic', 'Chip set variant: basic, filter, input, choice'],
                ['slot', 'html', '', 'The chips to display'],
            ],
            'mbc::chip' => [
                ['label', 'string', 'required', 'The text label for the chip'],
                ['icon', 'string|array', 'null', 'Leading icon name'],
                ['selected', 'boolean', 'false', 'Whether the chip is selected (for filter chips)'],
                ['disabled', 'boolean', 'false', 'Whether the chip is disabled'],
                ['withWrapper', 'boolean', 'false', 'Add touch target wrapper for better touch accessibility'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Chips are compact elements that represent an input, attribute, or action. They allow users to enter information, make selections, filter content, or trigger actions.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::chip-set>
            <x-mbc::chip label="Chip One" />
            <x-mbc::chip label="Chip Two" />
            <x-mbc::chip label="Chip Three" />
        </x-mbc::chip-set>

        @slot('codeSummary')
            @include('pages.components.chip._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.chip._sections.basic')
    @include('pages.components.chip._sections.icons')
    @include('pages.components.chip._sections.filter')
    @include('pages.components.chip._sections.input')
    @include('pages.components.chip._sections.states')
@endsection
