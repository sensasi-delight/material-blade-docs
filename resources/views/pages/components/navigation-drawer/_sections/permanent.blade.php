<section>
    <x-h2>Permanent Drawer</x-h2>

    <x-mbc::typography>
        Permanent navigation drawers are always visible and pinned to the left edge. They're appropriate for desktop applications that require quick navigation to top-level destinations.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; height: 350px; border: 1px solid #e0e0e0; overflow: hidden;">
            <x-mbc::drawer variant="permanent">
                <x-mbc::list>
                    <x-mbc::list-item primary="Inbox" startIcon="inbox" />
                    <x-mbc::list-item primary="Starred" startIcon="star" />
                    <x-mbc::list-item primary="Sent" startIcon="send" />
                    <x-mbc::list-item primary="Drafts" startIcon="drafts" />
                    <x-mbc::list-item primary="Trash" startIcon="delete" />
                    <x-mbc::list-item primary="Spam" startIcon="report" />
                </x-mbc::list>
            </x-mbc::drawer>
            
            <div style="flex: 1; padding: 1.5rem; background: #fafafa; overflow-y: auto;">
                <x-mbc::typography variant="h5" gutterBottom>Email Application</x-mbc::typography>
                <x-mbc::typography variant="body1" gutterBottom>
                    This is a permanent drawer that stays open at all times. It's ideal for desktop layouts where screen space allows for persistent navigation.
                </x-mbc::typography>
                <x-mbc::typography variant="body2" style="color: #666;">
                    The permanent drawer is best suited for applications with 3-7 primary navigation destinations.
                </x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.navigation-drawer._codes.permanent')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Desktop applications, admin dashboards, email clients, file managers.
    </x-mbc::typography>
</section>
