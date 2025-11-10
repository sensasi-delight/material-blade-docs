<section>
    <x-h2>Continuous Slider</x-h2>

    <x-mbc::typography>
        Continuous sliders allow users to select a value along a continuous range. Use them when the specific value doesn't matter, such as adjusting volume or brightness.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
            <div>
                <x-mbc::typography variant="body2" gutterBottom>Default (0-100)</x-mbc::typography>
                <x-mbc::slider aria-label="Volume control" name="volume" />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Custom Range (0-50)</x-mbc::typography>
                <x-mbc::slider 
                    :min="0" 
                    :max="50" 
                    :value="25" 
                    aria-label="Brightness control" 
                    name="brightness" 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Temperature (60-90°F)</x-mbc::typography>
                <x-mbc::slider 
                    :min="60" 
                    :max="90" 
                    :value="72" 
                    aria-label="Temperature control" 
                    name="temperature" 
                />
            </div>
        </div>

        @slot('code')
            @include('pages.components.slider._codes.continuous')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Best Practice:</strong> Always provide an <code>aria-label</code> for accessibility. The <code>name</code> attribute is used when submitting forms.
    </x-mbc::typography>
</section>
