@php
    $pageData = [
        'title' => 'Data Table',
        'metas' => [
            'description' => 'Material Design Data Table component for Laravel Blade - Display structured data in rows and columns with optional checkboxes',
        ],
        'headings' => [
            'Basic Data Table',
            'Data Table with Header',
            'Data Table with Checkboxes',
            'Numeric Columns',
            'Complete Example',
        ],
        'referenceLinks' => [
            'https://m2.material.io/components/data-tables',
            'https://material-components.github.io/material-components-web-catalog/#/component/data-table',
        ],
        'componentsProps' => [
            'mbc::data-table' => [
                ['header', 'array', '[]', 'Array of column headers. Use "numeric" as value for numeric columns.'],
                ['data', 'array', '[]', 'Array of rows, where each row is an array of cell values'],
                ['withCheckbox', 'boolean', 'false', 'Include row selection checkboxes. First column in data becomes checkbox state (true/false)'],
                ['aria-label', 'string', 'null', 'Accessible label for the table'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Data tables display sets of data across rows and columns. They organize information in a way that's easy to scan, so users can look for patterns and insights.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::data-table
            :header="['Dessert', 'Calories', 'Fat', 'Carbs', 'Protein']"
            :data="[
                ['Frozen yogurt', 159, 6.0, 24, 4.0],
                ['Ice cream sandwich', 237, 9.0, 37, 4.3],
                ['Eclair', 262, 16.0, 24, 6.0],
            ]"
        />

        @slot('codeSummary')
            @include('pages.components.data-table._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.data-table._sections.basic')
    @include('pages.components.data-table._sections.header')
    @include('pages.components.data-table._sections.checkbox')
    @include('pages.components.data-table._sections.numeric')
    @include('pages.components.data-table._sections.complete')
@endsection
