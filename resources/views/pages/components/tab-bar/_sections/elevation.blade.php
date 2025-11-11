<section>
    <x-h2>Tab Bar Elevation</x-h2>

    <x-mbc::typography>
        Add elevation (shadow) to the tab bar using the <code>:elevation</code> prop. Values range from 0 to 24, with higher values creating stronger shadows.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>No elevation (default):</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Elevation 4:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" :elevation="4" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Elevation 8:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" :elevation="8" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Elevation 16:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites', 'settings' => 'Settings']" :elevation="16" :activeTabNo="3" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.tab-bar._codes.elevation')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Use elevation to make the tab bar stand out from the content below, especially for fixed navigation bars.
    </x-mbc::typography>
</section>
