<section>
    <x-h2>Icon-Only Tab Bar</x-h2>

    <x-mbc::typography>
        Create a compact tab bar with only icons by setting <code>:iconOnly="true"</code>. This is ideal for bottom navigation or when space is limited.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Icon-only tab bar:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['home', 'search', 'favorite', 'person']" :iconOnly="true" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>With active tab:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['phone', 'favorite', 'person_pin', 'help']" :iconOnly="true" :activeTabNo="3" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.tab-bar._codes.icon-only')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Icon-only tabs work best when icons are universally recognizable (home, search, settings, etc.).
    </x-mbc::typography>
</section>
