<section>
    <x-h2>Basic Data Table</x-h2>

    <x-mbc::typography>
        Create a simple data table by passing the <code>data</code> prop with an array of rows. The first column in each row is automatically treated as the row header.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::data-table
            :data="[
                ['Product A', 'In Stock', '$99.99'],
                ['Product B', 'Low Stock', '$149.99'],
                ['Product C', 'Out of Stock', '$79.99'],
                ['Product D', 'In Stock', '$199.99'],
            ]"
        />

        @slot('code')
            @include('pages.components.data-table._codes.basic')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Note:</strong> Without headers, the table displays only the data rows. The first column automatically becomes a row header (<code>&lt;th&gt;</code>) for accessibility.
    </x-mbc::typography>
</section>
