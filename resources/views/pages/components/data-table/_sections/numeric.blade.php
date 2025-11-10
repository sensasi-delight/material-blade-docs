<section>
    <x-h2>Numeric Columns</x-h2>

    <x-mbc::typography>
        Numeric columns are automatically right-aligned when cell values are numeric. You can also explicitly mark header columns as numeric by using <code>'numeric'</code> as the header value with the column name as the array key.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::data-table
            :header="['Dessert', 'Calories' => 'numeric', 'Fat (g)' => 'numeric', 'Carbs (g)' => 'numeric', 'Protein (g)' => 'numeric']"
            :data="[
                ['Frozen yogurt', 159, 6.0, 24, 4.0],
                ['Ice cream sandwich', 237, 9.0, 37, 4.3],
                ['Eclair', 262, 16.0, 24, 6.0],
                ['Cupcake', 305, 3.7, 67, 4.3],
                ['Gingerbread', 356, 16.0, 49, 3.9],
                ['Jelly bean', 375, 0.0, 94, 0.0],
                ['Lollipop', 392, 0.2, 98, 0.0],
                ['Honeycomb', 408, 3.2, 87, 6.5],
                ['Donut', 452, 25.0, 51, 4.9],
                ['KitKat', 518, 26.0, 65, 7.0],
            ]"
            aria-label="Nutrition facts table"
        />

        @slot('code')
            @include('pages.components.data-table._codes.numeric')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Numeric columns receive special styling with right alignment. Explicitly marking columns as numeric using the key-value syntax ensures consistent alignment even for mixed content.
    </x-mbc::typography>
</section>
