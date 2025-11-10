<section>
    <x-h2>Data Table with Header</x-h2>

    <x-mbc::typography>
        Add column headers using the <code>header</code> prop. Headers help users understand what each column represents and improve table accessibility.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::data-table
            :header="['Product Name', 'Category', 'Status', 'Price']"
            :data="[
                ['Laptop Pro', 'Electronics', 'Available', '$1,299'],
                ['Wireless Mouse', 'Accessories', 'Available', '$29'],
                ['USB-C Cable', 'Accessories', 'Limited', '$19'],
                ['Monitor 27&quot;', 'Electronics', 'Available', '$399'],
                ['Keyboard Mechanical', 'Accessories', 'Out of Stock', '$149'],
            ]"
            aria-label="Product inventory table"
        />

        @slot('code')
            @include('pages.components.data-table._codes.header')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Use the <code>aria-label</code> attribute to provide an accessible description of the table's purpose.
    </x-mbc::typography>
</section>
