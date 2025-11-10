<section>
    <x-h2>Variants</x-h2>

    <x-mbc::typography>
        Text fields come in two variants: <code>filled</code> (default) and <code>outlined</code>. Choose the variant that best fits your design.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; max-width: 400px;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Filled (Default):</x-mbc::typography>
                <x-mbc::text-field label="Filled Text Field" variant="filled" id="variant-1" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Outlined:</x-mbc::typography>
                <x-mbc::text-field label="Outlined Text Field" variant="outlined" id="variant-2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Filled with value:</x-mbc::typography>
                <x-mbc::text-field label="Email" variant="filled" value="user@example.com" id="variant-3" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Outlined with value:</x-mbc::typography>
                <x-mbc::text-field label="Phone" variant="outlined" value="+1 234 567 8900" id="variant-4" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.text-field._codes.variants')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Filled text fields have more visual emphasis, while outlined text fields are better for tight spaces.
    </x-mbc::typography>
</section>
