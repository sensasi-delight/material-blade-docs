@php
    $pageData = [
        'title' => 'Icon',
        'metas' => [
            'description' =>
                'Icons are symbols that represent an object or action. They are used to visually communicate core parts of the product and available actions. Icons are used in buttons, lists, inputs, and more. Icons can be used with or without text.',
        ],
        'headings' => ['Basic', 'Variant', 'Font Size', 'Color'],
        'referenceLinks' => [
            'https://m2.material.io/design/iconography/system-icons.html',
            'https://fonts.google.com/icons',
            'https://mui.com/material-ui/material-icons/',
        ],
        'componentsProps' => [
            'mbc::icon' => [
                [
                    'name',
                    'string|array',
                    '',
                    'The name of the icon to be displayed. If the value is an array, the first element is the icon name, and the second element is the icon variant. All available icon names can be found on the <a href="https://fonts.google.com/icons" target="_blank" rel="noopener noreferrer">Google Material Icons <span aria-hidden="true" class="material-icons" style="font-size: inherit">open_in_new</span></a> website.',
                ],
                [
                    'variant',
                    'string',
                    'filled',
                    'The variant of the icon. The available options are <code>filled</code>, <code>outlined</code>, <code>round</code>, <code>sharp</code>, and <code>two-tone</code>.',
                ],
                [
                    'fontSize',
                    'string',
                    '',
                    'The size of the icon. The available options are the valid CSS font-size value.',
                ],
                [
                    'color',
                    'string',
                    '',
                    'The color of the icon. The available color options are valid CSS color value or the color name from the theme palette.',
                ],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $pageData['metas']['description'] }}</x-mbc::typography>
@endsection

@section('content')
    <section>
        <x-h2>
            Basic
        </x-h2>

        <x-mbc::typography>
            The basic usage of the <code>Icon</code> component can be seen on the example below.
        </x-mbc::typography>

        <x-component-preview>
            <div style="display: flex; gap: 1em;">
                <x-mbc::icon name="home" />
                <x-mbc::icon name="['settings', 'outlined']" />
                <x-mbc::icon :name="['delete', 'round']" />
                <x-mbc::icon
                    name="lock"
                    variant="two-tone"
                />
            </div>

            <x-slot:code-summary>&lt;x-mbc::icon name="icon name | [icon name, variant]" ... /></x-slot:code-summary>

            {{-- prettier-ignore-start --}}
            <x-slot:code>&lt;x-mbc::icon name="home" />
&lt;x-mbc::icon name="['settings', 'outlined']" />
&lt;x-mbc::icon :name="['delete', 'round']" />
&lt;x-mbc::icon
    name="lock"
    variant="two-tone"
/></x-slot:code>
                {{-- prettier-ignore-end --}}
        </x-component-preview>

        <x-mbc::typography>
            As seen on the example above, the <code>name</code> attribute is used to define the icon to be displayed. The
            value
            of the <code>name</code> attribute can be a string or an array. If the value is an array, the first element is
            the
            icon name, and the second element is the icon variant. However, The <code>variant</code> attribute also can be
            used to define the icon variant for convenience.
        </x-mbc::typography>

        <x-mbc::alert severity="info">
            All available icon names can be found on the <a
                href="https://fonts.google.com/icons"
                target="_blank"
                rel="noopener noreferrer"
            >Google Material Icons <x-mbc::icon
                    name="open_in_new"
                    fontSize="inherit"
                /></a> website.
        </x-mbc::alert>
    </section>

    <section>
        <x-h2>
            Variant
        </x-h2>

        <x-mbc::typography>
            As mentioned before, the <code>variant</code> attribute can be used to define the icon variant. The
            available options are <code>filled</code>, <code>outlined</code>, <code>round</code>, <code>sharp</code>,
            and <code>two-tone</code>. The default value is <code>filled</code>.
        </x-mbc::typography>

        <x-mbc::typography>
            You can also define the icon variant by using the icon name that can be seen on the <a href="#basic">Basic</a>
            section.
        </x-mbc::typography>

        <x-component-preview>
            <div style="display: flex; gap: 1em;">
                <x-mbc::icon name="home" />
                <x-mbc::icon
                    name="home"
                    variant="filled"
                />
                <x-mbc::icon
                    name="home"
                    variant="outlined"
                />
                <x-mbc::icon
                    name="home"
                    variant="round"
                />
                <x-mbc::icon
                    name="home"
                    variant="sharp"
                />
                <x-mbc::icon
                    name="home"
                    variant="two-tone"
                />
            </div>

            <x-slot:code-summary>&lt;x-mbc::icon variant="icon variant" ... /></x-slot:code-summary>

            {{-- prettier-ignore-start --}}
            <x-slot:code>&lt;x-mbc::icon name="home" />

&lt;x-mbc::icon
name="home"
variant="filled"
/>

&lt;x-mbc::icon
name="home"
variant="outlined"
/>

&lt;x-mbc::icon
name="home"
variant="round"
/>

&lt;x-mbc::icon
name="home"
variant="sharp"
/>

&lt;x-mbc::icon
name="home"
variant="two-tone"
/></x-slot:code>
            {{-- prettier-ignore-end --}}
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Font Size
        </x-h2>

        <x-mbc::typography>
            The <code>fontSize</code> attribute can be used to define the size of the icon. The available options are
            the
            valid CSS font-size value.
        </x-mbc::typography>

        <x-component-preview>
            <div style="display: flex; gap: 1em;">
                <x-mbc::icon
                    name="home"
                    fontSize="1rem"
                />
                <x-mbc::icon
                    name="home"
                    fontSize="2rem"
                />
                <x-mbc::icon
                    name="home"
                    fontSize="3rem"
                />
                <x-mbc::icon
                    name="home"
                    fontSize="4rem"
                />
                <x-mbc::icon
                    name="home"
                    fontSize="5rem"
                />
            </div>

            <x-slot:code-summary>&lt;x-mbc::icon fontSize="font size" ... /></x-slot:code-summary>

            {{-- prettier-ignore-start --}}
            <x-slot:code>&lt;x-mbc::icon
name="home"
fontSize="1rem"
/>
&lt;x-mbc::icon
name="home"
fontSize="2rem"
/>
&lt;x-mbc::icon
name="home"
fontSize="3rem"
/>
&lt;x-mbc::icon
name="home"
fontSize="4rem"
/>
&lt;x-mbc::icon
name="home"
fontSize="5rem"
/></x-slot:code>
            {{-- prettier-ignore-end --}}
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Color
        </x-h2>

        <x-mbc::typography>
            The <code>color</code> attribute can be used to define the color of the icon. The available color options are
            valid CSS color value or the color name from the theme palette.
        </x-mbc::typography>

        <x-component-preview>
            <div style="display: flex; gap: 1em;">
                <x-mbc::icon name="home" />
                <x-mbc::icon
                    name="bluetooth"
                    color="primary"
                />
                <x-mbc::icon
                    name="filter_vintage"
                    color="secondary"
                />
                <x-mbc::icon
                    name="delete"
                    color="error"
                />
                <x-mbc::icon
                    name="paid"
                    color="warning"
                />
                <x-mbc::icon
                    name="power_settings_new"
                    color="info"
                />
                <x-mbc::icon
                    name="check_circle"
                    color="success"
                />

                <x-mbc::icon
                    name="colorize"
                    color="#FF0000"
                />

                <x-mbc::icon
                    name="colorize"
                    color="aqua"
                />
            </div>

            <x-slot:code-summary>&lt;x-mbc::icon color="color name" ... /></x-slot:code-summary>

            {{-- prettier-ignore-start --}}
            <x-slot:code>&lt;x-mbc::icon name="home" />

&lt;x-mbc::icon
    name="bluetooth"
    color="primary"
/>

&lt;x-mbc::icon
    name="filter_vintage"
    color="secondary"
/>

&lt;x-mbc::icon
    name="delete"
    color="error"
/>

&lt;x-mbc::icon
    name="paid"
    color="warning"
/>

&lt;x-mbc::icon
    name="power_settings_new"
    color="info"
/>

&lt;x-mbc::icon
    name="check_circle"
    color="success"
/>

&lt;x-mbc::icon
    name="colorize"
    color="#FF0000"
/>

&lt;x-mbc::icon
    name="colorize"
    color="aqua"
/></x-slot:code>
            {{-- prettier-ignore-end --}}
        </x-component-preview>
    </section>
@endsection

