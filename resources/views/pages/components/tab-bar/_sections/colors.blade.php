<section>
    <x-h2>Tab Bar Colors</x-h2>

    <x-mbc::typography>
        Customize the tab bar background color using the <code>color</code> prop. Use <code>:lightText="true"</code> for light-colored text on dark backgrounds.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Primary color:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" color="primary" :lightText="true" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Secondary color:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" color="secondary" :lightText="true" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Custom color (Dark Blue):</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites']" color="#1976D2" :lightText="true" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Custom color (Teal):</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites']" color="#009688" :lightText="true" :activeTabNo="2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Custom color (Deep Purple):</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['phone' => 'Calls', 'forum' => 'Chats', 'settings' => 'Settings']" color="#673AB7" :lightText="true" :stacked="true" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.tab-bar._codes.colors')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Always use <code>:lightText="true"</code> when applying dark background colors for better readability.
    </x-mbc::typography>
</section>
