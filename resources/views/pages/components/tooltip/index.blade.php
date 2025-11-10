@php
    $pageData = [
        'title' => 'Tooltip',
        'metas' => [
            'description' => 'Material Design Tooltip component for Laravel Blade - Display informative text when users hover over an element',
        ],
        'headings' => [
            'Plain Tooltip',
            'Rich Tooltip',
            'Persistent Tooltip',
            'Tooltip Positioning',
        ],
        'referenceLinks' => [
            'https://m3.material.io/components/tooltips/overview',
            'https://material-components.github.io/material-components-web-catalog/#/component/tooltip',
        ],
        'componentsProps' => [
            'mbc::tooltip' => [
                ['title', 'string', 'null', 'The text content for plain tooltip'],
                ['persistent', 'boolean', 'false', 'Whether the tooltip is persistent (stays open)'],
                ['id', 'string', 'auto', 'Unique identifier for the tooltip (auto-generated if not provided)'],
                ['slot', 'html', '', 'The anchor element that triggers the tooltip'],
                ['body', 'string', 'null', 'Body content for rich tooltip (enables rich tooltip mode)'],
                ['action', 'html', 'null', 'Action buttons for rich tooltip'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Tooltips display informative text when users hover over, focus on, or tap an element. They provide helpful context and instructions.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 1rem; align-items: center; padding: 2rem;">
            <x-mbc::tooltip title="This is a tooltip">
                <x-mbc::button label="Hover Me" variant="outlined" />
            </x-mbc::tooltip>
        </div>

        @slot('codeSummary')
            @include('pages.components.tooltip._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.tooltip._sections.plain')
    @include('pages.components.tooltip._sections.rich')
    @include('pages.components.tooltip._sections.persistent')
    @include('pages.components.tooltip._sections.positioning')
@endsection
