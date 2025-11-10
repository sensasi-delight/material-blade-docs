<section>
    <x-h2>Tab Bar with Icons</x-h2>

    <x-mbc::typography>
        Add icons to tabs by using an associative array where keys are icon names and values are text labels. Icons appear to the left of the text.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Tabs with icons:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['flight' => 'Flights', 'hotel' => 'Hotels', 'restaurant' => 'Restaurants']" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>More examples:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites', 'settings' => 'Settings']" :activeTabNo="2" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.tab-bar._codes.with-icons')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Icons help users quickly identify tab content and improve navigation, especially in mobile apps.
    </x-mbc::typography>
</section>
