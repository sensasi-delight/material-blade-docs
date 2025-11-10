<section>
    <x-h2>Fixed Position</x-h2>

    <x-mbc::typography>
        Set the <code>fixed</code> prop to <code>true</code> when the menu's anchor element is in a fixed position. This prevents scrolling issues.
    </x-mbc::typography>

    <x-component-preview>
        <div style="position: relative; height: 200px;">
            <x-mbc::button id="fixed-menu-button" label="Fixed Menu" variant="raised" />
            
            <x-mbc::menu id="fixed-menu" :fixed="true" style="position: absolute; top: 48px; left: 0;">
                <x-mbc::list-item primary="Fixed Item 1" />
                <x-mbc::list-item primary="Fixed Item 2" />
                <x-mbc::list-item primary="Fixed Item 3" />
            </x-mbc::menu>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const menuEl = document.getElementById('fixed-menu');
                const menu = menuEl.MDCMenu;
                const button = document.getElementById('fixed-menu-button');
                
                button.addEventListener('click', function() {
                    menu.open = !menu.open;
                });
            });
        </script>

        @slot('code')
            @include('pages.components.menu._codes.fixed')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> The <code>fixed</code> prop is particularly useful for menus in app bars or other fixed navigation elements.
    </x-mbc::typography>
</section>
