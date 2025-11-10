<section>
    <x-h2>Discrete with Tick Marks</x-h2>

    <x-mbc::typography>
        Add visible tick marks to discrete sliders to show all available values. Tick marks require both <code>:discrete="true"</code> and <code>:tickMarks="true"</code>, plus a <code>step</code> value.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
            <div>
                <x-mbc::typography variant="body2" gutterBottom>Priority Level (1-5)</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :tickMarks="true"
                    :min="1" 
                    :max="5" 
                    :value="3"
                    :step="1"
                    aria-label="Priority level" 
                    name="priority" 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Every 10 (0-100)</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :tickMarks="true"
                    :min="0" 
                    :max="100" 
                    :value="50"
                    :step="10"
                    aria-label="Value by tens" 
                    name="tens" 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Every 25 (0-100)</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :tickMarks="true"
                    :min="0" 
                    :max="100" 
                    :value="50"
                    :step="25"
                    aria-label="Quarters" 
                    name="quarters" 
                />
            </div>
        </div>

        @slot('code')
            @include('pages.components.slider._codes.tick-marks')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Tick marks provide visual feedback for all available values, making it clear what options are available to the user.
    </x-mbc::typography>
</section>
