<section>
    <x-h2>Basic</x-h2>

    <x-mbc::typography>
        The basic checkbox component can be used with minimal setup. By default, the checkbox is unchecked. You can control the checked state using the <code>checked</code> attribute.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 1rem; align-items: center;">
            <x-mbc::checkbox />
            <x-mbc::checkbox checked />
        </div>

        @slot('code')
            @include('pages.components.checkbox._codes.basic')
        @endslot
    </x-component-preview>
</section>
