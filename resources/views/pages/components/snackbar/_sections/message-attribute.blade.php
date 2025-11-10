<section>
    <x-h2>Dynamic Messages</x-h2>

    <x-mbc::typography>
        The <code>message</code> attribute accepts dynamic content from variables, making it easy to pass messages from controllers, session data, or computed values.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                <x-mbc::snackbar 
                    message="File uploaded successfully" 
                    class="mdc-snackbar--open" 
                />
            </div>

            <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                <x-mbc::snackbar 
                    message="Changes saved" 
                    class="mdc-snackbar--open" 
                />
            </div>

            <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                <x-mbc::snackbar 
                    message="Email deleted" 
                    class="mdc-snackbar--open" 
                />
            </div>
        </div>

        @slot('code')
            @include('pages.components.snackbar._codes.message-attribute')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Use the <code>message</code> attribute when passing dynamic content from variables: <code>message="{{ $successMessage }}"</code>
    </x-mbc::typography>
</section>
