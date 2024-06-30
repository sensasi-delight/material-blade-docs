@php
    $desc = 'Buttons allow users to take actions, and make choices, with a single tap.';

    $pageData = [
        'title' => 'Button',
        'metas' => [
            'description' => $desc,
        ],
        'headings' => ['Basic', 'Variants', 'Href Property', 'Buttons with Icons'],
        'referenceLinks' => [
            'https://mui.com/material-ui/react-button/',
            'https://m2.material.io/components/buttons/web',
            'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-button/README.md',
            'https://material-components.github.io/material-components-web-catalog/#/component/button',
        ],
        'componentsProps' => [
            'mbc::button' => [
                ['label', 'string', '', 'The button text.'],
                [
                    'variant',
                    "'text' | 'unelevated' | 'raised' | 'outlined' | string",
                    "'unelevated'",
                    'The button variant.',
                ],
                ['href', 'string', '', 'The button href.'],
                ['htmlTag', 'string', "'button' | 'a'", 'The button html tag.'],
                ['startIcon', 'string | array', '', 'The leading icon.'],
                ['endIcon', 'string | array', '', 'The trailing icon.'],
                ['disableRipple', 'bool', 'false', 'Disable the ripple effect.'],
                ['withWrapper', 'bool', 'true', 'Wrap the button with a div element.'],
                ['color', 'string', '', 'The button color.'],
                ['fullwidth', 'bool', 'false', 'Make the button full width.'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $desc }}</x-mbc::typography>

    <x-mbc::typography>
        Buttons communicate actions that users can take. They are typically placed throughout your UI, in places like
        dialogs, forms, cards, and toolbars.
    </x-mbc::typography>

    <x-mbc::alert severity="info">
        Material Blade also provides the <x-mbc::button
            href="{{ route('components.icon-button') }}"
            label="Icon Button"
            variant="text"
        /> and the <x-mbc::button
            href="{{ route('components.fab') }}"
            label="Floating Action Button"
            variant="text"
        /> components.
    </x-mbc::alert>
@endsection

@section('content')
    <section>
        <x-h2>
            Basic
        </x-h2>

        <x-mbc::typography>
            For the basic usage, you can use the button component without any attributes. The button text can be set via
            slot or by using the <code>label</code> attribute.
        </x-mbc::typography>

        <x-component-preview>
            <div>
                <x-mbc::button>
                    Regular Component
                </x-mbc::button>
                <x-mbc::button label="Anynomus Component" />
            </div>

            @slot('code')
                {{-- prettier-ignore-start --}}
// set the button text via slot
&lt;x-mbc::button>  
    Regular Component
&lt;/x-mbc::button>

// set the button text via "label" attribute
&lt;x-mbc::button label="Anynomus Component" />
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Variants
        </x-h2>

        <x-mbc::typography>
            Buttons have four variants: <code>text</code>, <code>raised</code>, <code>unelevated</code>, and
            <code>outlined</code>.
            You can set the variant by using the <code>variant</code> attribute. The default variant is
            <code>unelevated</code>.
        </x-mbc::typography>

        <x-component-preview>
            <div>
                <x-mbc::button
                    label="Text"
                    variant="text"
                />

                <x-mbc::button
                    label="Raised"
                    variant="raised"
                />

                <x-mbc::button label="Unelevated" />

                <x-mbc::button
                    label="Outlined"
                    variant="outlined"
                />
            </div>

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::button
    label="Text"
    variant="text"
/>

&lt;x-mbc::button
    label="Raised"
    variant="raised"
/>

&lt;x-mbc::button
    label="Unelevated"
    variant="unelevated" // default variant
/>

&lt;x-mbc::button
    label="Outlined"
    variant="outlined"
/>
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Href Property
        </x-h2>

        <x-mbc::typography>
            You can use the <code>href</code> attribute to make the button act as an anchor tag.
            If the <code>href</code> attribute is set, the button will be rendered as an anchor tag. However, if you want
            to override the rendered tag, you can use the <code>htmlTag</code> attribute.
        </x-mbc::typography>

        <x-component-preview>
            <div>
                <x-mbc::button
                    href="#anchor-tag-button"
                    label="Anchor Tag Button"
                />

                <x-mbc::button
                    href="#anchor-tag-button"
                    label="Div Button"
                    htmlTag="div"
                />
            </div>

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::button
    href="#anchor-tag-button"
    label="Anchor Tag Button"
/>

// override the rendered tag. In this case, the button will be rendered as a div tag
// however, the href attribute will be still exist in the div tag.
&lt;x-mbc::button
    href="#anchor-tag-button"
    label="Div Button"
    htmlTag="div"
/>
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Buttons with Icons
        </x-h2>

        <x-mbc::typography>
            You can add an icon to the button by using the <code>startIcon</code> and <code>endIcon</code> attributes.
        </x-mbc::typography>

        <x-component-preview>
            <div>
                <x-mbc::button
                    label="Icon Leading"
                    startIcon="favorite"
                />

                <x-mbc::button
                    label="Icon Trailing"
                    endIcon="grade"
                />

                <x-mbc::button
                    label="Both"
                    startIcon="noise_control_off"
                    endIcon="disabled_by_default"
                />
            </div>

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::button
    label="Icon Leading"
    startIcon="favorite"
/>

&lt;x-mbc::button
    label="Icon Trailing"
    endIcon="grade"
/>

&lt;x-mbc::button
    label="Both"
    startIcon="noise_control_off"
    endIcon="disabled_by_default"
/>
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>

        <x-mbc::typography>
            You can also change the icon style by adding the icon style to the icon name. The available icon styles are
            <code>two-tone</code>, <code>outlined</code>, <code>round</code>, and
            <code>sharp</code>. The value of those attributes are same as the <code>name</code> attribute in the
            <code>Icon</code>
            component. Please visit
            the
            <x-mbc::button
                :href="route('components.icon')"
                label="Icon component page"
                variant="text"
            /> for more information.
        </x-mbc::typography>

        <x-component-preview>
            <div>
                <x-mbc::button
                    label="Two Tone Icon Leading"
                    :startIcon="['favorite', 'two-tone']"
                />

                <x-mbc::button
                    label="Outlined Icon Trailing"
                    :endIcon="['grade', 'outlined']"
                />

                <x-mbc::button
                    label="Both"
                    :startIcon="['noise_control_off', 'round']"
                    :endIcon="['disabled_by_default', 'sharp']"
                />
            </div>

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::button
    label="Two Tone Icon Leading"
    :startIcon="['favorite', 'two-tone']"
/>

&lt;x-mbc::button
    label="Outlined Icon Trailing"
    :endIcon="['grade', 'outlined']"
/>

&lt;x-mbc::button
    label="Both"
    :startIcon="['noise_control_off', 'round']"
    :endIcon="['disabled_by_default', 'sharp']"
/>
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>
@endsection
