<section>
    <x-h2>Icons</x-h2>

    <x-mbc::typography>
        Same as the `color` prop, the `icon` prop can be used to display an icon on the left side of the Alert even
        though the Alert component has own icons for each severity.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 0.5rem; flex-direction: column;">
            <x-mbc::alert icon="local_pizza">This is a success Alert.</x-mbc::alert>
            <x-mbc::alert
                severity="info"
                :icon="['local_pizza', 'outlined']"
            >This is an info Alert.</x-mbc::alert>
            <x-mbc::alert
                severity="warning"
                :icon="['local_pizza', 'two-tone']"
            >This is a warning Alert.</x-mbc::alert>
        </div>

        @slot('code')
            @include('pages.components.alert._codes.icons')
        @endslot
    </x-component-preview>
</section>

