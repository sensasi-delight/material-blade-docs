<section>
    <x-h2>Input Types</x-h2>

    <x-mbc::typography>
        Text fields support all HTML5 input types. Use the <code>type</code> attribute to specify the input type for better semantics and mobile keyboards.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; max-width: 400px;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Text (Default):</x-mbc::typography>
                <x-mbc::text-field label="Full Name" type="text" id="type-1" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Email:</x-mbc::typography>
                <x-mbc::text-field label="Email Address" type="email" leadingIcon="email" id="type-2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Password:</x-mbc::typography>
                <x-mbc::text-field label="Password" type="password" trailingIcon="visibility" id="type-3" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Number:</x-mbc::typography>
                <x-mbc::text-field label="Age" type="number" variant="outlined" id="type-4" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Tel (Phone):</x-mbc::typography>
                <x-mbc::text-field label="Phone Number" type="tel" leadingIcon="phone" id="type-5" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>URL:</x-mbc::typography>
                <x-mbc::text-field label="Website" type="url" prefix="https://" variant="outlined" id="type-6" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Date:</x-mbc::typography>
                <x-mbc::text-field label="Birth Date" type="date" id="type-7" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Time:</x-mbc::typography>
                <x-mbc::text-field label="Appointment Time" type="time" variant="outlined" id="type-8" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.text-field._codes.input-types')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Using the correct input type improves accessibility and provides better mobile keyboard layouts (e.g., number pad for phone numbers).
    </x-mbc::typography>
</section>
