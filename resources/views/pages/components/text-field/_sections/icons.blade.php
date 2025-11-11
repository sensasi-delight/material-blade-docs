<section>
    <x-h2>Text Field with Icons</x-h2>

    <x-mbc::typography>
        Add icons to text fields using <code>leadingIcon</code> or <code>trailingIcon</code>. Icons help users understand the field's purpose.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; max-width: 400px;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Leading icon (Filled):</x-mbc::typography>
                <x-mbc::text-field label="Search" leadingIcon="search" id="icon-1" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Leading icon (Outlined):</x-mbc::typography>
                <x-mbc::text-field label="Email" variant="outlined" leadingIcon="email" type="email" id="icon-2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Trailing icon (Filled):</x-mbc::typography>
                <x-mbc::text-field label="Password" trailingIcon="visibility" type="password" id="icon-3" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Trailing icon (Outlined):</x-mbc::typography>
                <x-mbc::text-field label="Phone" variant="outlined" trailingIcon="phone" id="icon-4" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Both icons:</x-mbc::typography>
                <x-mbc::text-field label="Location" leadingIcon="place" trailingIcon="my_location" id="icon-5" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.text-field._codes.icons')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Leading icons help identify the field type, while trailing icons often represent actions (like show/hide password).
    </x-mbc::typography>
</section>
