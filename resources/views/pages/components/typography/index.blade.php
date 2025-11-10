@php
    $desc = 'Use typography to present your design and content as clearly and efficiently as possible.';

    $pageData = [
        'title' => 'Typography',
        'metas' => [
            'description' => $desc,
        ],
        'headings' => ['Variants', 'Headings', 'Body Text', 'Special Variants', 'Custom HTML Element', 'Gutter Bottom'],
        'referenceLinks' => [
            'https://mui.com/material-ui/react-typography/',
            'https://m2.material.io/design/typography',
            'https://material-components.github.io/material-components-web-catalog/#/component/typography',
        ],
        'componentsProps' => [
            'mbc::typography' => [
                ['children', 'string | html', null, 'Required. The content of the typography.'],
                [
                    'variant',
                    "'h1' | 'h2' | 'h3' | 'h4' | 'h5' | 'h6' | 'subtitle1' | 'subtitle2' | 'body1' | 'body2' | 'button' | 'caption' | 'overline'",
                    'body1',
                    'The typographic variant to use.',
                ],
                ['element', 'string', 'auto', 'The HTML element to render (e.g., p, span, div, h1-h6). Auto-detected based on variant if not specified.'],
                ['gutterBottom', 'bool', 'false', 'If true, adds bottom margin to the typography.'],
                ['slot', 'string', null, 'Content passed via slot attribute instead of children.'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $desc }}</x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
            <x-mbc::typography variant="h4">Welcome to Material Design</x-mbc::typography>
            <x-mbc::typography variant="body1">
                Typography creates clear hierarchies, organizes information, and guides users through your content.
            </x-mbc::typography>
        </div>

        @slot('codeSummary')
            @include('pages.components.typography._codes.description-summary')
        @endslot
    </x-component-preview>

    <x-mbc::typography>
        The Typography component provides a consistent way to display text content with different styles and semantic meanings according to Material Design specifications.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::typography variant="h4">
            This is a heading (h4 variant)
        </x-mbc::typography>
        <x-mbc::typography>
            This is body text with the default body1 variant.
        </x-mbc::typography>

        @slot('codeSummary')
            @include('pages.components.typography._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.typography._sections.variants')
    @include('pages.components.typography._sections.headings')
    @include('pages.components.typography._sections.body')
    @include('pages.components.typography._sections.special')
    @include('pages.components.typography._sections.element')
    @include('pages.components.typography._sections.gutter')
@endsection
