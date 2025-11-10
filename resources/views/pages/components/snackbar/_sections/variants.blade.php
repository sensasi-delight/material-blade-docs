<section>
    <x-h2>Snackbar Variants</x-h2>

    <x-mbc::typography>
        Snackbars support different layout variants: <code>default</code>, <code>leading</code>, and <code>stacked</code>. These variants control how the message and action button are positioned.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Default</x-mbc::typography>
                <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                    <x-mbc::snackbar variant="default" message="Default layout" class="mdc-snackbar--open">
                        @slot('action')
                            <button type="button" class="mdc-button mdc-snackbar__action">
                                <div class="mdc-button__ripple"></div>
                                <span class="mdc-button__label">Action</span>
                            </button>
                        @endslot
                    </x-mbc::snackbar>
                </div>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Leading</x-mbc::typography>
                <div style="position: relative; height: 150px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                    <x-mbc::snackbar variant="leading" message="Leading layout (action on left)" class="mdc-snackbar--open">
                        @slot('action')
                            <button type="button" class="mdc-button mdc-snackbar__action">
                                <div class="mdc-button__ripple"></div>
                                <span class="mdc-button__label">Action</span>
                            </button>
                        @endslot
                    </x-mbc::snackbar>
                </div>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Stacked</x-mbc::typography>
                <div style="position: relative; height: 180px; background: #f5f5f5; border-radius: 4px; overflow: hidden;">
                    <x-mbc::snackbar variant="stacked" message="Stacked layout (action below message)" class="mdc-snackbar--open">
                        @slot('action')
                            <button type="button" class="mdc-button mdc-snackbar__action">
                                <div class="mdc-button__ripple"></div>
                                <span class="mdc-button__label">Action</span>
                            </button>
                        @endslot
                    </x-mbc::snackbar>
                </div>
            </div>
        </div>

        @slot('code')
            @include('pages.components.snackbar._codes.variants')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Use <code>stacked</code> for longer messages with actions, <code>leading</code> for left-aligned actions, and <code>default</code> for standard right-aligned layouts.
    </x-mbc::typography>
</section>
