&lt;div style="position: relative; height: 300px;">
    &lt;x-mbc::button id="items-menu-button" label="Menu with Icons" variant="raised" />
    
    &lt;x-mbc::menu id="items-menu" style="position: absolute; top: 48px; left: 0;">
        &lt;x-mbc::list-item primary="Cut" startIcon="content_cut" />
        &lt;x-mbc::list-item primary="Copy" startIcon="content_copy" />
        &lt;x-mbc::list-item primary="Paste" startIcon="content_paste" />
        &lt;li role="separator" class="mdc-deprecated-list-divider">&lt;/li>
        &lt;x-mbc::list-item primary="Delete" startIcon="delete" />
    &lt;/x-mbc::menu>
&lt;/div>

&lt;script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuEl = document.getElementById('items-menu');
        const menu = menuEl.MDCMenu;
        const button = document.getElementById('items-menu-button');
        
        button.addEventListener('click', function() {
            menu.open = !menu.open;
        });
    });
&lt;/script>