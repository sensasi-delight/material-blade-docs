&lt;div style="display: flex; height: 350px; border: 1px solid #e0e0e0; overflow: hidden;">
    &lt;x-mbc::drawer variant="permanent">
        &lt;x-mbc::list>
            &lt;x-mbc::list-item primary="Inbox" startIcon="inbox" />
            &lt;x-mbc::list-item primary="Starred" startIcon="star" />
            &lt;x-mbc::list-item primary="Sent" startIcon="send" />
            &lt;x-mbc::list-item primary="Drafts" startIcon="drafts" />
            &lt;x-mbc::list-item primary="Trash" startIcon="delete" />
            &lt;x-mbc::list-item primary="Spam" startIcon="report" />
        &lt;/x-mbc::list>
    &lt;/x-mbc::drawer>
    
    &lt;div style="flex: 1; padding: 1.5rem; background: #fafafa; overflow-y: auto;">
        &lt;x-mbc::typography variant="h5" gutterBottom>Email Application&lt;/x-mbc::typography>
        &lt;x-mbc::typography variant="body1" gutterBottom>
            This is a permanent drawer that stays open at all times. It's ideal for desktop layouts where screen space allows for persistent navigation.
        &lt;/x-mbc::typography>
        &lt;x-mbc::typography variant="body2" style="color: #666;">
            The permanent drawer is best suited for applications with 3-7 primary navigation destinations.
        &lt;/x-mbc::typography>
    &lt;/div>
&lt;/div>