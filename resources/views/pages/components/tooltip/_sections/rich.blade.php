<section>
    <x-h2>Rich Tooltip</x-h2>

    <x-mbc::typography>
        Rich tooltips provide more detailed information with optional titles, body text, and action buttons. Use named slots <code>title</code>, <code>body</code>, and <code>action</code>.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 2rem; align-items: center; padding: 2rem; flex-wrap: wrap;">
            <x-mbc::tooltip>
                <x-mbc::icon-button icon="info" />

                <x-slot:title>Rich Tooltip Title</x-slot:title>
                <x-slot:body>
                    This is a rich tooltip with more detailed information. It can contain multiple lines of text.
                </x-slot:body>
                <x-slot:action>
                    <x-mbc::button label="Learn More" variant="text" />
                </x-slot:action>
            </x-mbc::tooltip>

            <x-mbc::tooltip>
                <x-mbc::button label="Help" variant="outlined" />

                <x-slot:title>Need Help?</x-slot:title>
                <x-slot:body>
                    Click the button below to access our comprehensive help documentation.
                </x-slot:body>
                <x-slot:action>
                    <x-mbc::button label="Open Docs" variant="text" />
                </x-slot:action>
            </x-mbc::tooltip>
        </div>

        @slot('code')
            @include('pages.components.tooltip._codes.rich')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Rich tooltips are best used for explanations that require more context than simple text.
    </x-mbc::typography>
</section>
