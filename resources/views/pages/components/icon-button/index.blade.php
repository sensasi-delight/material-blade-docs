@php
    $pageData = [
        'title' => 'Icon Button',
        'metas' => [
            'description' => 'Icon buttons allow users to take actions, and make choices, with a single tap.',
        ],
        'headings' => ['Basic', 'Color', 'Toggle Button', 'Toggle Off Icon', 'Render as Anchor Tag', 'Ripple Disabled'],
        'referenceLinks' => [
            'https://mui.com/material-ui/react-icon-button/',
            'https://m2.material.io/develop/web/components/buttons/icon-buttons',
            'https://github.com/material-components/material-components-web/blob/v14.0.0/packages/mdc-icon-button/README.md',
            'https://material-components.github.io/material-components-web-catalog/#/component/icon-button',
        ],
        'componentsProps' => [
            'mbc::icon-button' => [
                ['icon', 'string', 'null', 'The name of the icon.'],
                ['color', 'string', 'null', 'The color of the icon.'],
                ['toggle', 'boolean', 'false', 'If true, the icon button will be a toggle button.'],
                ['toggle', 'string', 'null', 'The toggle state of the icon button.'],
                ['offIcon', 'string', 'null', 'The name of the icon when the toggle is off.'],
                ['href', 'string', 'null', 'The URL to link to when the button is clicked.'],
                ['disableRipple', 'boolean', 'false', 'If true, the ripple effect will be disabled.'],
                ['withWrapper', 'boolean', 'false', 'If true, the icon button will be wrapped with a div element.'],
                ['disabled', 'boolean', 'false', 'If true, the icon button will be disabled.'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>{{ $pageData['metas']['description'] }}</x-mbc::typography>

    <x-mbc::alert title="Note" severity="info">
        For buttons with both icons and text, use the <code>mbc::button</code> component. For more information, see the
        <x-mbc::button href="{{ route('components.button') }}" label="Button page" variant="text" />.
    </x-mbc::alert>
@endsection

@section('content')
    <section>
        <x-h2>
            Basic
        </x-h2>

        <x-component-preview>
            <div style="display: flex;">
                <x-mbc::icon-button icon="delete" />
                <x-mbc::icon-button icon="send" />
                <x-mbc::icon-button icon="share" />
            </div>

            @slot('code-summary')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::icon-button icon="icon name | [icon name, icon variant]" />
{{-- prettier-ignore-end--}}
            @endslot

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::icon-button icon="delete" />
&lt;x-mbc::icon-button icon="send" />
&lt;x-mbc::icon-button icon="share" />
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Color
        </x-h2>

        <x-component-preview>
            <div style="display: flex;">
                <x-mbc::icon-button icon="home" />
                <x-mbc::icon-button icon="bluetooth" color="primary" />
                <x-mbc::icon-button icon="filter_vintage" color="secondary" />
                <x-mbc::icon-button icon="delete" color="error" />
                <x-mbc::icon-button icon="paid" color="warning" />
                <x-mbc::icon-button icon="power_settings_new" color="info" />
                <x-mbc::icon-button icon="check_circle" color="success" />
            </div>

            @slot('code-summary')
                {{-- prettier-ignore-start --}}
                &lt;x-mbc::icon-button .... color="css color | theme color" />
{{-- prettier-ignore-end--}}
            @endslot

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::icon-button icon="home" />
&lt;x-mbc::icon-button
    icon="bluetooth"
    color="primary"
/>
&lt;x-mbc::icon-button
    icon="filter_vintage"
    color="secondary"
/>
&lt;x-mbc::icon-button
    icon="delete"
    color="error"
/>
&lt;x-mbc::icon-button
    icon="paid"
    color="warning"
/>
&lt;x-mbc::icon-button
    icon="power_settings_new"
    color="info"
/>
&lt;x-mbc::icon-button
    icon="check_circle"
    color="success"
/>
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Toggle Button
        </x-h2>

        <x-component-preview>
            <div style="display: flex;">
                <x-mbc::icon-button icon="home" toggle />
                <x-mbc::icon-button icon="power_settings_new" color="info" toggle="on" />
                <x-mbc::icon-button icon="check_circle" color="success" toggle />
                <x-mbc::icon-button icon="send" color="secondary" toggle="on" disabled />
                <x-mbc::icon-button icon="photo_camera" color="secondary" toggle="off" disabled />
            </div>

            @slot('code-summary')
                &lt;x-mbc::icon-button .... toggle />
            @endslot

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::icon-button icon="home" toggle />
&lt;x-mbc::icon-button icon="power_settings_new" color="info" toggle="on" />
&lt;x-mbc::icon-button icon="check_circle" color="success" toggle />
&lt;x-mbc::icon-button icon="send" color="secondary" toggle="on" disabled />
&lt;x-mbc::icon-button icon="photo_camera" color="secondary" toggle="off" disabled />
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Toggle Off Icon
        </x-h2>

        <x-mbc::typography>
            By default the <code>OFF</code> state icon of toggle button same with the <code>ON</code> state icon, if you
            want
            to change the <code>OFF</code> state icon you can simply add the <code>offIcon</code> attribute.
        </x-mbc::typography>

        <x-component-preview>
            <div style="display: flex;">
                <x-mbc::icon-button icon="fullscreen_exit" offIcon="fullscreen" toggle />
                <x-mbc::icon-button icon="wifi" offIcon="wifi_off" toggle="on" />
                <x-mbc::icon-button icon="favorite" :offIcon="['favorite', 'two-tone']" toggle color="error" />
            </div>

            @slot('code-summary')
                {{-- prettier-ignore-start --}}
                &lt;x-mbc::icon-button .... offIcon="icon name | [icon name, icon variant]" toggle />
{{-- prettier-ignore-end--}}
            @endslot

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::icon-button icon="fullscreen_exit" offIcon="fullscreen" toggle />
&lt;x-mbc::icon-button icon="wifi" offIcon="wifi_off" toggle="on" />
&lt;x-mbc::icon-button icon="favorite" offIcon="favorite:two-tone" toggle color="error" />
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Render as Anchor Tag
        </x-h2>

        <x-mbc::typography>
            By default the <code>mbc::icon-button</code> will be rendered as <code>&lt;button></code> element. If you want
            to
            make it an <code>&lt;a></code> element please add <code>href</code> attribute to the
            <code>mbc::icon-button</code>.
            If you add the <code>disabled</code> attribute the <code>mbc::icon-button</code> will be rendered as disabled
            <code>button</code>.
        </x-mbc::typography>

        <x-component-preview>
            <div style="display: flex;">
                <x-mbc::icon-button icon="mail" href="mailto:zainadam.id@gmail.com" />
                <x-mbc::icon-button icon="phone" color="success" href="tel: +123 456 789" />
                <x-mbc::icon-button icon="phone" color="success" href="tel: +123 456 789" disabled />
            </div>

            @slot('code-summary')
                &lt;x-mbc::icon-button .... href="url" />
            @endslot

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::icon-button icon="mail" href="mailto:zainadam.id@gmail.com" />
&lt;x-mbc::icon-button icon="phone" color="success" href="tel: +123 456 789" />
&lt;x-mbc::icon-button icon="phone" color="success" href="tel: +123 456 789" disabled />
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>

    <section>
        <x-h2>
            Ripple Disabled
        </x-h2>

        <x-mbc::typography>
            Just add the <code>disableRipple</code> attribute to the <code>mbc::icon-button</code> component. however,
            disabling
            ripple make button not hard to be recognized by user, please add the hover style.
        </x-mbc::typography>

        <x-component-preview>
            <div style="display: flex;">
                <x-mbc::icon-button icon="home" disableRipple />
                <x-mbc::icon-button icon="close" color="error" disableRipple />
                <x-mbc::icon-button icon="logout" color="success" disableRipple />
            </div>

            @slot('code-summary')
                &lt;x-mbc::icon-button .... ripple="false" />
            @endslot

            @slot('code')
                {{-- prettier-ignore-start --}}
&lt;x-mbc::icon-button icon="home" ripple="false" />
&lt;x-mbc::icon-button icon="close" color="error" ripple="false" />
&lt;x-mbc::icon-button icon="logout" color="success" ripple="false" />
{{-- prettier-ignore-end--}}
            @endslot
        </x-component-preview>
    </section>
@endsection
