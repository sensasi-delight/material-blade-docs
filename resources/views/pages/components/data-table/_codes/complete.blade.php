&lt;x-mbc::data-table
    :header="['User', 'Email', 'Role', 'Status', 'Orders' => 'numeric', 'Revenue' => 'numeric']"
    :data="[
        [
            true,
            '&lt;strong>John Doe&lt;/strong>',
            'john.doe@example.com',
            'Administrator',
            '&lt;span style=&amp;quot;background: #4CAF50; color: white; padding: 2px 8px; border-radius: 4px; font-size: 12px;&amp;quot;>Active&lt;/span>',
            127,
            15420.50
        ],
        [
            false,
            '&lt;strong>Jane Smith&lt;/strong>',
            'jane.smith@example.com',
            'Editor',
            '&lt;span style=&amp;quot;background: #4CAF50; color: white; padding: 2px 8px; border-radius: 4px; font-size: 12px;&amp;quot;>Active&lt;/span>',
            89,
            9350.75
        ],
        [
            true,
            '&lt;strong>Bob Johnson&lt;/strong>',
            'bob.johnson@example.com',
            'Customer',
            '&lt;span style=&amp;quot;background: #FFC107; color: #333; padding: 2px 8px; border-radius: 4px; font-size: 12px;&amp;quot;>Pending&lt;/span>',
            45,
            5280.00
        ],
        [
            false,
            '&lt;strong>Alice Brown&lt;/strong>',
            'alice.brown@example.com',
            'Customer',
            '&lt;span style=&amp;quot;background: #F44336; color: white; padding: 2px 8px; border-radius: 4px; font-size: 12px;&amp;quot;>Inactive&lt;/span>',
            12,
            1150.25
        ],
    ]"
    :withCheckbox="true"
    aria-label="User management table"
/>