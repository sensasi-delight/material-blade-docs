<section>
    <x-h2>Menu Items</x-h2>

    <x-mbc::typography>
        Menu items can include icons, text, and dividers. Use the Material Design list item structure for proper styling.
    </x-mbc::typography>

    <x-component-preview>
        <div style="position: relative; height: 300px;">
            <x-mbc::button id="items-menu-button" label="Menu with Icons" variant="raised" />
            
            <x-mbc::menu id="items-menu" style="position: absolute; top: 48px; left: 0;">
                <x-mbc::list-item primary="Cut" startIcon="content_cut" />
                <x-mbc::list-item primary="Copy" startIcon="content_copy" />
                <x-mbc::list-item primary="Paste" startIcon="content_paste" />
                <li role="separator" class="mdc-deprecated-list-divider"></li>
                <x-mbc::list-item primary="Delete" startIcon="delete" />
            </x-mbc::menu>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const menuEl = document.getElementById('items-menu');
                const menu = menuEl.MDCMenu;
                const button = document.getElementById('items-menu-button');
                
                button.addEventListener('click', function() {
                    menu.open = !menu.open;
                });
            });
        </script>

        @slot('code')
            @include('pages.components.menu._codes.items')
        @endslot
    </x-component-preview>
</section>
