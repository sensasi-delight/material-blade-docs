<section>
    <x-h2>Interactive Example</x-h2>

    <x-mbc::typography>
        Here's a complete example showing how to handle menu item clicks and close the menu after selection.
    </x-mbc::typography>

    <x-component-preview>
        <div style="position: relative; height: 250px;">
            <x-mbc::button id="interactive-button" label="Select Option" variant="raised" />
            <x-mbc::typography id="selected-option" variant="body2" style="margin-top: 1rem; color: #666;">
                Selected: None
            </x-mbc::typography>
            
            <x-mbc::menu id="interactive-menu" style="position: absolute; top: 48px; left: 0;">
                <x-mbc::list-item primary="Option 1" data-value="option1" />
                <x-mbc::list-item primary="Option 2" data-value="option2" />
                <x-mbc::list-item primary="Option 3" data-value="option3" />
            </x-mbc::menu>
        </div>

        <script>
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
        </script>

        @slot('code')
            @include('pages.components.menu._codes.interactive')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Use the <code>MDCMenu:selected</code> event to handle menu item selection. The menu automatically closes after an item is selected.
    </x-mbc::typography>
</section>
