<section>
    <x-h2>Indicator Styles</x-h2>

    <x-mbc::typography>
        Customize the active tab indicator. By default, it's an underline that slides. Use <code>:fadeIndicator="true"</code> for fade animation, or <code>indicatorIcon</code> to replace the underline with an icon.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Default sliding underline:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Fade indicator:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" :fadeIndicator="true" :activeTabNo="2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Icon indicator (star):</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" indicatorIcon="star" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Icon indicator with icons tabs:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites']" indicatorIcon="check_circle" :activeTabNo="3" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.tab-bar._codes.indicators')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Icon indicators can add personality to your interface but use them sparingly to maintain clarity.
    </x-mbc::typography>
</section>
