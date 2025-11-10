<section>
    <x-h2>Headings</x-h2>

    <x-mbc::typography>
        Heading variants (h1-h6) are used for page and section titles. They automatically render as the corresponding HTML heading element.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <div>
                <x-mbc::typography variant="h1">H1 - Display Large (57px)</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    For main page titles or hero sections. Largest size.
                </x-mbc::typography>
            </div>
            
            <div>
                <x-mbc::typography variant="h2">H2 - Display Medium (45px)</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    For important section headings or secondary hero.
                </x-mbc::typography>
            </div>
            
            <div>
                <x-mbc::typography variant="h3">H3 - Display Small (36px)</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    For sub-sections or prominent card headers.
                </x-mbc::typography>
            </div>
            
            <div>
                <x-mbc::typography variant="h4">H4 - Headline Large (32px)</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    For section titles in content area.
                </x-mbc::typography>
            </div>
            
            <div>
                <x-mbc::typography variant="h5">H5 - Headline Medium (28px)</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    For subsection titles or card headers.
                </x-mbc::typography>
            </div>
            
            <div>
                <x-mbc::typography variant="h6">H6 - Headline Small (24px)</x-mbc::typography>
                <x-mbc::typography variant="body2">
                    For minor headings or prominent labels.
                </x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.typography._codes.headings')
        @endslot
    </x-component-preview>
</section>
