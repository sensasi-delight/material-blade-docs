<section>
    <x-h2>Colors</x-h2>

    <x-mbc::typography>
        Even though the Alert component has four severities, you can customize the color of the Alert component by using
        the <code>color</code> attribute.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 0.5rem; flex-direction: column;">
            <x-mbc::alert color="warning">This is a <code>`warning`</code> colored Alert.</x-mbc::alert>
            <x-mbc::alert color="error">This is an <code>`error`</code> colored Alert.</x-mbc::alert>
            <x-mbc::alert color="#BADA55">This is a <code>`#BADA55`</code> colored Alert.</x-mbc::alert>
        </div>

        @slot('code')
            @include('pages.components.alert._codes.colors')
        @endslot

        @slot('codeSummary')
            @include('pages.components.alert._codes.colors-summary')
        @endslot
    </x-component-preview>
</section>
