<section>
    <x-h2>Modal Drawer</x-h2>

    <x-mbc::typography>
        Modal drawers sit above the content with a scrim overlay. They're commonly used for mobile navigation and can be dismissed by tapping the scrim or pressing escape.
    </x-mbc::typography>

    <x-component-preview>
        <div style="position: relative; height: 350px; border: 1px solid #e0e0e0; overflow: hidden;">
            <x-mbc::drawer variant="modal" title="Mobile Menu">
                <x-mbc::list>
                    <x-mbc::list-item primary="Home" startIcon="home" />
                    <x-mbc::list-item primary="Explore" startIcon="explore" />
                    <x-mbc::list-item primary="Favorites" startIcon="favorite" />
                    <x-mbc::list-item primary="Library" startIcon="video_library" />
                    <x-mbc::list-item primary="History" startIcon="history" />
                    <x-mbc::list-item primary="Help" startIcon="help" />
                </x-mbc::list>
            </x-mbc::drawer>
            
            <div style="padding: 1.5rem; background: #fafafa; height: 100%; overflow-y: auto;">
                <x-mbc::typography variant="h5" gutterBottom>Mobile Application</x-mbc::typography>
                <x-mbc::typography variant="body1" gutterBottom>
                    The modal drawer appears on top of the content with a backdrop scrim. This is the standard mobile navigation pattern.
                </x-mbc::typography>
                <x-mbc::typography variant="body2" style="color: #666;">
                    <strong>Note:</strong> The modal drawer includes a dark scrim overlay behind it. Users can tap the scrim to close the drawer.
                </x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.navigation-drawer._codes.modal')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Mobile applications, temporary navigation, focus on drawer content, small screens.
    </x-mbc::typography>
</section>
