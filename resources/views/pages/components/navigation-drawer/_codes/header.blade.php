&lt;div style="display: flex; height: 350px; border: 1px solid #e0e0e0; overflow: hidden;">
    &lt;x-mbc::drawer 
        variant="permanent" 
        title="Material Blade" 
        subtitle="v1.0.0"
    >
        &lt;x-mbc::list>
            &lt;x-mbc::list-item primary="Getting Started" startIcon="play_arrow" />
            &lt;x-mbc::list-item primary="Components" startIcon="widgets" />
            &lt;x-mbc::list-item primary="Customization" startIcon="palette" />
            &lt;x-mbc::list-item primary="Examples" startIcon="code" />
            &lt;x-mbc::list-item primary="API Reference" startIcon="book" />
        &lt;/x-mbc::list>
    &lt;/x-mbc::drawer>
    
    &lt;div style="flex: 1; padding: 1.5rem; background: #fafafa; overflow-y: auto;">
        &lt;x-mbc::typography variant="h5" gutterBottom>Documentation Site&lt;/x-mbc::typography>
        &lt;x-mbc::typography variant="body1" gutterBottom>
            The drawer header displays the application name and version. This provides context and branding for the navigation drawer.
        &lt;/x-mbc::typography>
        &lt;x-mbc::typography variant="body2" style="color: #666;">
            Headers can also be used to display user information, account switchers, or organization names.
        &lt;/x-mbc::typography>
    &lt;/div>
&lt;/div>