@php
    $desc = 'Use typography to present your design and content as clearly and efficiently as possible.';

    $pageData = [
        'title' => 'Typography',
        'metas' => [
            'description' => $desc,
        ],
        'headings' => ['Variants', 'Headings', 'Body Text', 'Specialized Variants', 'Custom Element', 'Gutter'],
        'referenceLinks' => [
            'https://mui.com/material-ui/react-typography/',
            'https://m2.material.io/design/typography/the-type-system.html',
            'https://m3.material.io/styles/typography/overview',
        ],
        'componentsProps' => [
            'mbc::typography' => [
                ['children', 'string | html', null, 'Required. The content of the component.'],
                [
                    'variant',
                    "'h1' | 'h2' | 'h3' | 'h4' | 'h5' | 'h6' | 'subtitle1' | 'subtitle2' | 'body1' | 'body2' | 'button' | 'caption' | 'overline'",
                    "'body1'",
                    'The typography variant to use.',
                ],
                ['element', 'string', 'auto', 'The HTML element to render. Defaults based on variant: h1-h6 for headlines, h6 for subtitles, p for others.'],
                ['disableGutter', 'bool', 'false', 'If true, removes the default bottom margin.'],
                ['slot', 'string', null, 'Alternative way to pass content.'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $desc }}</x-mbc::typography>

    <x-mbc::typography>
        The Typography component makes it easy to apply a default set of font weights and sizes in your application.
        It uses Material Design typography guidelines to ensure consistency across your interface.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::typography variant="h4">
            Typography Component
        </x-mbc::typography>

        @slot('codeSummary')
            @include('pages.components.typography._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.typography._sections.variants')
    @include('pages.components.typography._sections.headings')
    @include('pages.components.typography._sections.body-text')
    @include('pages.components.typography._sections.specialized')
    @include('pages.components.typography._sections.element')
    @include('pages.components.typography._sections.gutter')
@endsection
