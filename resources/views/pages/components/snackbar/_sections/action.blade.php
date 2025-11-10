<section>
    <x-h2>With Action Button</x-h2>

    <x-mbc::typography>
        Snackbars can include an optional action button using the <code>@slot('action')</code> slot. Actions allow users to respond to the snackbar message, such as undoing an operation or viewing details.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                <x-mbc::snackbar message="Item deleted" class="mdc-snackbar--open">
                    @slot('action')
                        <button type="button" class="mdc-button mdc-snackbar__action">
                            <div class="mdc-button__ripple"></div>
                            <span class="mdc-button__label">Undo</span>
                        </button>
                    @endslot
                </x-mbc::snackbar>
            </div>

            <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                <x-mbc::snackbar message="Photo archived" class="mdc-snackbar--open">
                    @slot('action')
                        <button type="button" class="mdc-button mdc-snackbar__action">
                            <div class="mdc-button__ripple"></div>
                            <span class="mdc-button__label">View</span>
                        </button>
                    @endslot
                </x-mbc::snackbar>
            </div>

            <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                <x-mbc::snackbar message="Connection timeout" class="mdc-snackbar--open">
                    @slot('action')
                        <button type="button" class="mdc-button mdc-snackbar__action">
                            <div class="mdc-button__ripple"></div>
                            <span class="mdc-button__label">Retry</span>
                        </button>
                    @endslot
                </x-mbc::snackbar>
            </div>
        </div>

        @slot('code')
            @include('pages.components.snackbar._codes.action')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Action buttons should use a single word when possible (Undo, Retry, View). Keep actions simple and directly related to the snackbar message.
    </x-mbc::typography>
</section>
