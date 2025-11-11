&lt;div style="position: relative; height: 200px;">
    &lt;x-mbc::button id="fixed-menu-button" label="Fixed Menu" variant="raised" />
    
    &lt;x-mbc::menu id="fixed-menu" :fixed="true" style="position: absolute; top: 48px; left: 0;">
        &lt;x-mbc::list-item primary="Fixed Item 1" />
        &lt;x-mbc::list-item primary="Fixed Item 2" />
        &lt;x-mbc::list-item primary="Fixed Item 3" />
    &lt;/x-mbc::menu>
&lt;/div>

&lt;script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuEl = document.getElementById('fixed-menu');
        const menu = menuEl.MDCMenu;
        const button = document.getElementById('fixed-menu-button');
        
        button.addEventListener('click', function() {
            menu.open = !menu.open;
        });
    });
&lt;/script>