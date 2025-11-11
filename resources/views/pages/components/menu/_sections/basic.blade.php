<section>
    <x-h2>Basic Menu</x-h2>

    <x-mbc::typography>
        A menu displays a list of choices on a temporary surface. The menu component requires JavaScript to handle the open/close state.
    </x-mbc::typography>

    <x-component-preview>
        <div style="position: relative; height: 200px;">
            <x-mbc::button id="basic-menu-button" label="Click Me" variant="outlined" />
            
            <x-mbc::menu id="basic-menu" style="position: absolute; top: 48px; left: 0;">
                <x-mbc::list-item primary="Cut" />
                <x-mbc::list-item primary="Copy" />
                <x-mbc::list-item primary="Paste" />
            </x-mbc::menu>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const menuEl = document.getElementById('basic-menu');
                const menu = menuEl.MDCMenu;
                const button = document.getElementById('basic-menu-button');
                
                button.addEventListener('click', function() {
                    menu.open = !menu.open;
                });
            });
        </script>

        @slot('code')
            @include('pages.components.menu._codes.basic')
        @endslot
    </x-component-preview>
</section>
