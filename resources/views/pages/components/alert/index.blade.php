@php
    $desc = 'Alerts display brief messages for the user without interrupting their use of the app.';

    $pageData = [
        'title' => 'Alert',
        'metas' => [
            'description' => $desc,
        ],
        'headings' => ['Variants', 'Severities', 'Colors', 'Icons'],
        'referenceLinks' => ['https://mui.com/material-ui/react-alert/'],
        'componentsProps' => [
            'mbc::alert' => [
                ['children', 'string | html', null, 'Required. The content of the `mbc::alert`.'],
                [
                    'color',
                    'ThemeColor | CssColor',
                    null,
                    'The color of the component. It supports those theme colors that make sense for this component.',
                ],
                ['severity', "'error' | 'info' | 'success' | 'warning'", 'success', 'The severity of the alert.'],
                ['variant', "'filled' | 'outlined' | 'standard'", 'standard', 'The variant to use.'],
                ['icon', 'string', null, 'The icon to display.'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $desc }}</x-mbc::typography>

    <x-component-preview>
        <x-mbc::alert>This is a success Alert.</x-mbc::alert>

        @slot('codeSummary')
            @include('pages.components.alert._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.alert._sections.variants')
    @include('pages.components.alert._sections.severities')
    @include('pages.components.alert._sections.colors')
    @include('pages.components.alert._sections.icons')
@endsection

