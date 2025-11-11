<section>
    <x-h2>Helper Text</x-h2>

    <x-mbc::typography>
        Helper text provides additional context or instructions. Use <code>helperTextPersistent</code> to keep it always visible, or <code>helperTextValidation</code> for error messages.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; max-width: 400px;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Basic helper text:</x-mbc::typography>
                <x-mbc::text-field label="Username" helperText="Choose a unique username" id="helper-1" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Persistent helper text:</x-mbc::typography>
                <x-mbc::text-field label="Password" type="password" helperText="Must be at least 8 characters" :helperTextPersistent="true" id="helper-2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Validation message:</x-mbc::typography>
                <x-mbc::text-field label="Email" type="email" helperText="Please enter a valid email address" :helperTextValidation="true" :helperTextPersistent="true" id="helper-3" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Outlined with helper text:</x-mbc::typography>
                <x-mbc::text-field label="Phone Number" variant="outlined" helperText="Format: +1 234 567 8900" :helperTextPersistent="true" id="helper-4" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.text-field._codes.helper-text')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Use persistent helper text for important instructions. Validation messages should only appear when there's an error.
    </x-mbc::typography>
</section>
