<section>
    <x-h2>Prefix and Suffix</x-h2>

    <x-mbc::typography>
        Add prefix or suffix text to provide context for the input value, such as currency symbols or units of measurement.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; max-width: 400px;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Prefix (Currency):</x-mbc::typography>
                <x-mbc::text-field label="Amount" prefix="$" type="number" id="prefix-1" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Suffix (Unit):</x-mbc::typography>
                <x-mbc::text-field label="Weight" suffix="kg" type="number" variant="outlined" id="prefix-2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Both prefix and suffix:</x-mbc::typography>
                <x-mbc::text-field label="Price" prefix="$" suffix="USD" type="number" id="prefix-3" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>With icon and prefix:</x-mbc::typography>
                <x-mbc::text-field label="Website" leadingIcon="language" prefix="https://" variant="outlined" id="prefix-4" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>With suffix and helper:</x-mbc::typography>
                <x-mbc::text-field label="Distance" suffix="miles" type="number" helperText="Enter the distance in miles" id="prefix-5" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.text-field._codes.prefix-suffix')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Prefix and suffix text helps users understand what format or unit to use without reading lengthy instructions.
    </x-mbc::typography>
</section>
