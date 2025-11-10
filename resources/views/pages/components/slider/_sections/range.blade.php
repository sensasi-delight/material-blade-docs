<section>
    <x-h2>Range Slider</x-h2>

    <x-mbc::typography>
        Range sliders have two thumbs, allowing users to select a range of values. Use <code>:range="true"</code> and provide <code>valueStart</code> and <code>valueEnd</code> for initial values.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
            <div>
                <x-mbc::typography variant="body2" gutterBottom>Price Range ($0-$100)</x-mbc::typography>
                <x-mbc::slider 
                    :range="true"
                    :min="0" 
                    :max="100" 
                    :valueStart="20"
                    :valueEnd="80"
                    aria-label="Price range" 
                    nameStart="priceMin"
                    nameEnd="priceMax"
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Discrete Range (0-10)</x-mbc::typography>
                <x-mbc::slider 
                    :range="true"
                    :discrete="true"
                    :min="0" 
                    :max="10" 
                    :valueStart="3"
                    :valueEnd="7"
                    aria-label="Value range" 
                    nameStart="valueMin"
                    nameEnd="valueMax"
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>With Minimum Distance (minRange=10)</x-mbc::typography>
                <x-mbc::slider 
                    :range="true"
                    :discrete="true"
                    :min="0" 
                    :max="100" 
                    :valueStart="30"
                    :valueEnd="70"
                    :minRange="10"
                    aria-label="Range with minimum distance" 
                    nameStart="rangeMin"
                    nameEnd="rangeMax"
                />
            </div>
        </div>

        @slot('code')
            @include('pages.components.slider._codes.range')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Use range sliders for price filters, time ranges, or any scenario where users need to select a minimum and maximum value. The <code>minRange</code> prop prevents thumbs from overlapping.
    </x-mbc::typography>
</section>
