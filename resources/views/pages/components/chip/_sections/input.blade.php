<section>
    <x-h2>Input Chips</x-h2>

    <x-mbc::typography>
        Input chips represent discrete pieces of information entered by the user. Use <code>variant="input"</code> on the chip-set. Input chips include a trailing delete icon that allows users to remove them.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Email Recipients:</x-mbc::typography>
                <x-mbc::chip-set variant="input">
                    <x-mbc::chip label="john@example.com" icon="person" />
                    <x-mbc::chip label="jane@example.com" icon="person" />
                    <x-mbc::chip label="team@company.com" icon="group" />
                </x-mbc::chip-set>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Tags:</x-mbc::typography>
                <x-mbc::chip-set variant="input">
                    <x-mbc::chip label="Laravel" icon="label" />
                    <x-mbc::chip label="PHP" icon="label" />
                    <x-mbc::chip label="Material Design" icon="label" />
                    <x-mbc::chip label="Blade" icon="label" />
                </x-mbc::chip-set>
            </div>
        </div>

        @slot('code')
            @include('pages.components.chip._codes.input')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Input chips are commonly used in tag inputs, email recipient fields, and multi-select scenarios where users add items dynamically.
    </x-mbc::typography>
</section>
