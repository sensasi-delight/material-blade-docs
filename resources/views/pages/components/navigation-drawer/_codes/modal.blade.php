&lt;div style="position: relative; height: 350px; border: 1px solid #e0e0e0; overflow: hidden;">
    &lt;x-mbc::drawer variant="modal" title="Mobile Menu">
        &lt;x-mbc::list>
            &lt;x-mbc::list-item primary="Home" startIcon="home" />
            &lt;x-mbc::list-item primary="Explore" startIcon="explore" />
            &lt;x-mbc::list-item primary="Favorites" startIcon="favorite" />
            &lt;x-mbc::list-item primary="Library" startIcon="video_library" />
            &lt;x-mbc::list-item primary="History" startIcon="history" />
            &lt;x-mbc::list-item primary="Help" startIcon="help" />
        &lt;/x-mbc::list>
    &lt;/x-mbc::drawer>
    
    &lt;div style="padding: 1.5rem; background: #fafafa; height: 100%; overflow-y: auto;">
        &lt;x-mbc::typography variant="h5" gutterBottom>Mobile Application&lt;/x-mbc::typography>
        &lt;x-mbc::typography variant="body1" gutterBottom>
            The modal drawer appears on top of the content with a backdrop scrim. This is the standard mobile navigation pattern.
        &lt;/x-mbc::typography>
        &lt;x-mbc::typography variant="body2" style="color: #666;">
            &lt;strong>Note:&lt;/strong> The modal drawer includes a dark scrim overlay behind it. Users can tap the scrim to close the drawer.
        &lt;/x-mbc::typography>
    &lt;/div>
&lt;/div>