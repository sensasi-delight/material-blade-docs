<section>
    <x-h2>Basic Tab Bar</x-h2>

    <x-mbc::typography>
        A basic tab bar displays text labels for navigation. Pass an array of strings to the <code>tabs</code> prop. Use <code>activeTabNo</code> to set the initially active tab (1-indexed).
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Default (First tab active):</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Second tab active:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" :activeTabNo="2" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Third tab active:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['Flights', 'Hotels', 'Restaurants']" :activeTabNo="3" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.tab-bar._codes.basic')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Use 2-5 tabs for optimal user experience. More tabs can make navigation difficult on smaller screens.
    </x-mbc::typography>
</section>
