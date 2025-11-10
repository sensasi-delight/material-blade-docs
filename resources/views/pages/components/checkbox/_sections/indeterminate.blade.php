<section>
    <x-h2>Indeterminate State</x-h2>

    <x-mbc::typography>
        A checkbox can be in an indeterminate state, which is useful for showing a partial selection. Use the <code>indeterminate</code> attribute to set this state.
    </x-mbc::typography>

    <x-mbc::typography>
        This state is commonly used in parent checkboxes when some (but not all) of their child checkboxes are selected.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <x-mbc::checkbox label="Select All" indeterminate />
            <div style="margin-left: 2rem; display: flex; flex-direction: column; gap: 0.5rem;">
                <x-mbc::checkbox label="Item 1" checked />
                <x-mbc::checkbox label="Item 2" />
                <x-mbc::checkbox label="Item 3" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.checkbox._codes.indeterminate')
        @endslot
    </x-component-preview>
</section>
