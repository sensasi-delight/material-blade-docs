<section>
    <x-h2>Dismissible Drawer</x-h2>

    <x-mbc::typography>
        Dismissible drawers can be toggled open or closed. They sit at the same elevation as the content and can be closed to provide more space for the main content area.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; height: 350px; border: 1px solid #e0e0e0; overflow: hidden;">
            <x-mbc::drawer variant="dismissible" title="Menu">
                <x-mbc::list>
                    <x-mbc::list-item primary="Dashboard" startIcon="dashboard" />
                    <x-mbc::list-item primary="Analytics" startIcon="analytics" />
                    <x-mbc::list-item primary="Reports" startIcon="assessment" />
                    <x-mbc::list-item primary="Users" startIcon="people" />
                    <x-mbc::list-item primary="Settings" startIcon="settings" />
                </x-mbc::list>
            </x-mbc::drawer>
            
            <div style="flex: 1; padding: 1.5rem; background: #fafafa; overflow-y: auto;">
                <x-mbc::typography variant="h5" gutterBottom>Dashboard View</x-mbc::typography>
                <x-mbc::typography variant="body1" gutterBottom>
                    The dismissible drawer can be toggled to give more space to content. When closed, it disappears completely, allowing the content to expand.
                </x-mbc::typography>
                <x-mbc::typography variant="body2" style="color: #666;">
                    <strong>Note:</strong> In a real implementation, you would add a menu button to toggle the drawer open/closed using JavaScript.
                </x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.navigation-drawer._codes.dismissible')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Responsive layouts, applications that need flexible navigation, when users benefit from seeing more content.
    </x-mbc::typography>
</section>
