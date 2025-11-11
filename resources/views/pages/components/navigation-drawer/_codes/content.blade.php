&lt;div style="display: flex; height: 400px; border: 1px solid #e0e0e0; overflow: hidden;">
    &lt;x-mbc::drawer variant="permanent" title="File Manager">
        &lt;x-mbc::list>
            &lt;x-mbc::list-item primary="My Files" startIcon="folder" />
            &lt;x-mbc::list-item primary="Shared with me" startIcon="people" />
            &lt;x-mbc::list-item primary="Recent" startIcon="schedule" />
            &lt;x-mbc::list-item primary="Starred" startIcon="star" />
        &lt;/x-mbc::list>

        &lt;x-mbc::list-divider />

        &lt;x-mbc::typography variant="overline" style="padding: 8px 16px; color: #666;">
            Storage
        &lt;/x-mbc::typography>

        &lt;x-mbc::list>
            &lt;x-mbc::list-item primary="Documents" startIcon="description" />
            &lt;x-mbc::list-item primary="Photos" startIcon="photo" />
            &lt;x-mbc::list-item primary="Videos" startIcon="videocam" />
            &lt;x-mbc::list-item primary="Music" startIcon="music_note" />
        &lt;/x-mbc::list>

        &lt;x-mbc::list-divider />

        &lt;x-mbc::list>
            &lt;x-mbc::list-item primary="Settings" startIcon="settings" />
            &lt;x-mbc::list-item primary="Help" startIcon="help" />
        &lt;/x-mbc::list>
    &lt;/x-mbc::drawer>
    
    &lt;div style="flex: 1; padding: 1.5rem; background: #fafafa; overflow-y: auto;">
        &lt;x-mbc::typography variant="h5" gutterBottom>Complex Navigation&lt;/x-mbc::typography>
        &lt;x-mbc::typography variant="body1" gutterBottom>
            This drawer demonstrates organized navigation with multiple sections separated by dividers. Section headers help users understand the grouping.
        &lt;/x-mbc::typography>
        &lt;x-mbc::typography variant="body2" style="color: #666;">
            Use dividers and section labels to create a clear information hierarchy in your drawer navigation.
        &lt;/x-mbc::typography>
    &lt;/div>
&lt;/div>