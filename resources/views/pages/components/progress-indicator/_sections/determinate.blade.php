<section>
    <x-h2>Determinate Progress</x-h2>

    <x-mbc::typography>
        Determinate indicators show how long an operation will take. Use them when the progress percentage is known. Set the <code>value</code> prop to a number between 0 and 1.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; width: 100%;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>File Upload Progress</x-mbc::typography>
                <x-mbc::linear-progress :value="0.65" aria-label="Upload 65 percent complete" />
                <x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">65% uploaded (13 MB of 20 MB)</x-mbc::typography>
            </div>

            <div style="display: flex; gap: 2rem; align-items: center;">
                <div style="flex: 1;">
                    <x-mbc::typography variant="subtitle2" gutterBottom>Processing Task</x-mbc::typography>
                    <x-mbc::linear-progress :value="0.33" aria-label="Task 33 percent complete" />
                    <x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">Step 1 of 3</x-mbc::typography>
                </div>

                <div style="text-align: center;">
                    <x-mbc::circular-progress :value="0.33" aria-label="Processing 33 percent" />
                    <x-mbc::typography variant="caption" style="display: block; margin-top: 8px;">33%</x-mbc::typography>
                </div>
            </div>
        </div>

        @slot('code')
            @include('pages.components.progress-indicator._codes.determinate')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> File uploads, form submissions, multi-step processes, downloads, data processing with known duration.
    </x-mbc::typography>
</section>
