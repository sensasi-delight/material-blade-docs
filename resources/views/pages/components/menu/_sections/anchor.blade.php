<section>
    <x-h2>Anchor Corner</x-h2>

    <x-mbc::typography>
        Use the <code>anchorCorner</code> prop to control which corner of the anchor element the menu aligns to. Available values: <code>TOP_LEFT</code>, <code>TOP_RIGHT</code>, <code>BOTTOM_LEFT</code>, <code>BOTTOM_RIGHT</code>.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <div style="position: relative; height: 200px;">
                <x-mbc::button id="anchor-bl-button" label="Bottom Left" variant="outlined" />
                <x-mbc::menu id="anchor-bl-menu" anchorCorner="BOTTOM_LEFT" style="position: absolute; top: 48px; left: 0;">
                    <x-mbc::list-item primary="Bottom Left" />
                    <x-mbc::list-item primary="Option 2" />
                </x-mbc::menu>
            </div>

            <div style="position: relative; height: 200px;">
                <x-mbc::button id="anchor-br-button" label="Bottom Right" variant="outlined" />
                <x-mbc::menu id="anchor-br-menu" anchorCorner="BOTTOM_RIGHT" style="position: absolute; top: 48px; right: 0;">
                    <x-mbc::list-item primary="Bottom Right" />
                    <x-mbc::list-item primary="Option 2" />
                </x-mbc::menu>
            </div>
        </div>

        <script>
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
        </script>

        @slot('code')
            @include('pages.components.menu._codes.anchor')
        @endslot
    </x-component-preview>
</section>
