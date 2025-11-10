<section>
    <x-h2>Stacked Tab Bar</x-h2>

    <x-mbc::typography>
        Stack icons above text labels using <code>:stacked="true"</code>. This layout provides more visual emphasis and is common in mobile bottom navigation.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Stacked tabs:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['home' => 'Home', 'search' => 'Search', 'favorite' => 'Favorites']" :stacked="true" />
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Stacked with active tab:</x-mbc::typography>
                <x-mbc::tab-bar :tabs="['phone' => 'Calls', 'forum' => 'Chats', 'notifications' => 'Alerts', 'settings' => 'Settings']" :stacked="true" :activeTabNo="2" />
            </div>
        </div>

        @slot('code')
            @include('pages.components.tab-bar._codes.stacked')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Stacked tabs are ideal for bottom navigation bars where vertical space is available.
    </x-mbc::typography>
</section>
