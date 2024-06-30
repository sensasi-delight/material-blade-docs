@php
    $pageData = [
        'title' => 'Floating Action Button',
        'metas' => [
            'description' => 'A Floating Action Button (FAB) performs the primary, or most common, action on a screen.',
        ],
        'headings' => ['Basic', 'Variants', 'Extended'],
        'referenceLinks' => [
            'https://mui.com/material-ui/react-floating-action-button/',
            'https://m2.material.io/components/buttons-floating-action-button/web',
            'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-fab/README.md',
            'https://material-components.github.io/material-components-web-catalog/#/component/fab',
        ],
        'componentsProps' => [
            'mbc::fab' => [
                ['icon', 'string', 'null', 'The icon to display.'],
                ['label', 'string', 'null', 'The label to display.'],
                ['variant', "'regular' | 'mini' | string", "'regular'", 'The variant of the FAB.'],
                ['color', 'theme color | css color | string', "'secondary'", 'The color of the FAB.'],
                ['disabled', 'bool', 'false', 'If true, the FAB will be disabled.'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $pageData['metas']['description'] }}</x-mbc::typography>

    <x-mbc::typography>
        A floating action button appears in front of all screen content, typically as a circular shape with an icon in its
        center. FABs come in two types: regular, and extended.
    </x-mbc::typography>

    <x-mbc::typography>
        Only use a FAB if it is the most suitable way to present a screen's primary action. Only one component is
        recommended per screen to represent the most common action.
    </x-mbc::typography>
@endsection

@section('content')
    <section>
        <x-h2>
            Basic
        </x-h2>

        <x-component-preview>
            <x-mbc::fab icon="favorite" />

            @slot('code-summary')
                &lt;x-mbc::fab icon="favorite" />
            @endslot
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Variants
        </x-h2>

        <x-component-preview>
            <x-mbc::fab
                icon="add"
                disabled
            />
            <x-mbc::fab
                icon="add"
                variant="mini"
            />

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::fab icon="add" variant="regular" />
&lt;x-mbc::fab icon="add" variant="mini" />
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Extended
        </x-h2>

        <x-component-preview>
            <div>
                <x-mbc::fab label="Order" />
                <x-mbc::fab
                    icon="add"
                    label="Create"
                />
            </div>

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::fab label="Order" />
&lt;x-mbc::fab icon="add" label="Create" />
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>
@endsection
