@php
    $title = 'Lists';
@endphp

@extends('layouts.docs')

@section('title', $title)

@section('main')
    <section>
        <div style="margin-bottom: 48px;">
            <x-h1>
                {{ $title }}
            </x-h1>

            <x-mbc::typography variant="h6" element="p">
                Lists are continuous, vertical indexes of text or images.
            </x-mbc::typography>

            <x-mbc::alert severity="info" variant="outlined">
                "<code>List</code>" is a <a href="https://www.php.net/manual/en/reserved.keywords.php">reserved keyword in
                    PHP</a>, therefore we use "<code>MbcList</code>" as the component name.
            </x-mbc::alert>
        </div>
        <section>
            <x-h2>
                Variants
            </x-h2>

            @include('docs.lists.parts.single-line-section')

            @include('docs.lists.parts.two-line-section')

        </section>


        <section>
            <x-h2>
                Dense List
            </x-h2>

            <x-code-preview>
                <x-mbc::list dense disableRipple>
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

        @php
            $data = [
                ['dense', 'bool', 'false', 'Make the component appears densed.'],
                [
                    'icon',
                    'string',
                    '',
                    'Icon name from <a href="https://material.io/resources/icons/?style=baseline">Material Icons</a>.',
                ],
                ['variant', 'single-line | two-line | padded', 'single-line', ''],
                ['wrapper', 'boolean', 'false', 'Wraps the list items in a container.'],
        ]; @endphp

        <x-component-props-section :data="$data" />

        <?php $links = ['https://m2.material.io/components/lists/web', 'https://material-components.github.io/material-components-web-catalog/#/component/list', 'https://github.com/material-components/material-components-web/tree/v14.0.0/packages/mdc-list', 'https://mui.com/material-ui/react-list/']; ?>
        <x-references-section :links="$links" />
    </section>
@endsection
