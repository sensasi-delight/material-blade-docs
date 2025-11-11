<section>
    <x-h2>Custom Steps</x-h2>

    <x-mbc::typography>
        Control the granularity of value selection using the <code>step</code> prop. The slider will snap to multiples of the step value.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
            <div>
                <x-mbc::typography variant="body2" gutterBottom>Step by 1 (Default)</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :min="0" 
                    :max="10" 
                    :value="5"
                    :step="1"
                    aria-label="Step by 1" 
                    name="step1" 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Step by 5</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :min="0" 
                    :max="100" 
                    :value="50"
                    :step="5"
                    aria-label="Step by 5" 
                    name="step5" 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Step by 20</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :tickMarks="true"
                    :min="0" 
                    :max="100" 
                    :value="60"
                    :step="20"
                    aria-label="Step by 20" 
                    name="step20" 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Step by 0.5 (Decimal)</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :min="0" 
                    :max="5" 
                    :value="2.5"
                    step="0.5"
                    aria-label="Step by 0.5" 
                    name="stepDecimal" 
                />
            </div>
        </div>

        @slot('code')
            @include('pages.components.slider._codes.steps')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Steps work with both continuous and discrete sliders. For discrete sliders with tick marks, the tick marks will be placed at each step interval.
    </x-mbc::typography>
</section>
