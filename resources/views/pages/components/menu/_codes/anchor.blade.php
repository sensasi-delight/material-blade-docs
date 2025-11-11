&lt;div style="display: flex; gap: 1rem; flex-wrap: wrap;">
    &lt;div style="position: relative; height: 200px;">
        &lt;x-mbc::button id="anchor-bl-button" label="Bottom Left" variant="outlined" />
        &lt;x-mbc::menu id="anchor-bl-menu" anchorCorner="BOTTOM_LEFT" style="position: absolute; top: 48px; left: 0;">
            &lt;x-mbc::list-item primary="Bottom Left" />
            &lt;x-mbc::list-item primary="Option 2" />
        &lt;/x-mbc::menu>
    &lt;/div>

    &lt;div style="position: relative; height: 200px;">
        &lt;x-mbc::button id="anchor-br-button" label="Bottom Right" variant="outlined" />
        &lt;x-mbc::menu id="anchor-br-menu" anchorCorner="BOTTOM_RIGHT" style="position: absolute; top: 48px; right: 0;">
            &lt;x-mbc::list-item primary="Bottom Right" />
            &lt;x-mbc::list-item primary="Option 2" />
        &lt;/x-mbc::menu>
    &lt;/div>
&lt;/div>

&lt;script>
    document.addEventListener('DOMContentLoaded', function() {
        ['anchor-bl', 'anchor-br'].forEach(id => {
            const menuEl = document.getElementById(id + '-menu');
            const menu = menuEl.MDCMenu;
            const button = document.getElementById(id + '-button');
            
            button.addEventListener('click', function() {
                menu.open = !menu.open;
            });
        });
    });
&lt;/script>