&lt;div style="position: relative; height: 250px;">
    &lt;x-mbc::button id="interactive-button" label="Select Option" variant="raised" />
    &lt;x-mbc::typography id="selected-option" variant="body2" style="margin-top: 1rem; color: #666;">
        Selected: None
    &lt;/x-mbc::typography>
    
    &lt;x-mbc::menu id="interactive-menu" style="position: absolute; top: 48px; left: 0;">
        &lt;x-mbc::list-item primary="Option 1" data-value="option1" />
        &lt;x-mbc::list-item primary="Option 2" data-value="option2" />
        &lt;x-mbc::list-item primary="Option 3" data-value="option3" />
    &lt;/x-mbc::menu>
&lt;/div>

&lt;script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuEl = document.getElementById('interactive-menu');
        const menu = menuEl.MDCMenu;
        const button = document.getElementById('interactive-button');
        const selectedText = document.getElementById('selected-option');
        
        button.addEventListener('click', function() {
            menu.open = !menu.open;
        });
        
        menuEl.addEventListener('MDCMenu:selected', function(event) {
            const item = event.detail.item;
            const value = item.getAttribute('data-value');
            const text = item.querySelector('.mdc-deprecated-list-item__text').textContent;
            selectedText.textContent = 'Selected: ' + text;
        });
    });
&lt;/script>