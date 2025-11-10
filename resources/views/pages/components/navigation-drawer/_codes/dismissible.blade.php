&lt;div style="display: flex; height: 350px; border: 1px solid #e0e0e0; overflow: hidden;">
    &lt;x-mbc::drawer variant="dismissible" title="Menu">
        &lt;x-mbc::list>
            &lt;x-mbc::list-item primary="Dashboard" startIcon="dashboard" />
            &lt;x-mbc::list-item primary="Analytics" startIcon="analytics" />
            &lt;x-mbc::list-item primary="Reports" startIcon="assessment" />
            &lt;x-mbc::list-item primary="Users" startIcon="people" />
            &lt;x-mbc::list-item primary="Settings" startIcon="settings" />
        &lt;/x-mbc::list>
    &lt;/x-mbc::drawer>
    
    &lt;div style="flex: 1; padding: 1.5rem; background: #fafafa; overflow-y: auto;">
        &lt;x-mbc::typography variant="h5" gutterBottom>Dashboard View&lt;/x-mbc::typography>
        &lt;x-mbc::typography variant="body1" gutterBottom>
            The dismissible drawer can be toggled to give more space to content. When closed, it disappears completely, allowing the content to expand.
        &lt;/x-mbc::typography>
        &lt;x-mbc::typography variant="body2" style="color: #666;">
            &lt;strong>Note:&lt;/strong> In a real implementation, you would add a menu button to toggle the drawer open/closed using JavaScript.
        &lt;/x-mbc::typography>
    &lt;/div>
&lt;/div>