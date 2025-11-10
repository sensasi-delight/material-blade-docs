<section>
    <x-h2>Touch Target</x-h2>

    <x-mbc::typography>
        For better mobile accessibility, enable the touch target wrapper using <code>:touch="true"</code>. This creates a 48x48 pixel touch area, making it easier to tap on mobile devices.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 3rem; flex-wrap: wrap;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Standard (No Touch Target)</x-mbc::typography>
                <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                    <x-mbc::radio 
                        id="touch-standard-1" 
                        name="standard-touch" 
                        value="small" 
                        label="Small Target Area" 
                        checked 
                    />
                    <x-mbc::radio 
                        id="touch-standard-2" 
                        name="standard-touch" 
                        value="harder" 
                        label="Harder to Tap on Mobile" 
                    />
                </div>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>With Touch Target</x-mbc::typography>
                <div style="display: flex; flex-direction: column; gap: 0.5rem;">
                    <x-mbc::radio 
                        id="touch-enabled-1" 
                        name="touch-group" 
                        value="large" 
                        label="Larger Target Area" 
                        :touch="true"
                        checked 
                    />
                    <x-mbc::radio 
                        id="touch-enabled-2" 
                        name="touch-group" 
                        value="easier" 
                        label="Easier to Tap on Mobile" 
                        :touch="true"
                    />
                </div>
            </div>
        </div>

        @slot('code')
            @include('pages.components.radio._codes.touch')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Enable touch targets for mobile-first designs or responsive layouts. This follows Material Design guidelines for minimum touch target size (48x48 dp).
    </x-mbc::typography>
</section>
