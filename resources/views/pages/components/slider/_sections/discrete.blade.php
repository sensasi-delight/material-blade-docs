<section>
    <x-h2>Discrete Slider</x-h2>

    <x-mbc::typography>
        Discrete sliders show a value indicator when active, making it easier for users to see the exact value they're selecting. Use them when precision matters.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; padding: 1rem;">
            <div>
                <x-mbc::typography variant="body2" gutterBottom>Quantity (0-10)</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :min="0" 
                    :max="10" 
                    :value="5" 
                    aria-label="Quantity selector" 
                    name="quantity" 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Rating (0-5)</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :min="0" 
                    :max="5" 
                    :value="3" 
                    aria-label="Rating selector" 
                    name="rating" 
                />
            </div>

            <div>
                <x-mbc::typography variant="body2" gutterBottom>Percentage (0-100)</x-mbc::typography>
                <x-mbc::slider 
                    :discrete="true"
                    :min="0" 
                    :max="100" 
                    :value="75" 
                    aria-label="Percentage selector" 
                    name="percentage" 
                />
            </div>
        </div>

        @slot('code')
            @include('pages.components.slider._codes.discrete')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Use discrete sliders when users need to see the exact value, such as setting quantities, ratings, or percentages.
    </x-mbc::typography>
</section>
