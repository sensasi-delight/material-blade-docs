@php
    $pageData = [
        'title' => 'List',
        'description' => 'Lists are continuous, vertical indexes of text or images.',
        'headings' => ['Variants' => ['Single Line', 'Two Line'], 'Dense List'],
        'referenceLinks' => [
            'https://m2.material.io/components/lists/web',
            'https://material-components.github.io/material-components-web-catalog/#/component/list',
            'https://github.com/material-components/material-components-web/tree/v14.0.0/packages/mdc-list',
            'https://mui.com/material-ui/react-list/',
        ],
        'props' => [
            ['dense', 'bool', 'false', 'Make the component appears densed.'],
            [
                'icon',
                'string',
                '',
                'Icon name from <a href="https://material.io/resources/icons/?style=baseline">Material Icons</a>.',
            ],
            ['variant', 'single-line | two-line | padded', 'single-line', ''],
            ['wrapper', 'boolean', 'false', 'Wraps the list items in a container.'],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('content')
    <section>
        <x-h2>
            Variants
        </x-h2>

        @include('pages.components.list.parts.single-line-section')

        @include('pages.components.list.parts.two-line-section')

    </section>

    <section>
        <x-h2>
            Dense List
        </x-h2>

        <x-code-preview>
            <x-mbc::list dense
                         disableRipple>
                <x-mbc::list-item>
                    Item 1
                </x-mbc::list-item>

                <x-mbc::list-item icon="favorite">
                    Item 2
                </x-mbc::list-item>

                <x-mbc::list-item icon="inbox">
                    Item 3
                </x-mbc::list-item>

                <x-mbc::list-divider />

                <x-mbc::list-item>
                    Item 4
                </x-mbc::list-item>
            </x-mbc::list>
        </x-code-preview>
    </section>
@endsection
