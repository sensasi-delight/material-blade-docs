<section>
    <x-h2>Disabled State</x-h2>

    <x-mbc::typography>
        Checkboxes can be disabled using the <code>disabled</code> attribute. A disabled checkbox cannot be interacted with.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <x-mbc::checkbox label="Disabled Unchecked" disabled />
            <x-mbc::checkbox label="Disabled Checked" checked disabled />
            <x-mbc::checkbox label="Disabled Indeterminate" indeterminate disabled />
        </div>

        @slot('code')
            @include('pages.components.checkbox._codes.disabled')
        @endslot
    </x-component-preview>
</section>
