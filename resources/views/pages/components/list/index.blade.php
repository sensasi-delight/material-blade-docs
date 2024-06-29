@php
    $pageData = [
        'title' => 'List',
        'description' => 'Lists are continuous, vertical indexes of text or images.',
        'headings' => ['Basic', 'Variant', 'Divider', 'Dense', 'Leading and Trailing'],
        'referenceLinks' => [
            'https://mui.com/material-ui/react-list/',
            'https://m2.material.io/components/lists/web',
            'https://material-components.github.io/material-components-web-catalog/#/component/list',
            'https://github.com/material-components/material-components-web/tree/v14.0.0/packages/mdc-list',
        ],
        'componentsProps' => [
            'list' => [
                ['avatar', 'boolean', 'false', 'If true, the leading image or icon will be circular.'],
                ['dense', 'boolean', 'false', 'Make the component appears densed.'],
                ['element', 'string', 'ul', 'The HTML element to use.'],
                ['disableRipple', 'boolean', 'false', 'If true, the ripple effect will be disabled.'],
                ['variant', 'single-line | two-line', 'single-line', 'The variant to use.'],
            ],
            'list-item' => [
                ['activated', 'boolean', 'false', 'If true, the list item will be activated.'],
                ['disabled', 'boolean', 'false', 'If true, the list item will be disabled.'],
                ['selected', 'boolean', 'false', 'If true, the list item will be selected.'],
                ['disableRipple', 'boolean', 'false', 'If true, the ripple effect will be disabled.'],
                ['primary', 'string', '', 'The primary text for <code>two-line</code> variant.'],
                ['secondary', 'string', '', 'The secondary text for <code>two-line</code> variant.'],
                ['element', 'string', 'li', 'The HTML element to use.'],
                [
                    'startIcon',
                    'url string or icon string format',
                    '',
                    'The leading icon or image. Icon string format can be found in the <a href="#">Icon component page</a>.',
                ],
                [
                    'endIcon',
                    'url string or icon string format',
                    '',
                    'The trailing icon or image. Icon string format can be found in the <a href="#">Icon component page</a>.',
                ],
            ],
            'list-divider' => [['padded', 'bool', 'false', 'If true, the divider will have a padding.']],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>
        Lists are continuous, vertical indexes of text or images.
    </x-mbc::typography>
@endsection

@section('content')
    <section>
        <x-h2>
            Basic
        </x-h2>

        @include('pages.components.list.parts.basic-section-body')
    </section>

    <section>
        <x-h2>
            Variant
        </x-h2>

        @include('pages.components.list.parts.variant-section-body')
    </section>

    <section>
        <x-h2>
            Divider
        </x-h2>

        @include('pages.components.list.parts.divider-section-body')
    </section>

    <section>
        <x-h2>
            Dense
        </x-h2>

        @include('pages.components.list.parts.dense-list-section-body')
    </section>

    <section>
        <x-h2>
            Leading and Trailing
        </x-h2>

        @include('pages.components.list.parts.leading-and-trailing-section-body')

    </section>
@endsection
