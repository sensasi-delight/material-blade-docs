<section>
    <x-h2>Drawer Content</x-h2>

    <x-mbc::typography>
        Drawer content typically consists of navigation lists, but you can include any content. Common patterns include dividers between sections, nested navigation, and action items.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; height: 400px; border: 1px solid #e0e0e0; overflow: hidden;">
            <x-mbc::drawer variant="permanent" title="File Manager">
                <x-mbc::list>
                    <x-mbc::list-item primary="My Files" startIcon="folder" />
                    <x-mbc::list-item primary="Shared with me" startIcon="people" />
                    <x-mbc::list-item primary="Recent" startIcon="schedule" />
                    <x-mbc::list-item primary="Starred" startIcon="star" />
                </x-mbc::list>

                <x-mbc::list-divider />

                <x-mbc::typography variant="overline" style="padding: 8px 16px; color: #666;">
                    Storage
                </x-mbc::typography>

                <x-mbc::list>
                    <x-mbc::list-item primary="Documents" startIcon="description" />
                    <x-mbc::list-item primary="Photos" startIcon="photo" />
                    <x-mbc::list-item primary="Videos" startIcon="videocam" />
                    <x-mbc::list-item primary="Music" startIcon="music_note" />
                </x-mbc::list>

                <x-mbc::list-divider />

                <x-mbc::list>
                    <x-mbc::list-item primary="Settings" startIcon="settings" />
                    <x-mbc::list-item primary="Help" startIcon="help" />
                </x-mbc::list>
            </x-mbc::drawer>
            
            <div style="flex: 1; padding: 1.5rem; background: #fafafa; overflow-y: auto;">
                <x-mbc::typography variant="h5" gutterBottom>Complex Navigation</x-mbc::typography>
                <x-mbc::typography variant="body1" gutterBottom>
                    This drawer demonstrates organized navigation with multiple sections separated by dividers. Section headers help users understand the grouping.
                </x-mbc::typography>
                <x-mbc::typography variant="body2" style="color: #666;">
                    Use dividers and section labels to create a clear information hierarchy in your drawer navigation.
                </x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.navigation-drawer._codes.content')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Group related navigation items together, use dividers to separate sections, and limit primary navigation to 7 items or fewer for optimal usability.
    </x-mbc::typography>
</section>
