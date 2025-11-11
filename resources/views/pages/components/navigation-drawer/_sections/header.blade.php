<section>
    <x-h2>Drawer with Header</x-h2>

    <x-mbc::typography>
        Drawers can include an optional header section with a title and subtitle. This is useful for displaying app branding, account information, or context.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; height: 350px; border: 1px solid #e0e0e0; overflow: hidden;">
            <x-mbc::drawer 
                variant="permanent" 
                title="Material Blade" 
                subtitle="v1.0.0"
            >
                <x-mbc::list>
                    <x-mbc::list-item primary="Getting Started" startIcon="play_arrow" />
                    <x-mbc::list-item primary="Components" startIcon="widgets" />
                    <x-mbc::list-item primary="Customization" startIcon="palette" />
                    <x-mbc::list-item primary="Examples" startIcon="code" />
                    <x-mbc::list-item primary="API Reference" startIcon="book" />
                </x-mbc::list>
            </x-mbc::drawer>
            
            <div style="flex: 1; padding: 1.5rem; background: #fafafa; overflow-y: auto;">
                <x-mbc::typography variant="h5" gutterBottom>Documentation Site</x-mbc::typography>
                <x-mbc::typography variant="body1" gutterBottom>
                    The drawer header displays the application name and version. This provides context and branding for the navigation drawer.
                </x-mbc::typography>
                <x-mbc::typography variant="body2" style="color: #666;">
                    Headers can also be used to display user information, account switchers, or organization names.
                </x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.navigation-drawer._codes.header')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Use the header to provide context about what the drawer contains or to display branding. The subtitle is optional and can show additional information like version numbers or account names.
    </x-mbc::typography>
</section>
