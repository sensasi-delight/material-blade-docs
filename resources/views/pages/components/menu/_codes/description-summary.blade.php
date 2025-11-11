&lt;div style="position: relative; height: 250px;">
    &lt;x-mbc::button id="menu-button-demo" label="Open Menu" variant="raised" />
    
    &lt;x-mbc::menu id="menu-demo" style="position: absolute; top: 48px; left: 0;">
        &lt;x-mbc::list-item primary="Item 1" />
        &lt;x-mbc::list-item primary="Item 2" />
        &lt;x-mbc::list-item primary="Item 3" />
    &lt;/x-mbc::menu>
&lt;/div>

&lt;script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuEl = document.getElementById('menu-demo');
        const menu = menuEl.MDCMenu;
        const button = document.getElementById('menu-button-demo');
        
        button.addEventListener('click', function() {
            menu.open = !menu.open;
        });
    });
&lt;/script>