<section>
    <x-h2>Gutter</x-h2>

    <x-mbc::typography>
        By default, Typography components have a bottom margin (gutter) for better spacing. You can remove this margin
        using the <code>disableGutter</code> attribute. This is useful when you need tight spacing or when the component
        is used within other layouts that handle their own spacing.
    </x-mbc::typography>

    <x-component-preview>
        <div>
            <div style="border: 1px solid #ccc; padding: 1rem; margin-bottom: 1rem;">
                <x-mbc::typography variant="h6">With Default Gutter</x-mbc::typography>
                <x-mbc::typography>
                    Default typography with bottom margin
                </x-mbc::typography>
                <x-mbc::typography>
                    Another paragraph with margin
                </x-mbc::typography>
            </div>

            <div style="border: 1px solid #ccc; padding: 1rem;">
                <x-mbc::typography variant="h6" disableGutter>Without Gutter</x-mbc::typography>
                <x-mbc::typography disableGutter>
                    Typography without bottom margin
                </x-mbc::typography>
                <x-mbc::typography disableGutter>
                    Typography without bottom margin
                </x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.gutter')
        @endslot
    </x-component-preview>
</section>
