<section>
    <x-h2>Basic Snackbar</x-h2>

    <x-mbc::typography>
        Use the <code>message</code> attribute to display brief messages at the bottom of the screen. Snackbars communicate simple notifications about app processes.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                <x-mbc::snackbar 
                    message="Message sent successfully" 
                    class="mdc-snackbar--open" 
                />
            </div>

            <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                <x-mbc::snackbar 
                    message="Connection lost. Retrying..." 
                    class="mdc-snackbar--open" 
                />
            </div>

            <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                <x-mbc::snackbar 
                    message="Photo saved to your gallery" 
                    class="mdc-snackbar--open" 
                />
            </div>
        </div>

        @slot('code')
            @include('pages.components.snackbar._codes.basic')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Keep snackbar messages brief and informative. They should communicate simple, single-line messages about operations or states.
    </x-mbc::typography>
</section>
