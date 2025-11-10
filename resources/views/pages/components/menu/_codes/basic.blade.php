&lt;div style="position: relative; height: 200px;">
    &lt;x-mbc::button id="basic-menu-button" label="Click Me" variant="outlined" />
    
    &lt;x-mbc::menu id="basic-menu" style="position: absolute; top: 48px; left: 0;">
        &lt;x-mbc::list-item primary="Cut" />
        &lt;x-mbc::list-item primary="Copy" />
        &lt;x-mbc::list-item primary="Paste" />
    &lt;/x-mbc::menu>
&lt;/div>

&lt;script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuEl = document.getElementById('basic-menu');
        const menu = menuEl.MDCMenu;
        const button = document.getElementById('basic-menu-button');
        
        button.addEventListener('click', function() {
            menu.open = !menu.open;
        });
    });
&lt;/script>