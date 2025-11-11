<section>
    <x-h2>Textarea</x-h2>

    <x-mbc::typography>
        Use <code>:textarea="true"</code> for multi-line text input. Control the size with <code>rows</code> and <code>cols</code> attributes.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; max-width: 500px;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Basic textarea (Filled):</x-mbc::typography>
                <x-mbc::text-field label="Description" :textarea="true" :rows="4" id="textarea-1" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Textarea (Outlined):</x-mbc::typography>
                <x-mbc::text-field label="Comments" variant="outlined" :textarea="true" :rows="5" id="textarea-2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Textarea with helper text:</x-mbc::typography>
                <x-mbc::text-field label="Bio" :textarea="true" :rows="6" helperText="Tell us about yourself" id="textarea-3" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Textarea with value:</x-mbc::typography>
                <x-mbc::text-field label="Message" variant="outlined" :textarea="true" :rows="4" value="This is a pre-filled message." id="textarea-4" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.text-field._codes.textarea')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Use textareas for longer text input like comments, descriptions, or messages where multiple lines are expected.
    </x-mbc::typography>
</section>
