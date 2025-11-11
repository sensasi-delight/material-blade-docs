@php
    $desc = 'Checkboxes allow users to select one or more items from a set, or to toggle an option on or off.';

    $pageData = [
        'title' => 'Checkbox',
        'metas' => [
            'description' => $desc,
        ],
        'headings' => ['Basic', 'With Label', 'Colors', 'Indeterminate State', 'Disabled State'],
        'referenceLinks' => [
            'https://mui.com/material-ui/react-checkbox/',
            'https://m2.material.io/components/checkboxes',
            'https://material-components.github.io/material-components-web-catalog/#/component/checkbox',
            'https://github.com/material-components/material-components-web/tree/v14.0.0/packages/mdc-checkbox',
        ],
        'componentsProps' => [
            'mbc::checkbox' => [
                ['label', 'string', null, 'The label text for the checkbox.'],
                [
                    'color',
                    'string',
                    'primary',
                    'The color of the checkbox. Supports theme colors (primary, secondary, error, warning, info, success) or any valid CSS color.',
                ],
                ['indeterminate', 'bool', 'false', 'If true, the checkbox will be in an indeterminate state.'],
                ['checked', 'bool', 'false', 'If true, the checkbox will be checked.'],
                ['disabled', 'bool', 'false', 'If true, the checkbox will be disabled.'],
                ['name', 'string', null, 'Name attribute for the checkbox input.'],
                ['value', 'string', null, 'Value attribute for the checkbox input.'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $desc }}</x-mbc::typography>

    <x-mbc::typography>
        Checkboxes can be used to turn an option on or off, or to select multiple values from a list. Material Blade provides a checkbox component that follows Material Design guidelines.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 1rem; align-items: center;">
            <x-mbc::checkbox />
            <x-mbc::checkbox checked />
        </div>

        @slot('codeSummary')
            @include('pages.components.checkbox._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.checkbox._sections.basic')
    @include('pages.components.checkbox._sections.label')
    @include('pages.components.checkbox._sections.colors')
    @include('pages.components.checkbox._sections.indeterminate')
    @include('pages.components.checkbox._sections.disabled')
@endsection
