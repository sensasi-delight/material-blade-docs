@php
    $desc =
        'App Bar is a component that is used to display important information to the user. It can be used to show alerts, warnings, or any other important information.';

    $pageData = [
        'title' => 'App Bar',
        'metas' => [
            'description' => $desc,
        ],
        'headings' => ['Basic', 'Colors', 'Icons', 'Fixed App Bar', 'Variants'],
        'referenceLinks' => [
            'https://m2.material.io/components/app-bars-top/web',
            'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-top-app-bar/README.md',
            'https://material-components.github.io/material-components-web-catalog/#/component/top-app-bar',
        ],
        'componentsProps' => [
            'mbc::alert' => [
                ['color', "'primary' | 'secondary' | 'success' | 'error' | 'info' | 'warning' | string", '', ''],
                ['fixed', 'bool', 'false', ''],
                ['variant', "'short' | 'short-collapsed' | 'dense' | 'prominent' | string", 'basic', ''],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $desc }}</x-mbc::typography>

    <x-component-preview>
        <iframe src="{{ route('components.app-bar._iframes.app-bar-basic') }}"></iframe>

        @slot('code')
            @include('pages.components.app-bar._codes.basic')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    {{-- @include('pages.components.app-bar._sections.colors') --}}
    @include('pages.components.app-bar._sections.app-bar-fixed')

    {{-- @include('pages.components.alert._sections.variants')
    @include('pages.components.alert._sections.severities')
    @include('pages.components.alert._sections.icons') --}}
@endsection

