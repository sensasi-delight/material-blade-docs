@php
    $desc = 'A banner displays a prominent message and related optional actions.';

    $pageData = [
        'title' => 'Banner',
        'metas' => [
            'description' => $desc,
        ],
        'headings' => ['Basic', 'Fixed Banner', 'Icon'],
        'referenceLinks' => [
            // 'https://mui.com/material-ui/react-banner/', // MUI doesn't have a banner component
        'https://m2.material.io/components/banners/web/',
        'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-banner/README.md',
        'https://material-components.github.io/material-components-web-catalog/#/component/banner',
    ],
    'componentsProps' => [
        'mbc::banner' => [
            ['action', 'string', '', 'The action to be performed when the banner is clicked.'],
            ['children', 'any', '', 'Required. The content of the banner.'],
            ['fixed', 'bool', 'false', 'Fix the banner at the top of the screen.'],
            ['icon', 'string', '', 'The banner icon.'],
            ['open', 'bool', 'false', 'Whether the banner is open.'],
            ['slot:actions', 'any', '', 'The actions to be displayed in the banner.'],
            ['text', 'string', '', 'The banner text.'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $desc }}</x-mbc::typography>

    <x-mbc::typography>
        A banner displays an important, succinct message, and provides actions for users to address (or dismiss the banner).
        It requires a user action to be dismissed.
    </x-mbc::typography>

    <x-mbc::typography>
        Banners should be displayed at the top of the screen, below a top app bar. They’re persistent and nonmodal, allowing
        the user to either ignore them or interact with them at any time. Only one banner should be shown at a time.
    </x-mbc::typography>
@endsection

@section('content')

    @include('pages.components.banner.parts.basic-section')

    @include('pages.components.banner.parts.fixed-banner-section')

    @include('pages.components.banner.parts.icon-section')

@endsection
