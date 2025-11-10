&lt;x-mbc::data-table
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