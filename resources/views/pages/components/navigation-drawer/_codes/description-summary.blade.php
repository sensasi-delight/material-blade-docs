&lt;div style="display: flex; height: 300px; border: 1px solid #e0e0e0; position: relative;">
    &lt;x-mbc::drawer variant="permanent" title="Navigation">
        &lt;x-mbc::list>
            &lt;x-mbc::list-item primary="Home" startIcon="home" />
            &lt;x-mbc::list-item primary="Profile" startIcon="person" />
            &lt;x-mbc::list-item primary="Settings" startIcon="settings" />
        &lt;/x-mbc::list>
    &lt;/x-mbc::drawer>
    
    &lt;div style="flex: 1; padding: 1rem; background: #fafafa;">
        &lt;x-mbc::typography variant="h6">Main Content Area&lt;/x-mbc::typography>
        &lt;x-mbc::typography>The drawer is permanently visible on the left side.&lt;/x-mbc::typography>
    &lt;/div>
&lt;/div>