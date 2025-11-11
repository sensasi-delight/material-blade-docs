<section>
    <x-h2>Complete Example</x-h2>

    <x-mbc::typography>
        A comprehensive example combining headers, checkboxes, numeric columns, and HTML content in cells. You can use HTML in cell values for rich content like badges, icons, or formatted text.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::data-table
            :header="['User', 'Email', 'Role', 'Status', 'Orders' => 'numeric', 'Revenue' => 'numeric']"
            :data="[
                [
                    true,
                    '<strong>John Doe</strong>',
                    'john.doe@example.com',
                    'Administrator',
                    '<span style=&quot;background: #4CAF50; color: white; padding: 2px 8px; border-radius: 4px; font-size: 12px;&quot;>Active</span>',
                    127,
                    15420.50
                ],
                [
                    false,
                    '<strong>Jane Smith</strong>',
                    'jane.smith@example.com',
                    'Editor',
                    '<span style=&quot;background: #4CAF50; color: white; padding: 2px 8px; border-radius: 4px; font-size: 12px;&quot;>Active</span>',
                    89,
                    9350.75
                ],
                [
                    true,
                    '<strong>Bob Johnson</strong>',
                    'bob.johnson@example.com',
                    'Customer',
                    '<span style=&quot;background: #FFC107; color: #333; padding: 2px 8px; border-radius: 4px; font-size: 12px;&quot;>Pending</span>',
                    45,
                    5280.00
                ],
                [
                    false,
                    '<strong>Alice Brown</strong>',
                    'alice.brown@example.com',
                    'Customer',
                    '<span style=&quot;background: #F44336; color: white; padding: 2px 8px; border-radius: 4px; font-size: 12px;&quot;>Inactive</span>',
                    12,
                    1150.25
                ],
            ]"
            :withCheckbox="true"
            aria-label="User management table"
        />

        @slot('code')
            @include('pages.components.data-table._codes.complete')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Cell values can contain HTML for rich formatting. Use this to display status badges, icons, links, or any custom content. The component renders HTML content in cells.
    </x-mbc::typography>
</section>
