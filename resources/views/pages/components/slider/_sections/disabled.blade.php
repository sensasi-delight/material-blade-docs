<section>
    <x-h2>Disabled State</x-h2>

    <x-mbc::typography>
        Disable sliders using the <code>disabled</code> attribute. Disabled sliders cannot be interacted with and have reduced opacity.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
            <div>
                <x-mbc::typography variant="body2" gutterBottom>Disabled Continuous Slider</x-mbc::typography>
                <x-mbc::slider 
                    :value="50"
                    aria-label="Disabled continuous slider" 
                    disabled 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Disabled Discrete Slider</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :min="0" 
                    :max="10" 
                    :value="7"
                    aria-label="Disabled discrete slider" 
                    disabled 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Disabled with Tick Marks</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :tickMarks="true"
                    :min="0" 
                    :max="100" 
                    :value="75"
                    :step="25"
                    aria-label="Disabled with tick marks" 
                    disabled 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Disabled Range Slider</x-mbc::typography>
                <x-mbc::slider 
                    :range="true"
                    :discrete="true"
                    :min="0" 
                    :max="100" 
                    :valueStart="25"
                    :valueEnd="75"
                    aria-label="Disabled range slider" 
                    disabled 
                />
            </div>
        </div>

        @slot('code')
            @include('pages.components.slider._codes.disabled')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Use disabled sliders to show values that cannot currently be changed, such as settings that require permissions or locked features.
    </x-mbc::typography>
</section>
