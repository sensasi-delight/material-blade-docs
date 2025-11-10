<section>
    <x-h2>Basic Text Field</x-h2>

    <x-mbc::typography>
        A basic text field with a floating label. The label automatically floats above the input when focused or filled.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; max-width: 400px;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Standard text field:</x-mbc::typography>
                <x-mbc::text-field label="Label" id="basic-1" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>With placeholder:</x-mbc::typography>
                <x-mbc::text-field label="Full Name" placeholder="Enter your full name" id="basic-2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>With default value:</x-mbc::typography>
                <x-mbc::text-field label="Username" value="john_doe" id="basic-3" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Disabled state:</x-mbc::typography>
                <x-mbc::text-field label="Disabled Field" disabled id="basic-4" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Required field:</x-mbc::typography>
                <x-mbc::text-field label="Required Field" required id="basic-5" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.text-field._codes.basic')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Always provide a meaningful label. Use placeholder text sparingly as it disappears when the user starts typing.
    </x-mbc::typography>
</section>
