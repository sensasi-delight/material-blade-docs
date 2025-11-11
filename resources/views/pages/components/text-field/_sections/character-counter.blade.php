<section>
    <x-h2>Character Counter</x-h2>

    <x-mbc::typography>
        Display a character counter by setting <code>:characterCounter="true"</code> and providing a <code>maxlength</code> attribute.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; max-width: 400px;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Text field with counter:</x-mbc::typography>
                <x-mbc::text-field label="Username" maxlength="20" :characterCounter="true" id="counter-1" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Outlined with counter:</x-mbc::typography>
                <x-mbc::text-field label="Tweet" variant="outlined" maxlength="280" :characterCounter="true" id="counter-2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Textarea with counter:</x-mbc::typography>
                <x-mbc::text-field label="Bio" :textarea="true" :rows="4" maxlength="150" :characterCounter="true" helperText="Keep it brief" id="counter-3" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>With counter and helper:</x-mbc::typography>
                <x-mbc::text-field label="Description" maxlength="100" :characterCounter="true" helperText="Maximum 100 characters" :helperTextPersistent="true" id="counter-4" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.text-field._codes.character-counter')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Use character counters when there's a hard limit on input length to help users stay within bounds.
    </x-mbc::typography>
</section>
