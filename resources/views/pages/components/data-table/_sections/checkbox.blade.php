<section>
    <x-h2>Data Table with Checkboxes</x-h2>

    <x-mbc::typography>
        Enable row selection by setting <code>withCheckbox</code> to <code>true</code>. When using checkboxes, the first column of your data array controls the checkbox state (<code>true</code> for checked, <code>false</code> for unchecked). This column won't be displayed as data.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::data-table
            :header="['Task', 'Assignee', 'Due Date', 'Priority']"
            :data="[
                [true, 'Update documentation', 'John Doe', '2024-12-15', 'High'],
                [true, 'Fix navigation bug', 'Jane Smith', '2024-12-10', 'Critical'],
                [false, 'Add new feature', 'Bob Johnson', '2024-12-20', 'Medium'],
                [false, 'Code review', 'Alice Brown', '2024-12-12', 'Low'],
                [true, 'Deploy to staging', 'John Doe', '2024-12-08', 'High'],
            ]"
            :withCheckbox="true"
            aria-label="Task list with selection"
        />

        @slot('code')
            @include('pages.components.data-table._codes.checkbox')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Important:</strong> When <code>withCheckbox</code> is enabled, the first element in each data row array controls the checkbox state and is not displayed as a table cell. The header checkbox allows selecting all rows at once.
    </x-mbc::typography>
</section>
