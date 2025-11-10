@php
    $desc = 'Cards contain content and actions about a single subject.';

    $pageData = [
        'title' => 'Card',
        'metas' => [
            'description' => $desc,
        ],
        'headings' => ['Basic', 'Variants', 'Card with Media', 'Card with Actions', 'Card Primary Action', 'Complete Example'],
        'referenceLinks' => [
            'https://mui.com/material-ui/react-card/',
            'https://m2.material.io/components/cards',
            'https://material-components.github.io/material-components-web-catalog/#/component/card',
            'https://github.com/material-components/material-components-web/tree/v14.0.0/packages/mdc-card',
        ],
        'componentsProps' => [
            'mbc::card' => [
                ['children', 'string | html', null, 'Required. The content of the card.'],
                [
                    'variant',
                    "'elevated' | 'outlined'",
                    'elevated',
                    'The variant to use.',
                ],
            ],
            'mbc::card-header' => [
                ['title', 'string', null, 'Required. The title of the card.'],
                ['subtitle', 'string', null, 'The subtitle of the card.'],
            ],
            'mbc::card-media' => [
                ['src', 'string', null, 'Required. The image source URL.'],
                ['variant', "'square' | 'wide'", 'wide', 'The aspect ratio variant.'],
            ],
            'mbc::card-content' => [
                ['children', 'string | html', null, 'Required. The content of the card body.'],
            ],
            'mbc::card-actions' => [
                ['buttons', 'slot', null, 'Slot for button actions.'],
                ['iconButtons', 'slot', null, 'Slot for icon button actions.'],
            ],
            'mbc::card-primary-action' => [
                ['children', 'string | html', null, 'Required. The clickable content area of the card.'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $desc }}</x-mbc::typography>

    <x-mbc::typography>
        Cards are surfaces that display content and actions on a single topic. They should be easy to scan for relevant and
        actionable information. Elements, like text and images, should be placed on them in a way that clearly indicates
        hierarchy.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::card>
            <x-mbc::card-header title="Card Title" subtitle="Card Subtitle" />
            <x-mbc::card-content>
                This is a simple card with a header and content.
            </x-mbc::card-content>
        </x-mbc::card>

        @slot('codeSummary')
        @include('pages.components.card._codes.description-summary')
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.card._sections.basic')
    @include('pages.components.card._sections.variants')
    @include('pages.components.card._sections.media')
    @include('pages.components.card._sections.actions')
    @include('pages.components.card._sections.primary-action')
    @include('pages.components.card._sections.complete')
@endsection