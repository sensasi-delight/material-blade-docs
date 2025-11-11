<section>
    <x-h2>With Label</x-h2>

    <x-mbc::typography>
        You can add a label to the checkbox using the <code>label</code> attribute. The label will be displayed next to the checkbox.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <x-mbc::checkbox label="Option 1" />
            <x-mbc::checkbox label="Option 2" checked />
            <x-mbc::checkbox label="Option 3" />
        </div>

        @slot('code')
            @include('pages.components.checkbox._codes.label')
        @endslot
    </x-component-preview>
</section>
