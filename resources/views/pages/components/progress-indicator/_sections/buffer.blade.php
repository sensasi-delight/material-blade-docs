<section>
    <x-h2>Progress with Buffer</x-h2>

    <x-mbc::typography>
        Linear progress can display a buffer indicator showing the amount of content loaded ahead. Use the <code>bufferValue</code> prop in addition to <code>value</code> for buffering scenarios.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 2rem; width: 100%;">
            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Video Buffering</x-mbc::typography>
                <x-mbc::linear-progress :value="0.4" :bufferValue="0.7" aria-label="Video playing at 40%, buffered to 70%" />
                <x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">Playing: 40% | Buffered: 70%</x-mbc::typography>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Audio Streaming</x-mbc::typography>
                <x-mbc::linear-progress :value="0.25" :bufferValue="0.85" aria-label="Audio at 25%, buffered to 85%" />
                <x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">Playback: 25% | Buffer: 85%</x-mbc::typography>
            </div>

            <div>
                <x-mbc::typography variant="subtitle2" gutterBottom>Data Loading</x-mbc::typography>
                <x-mbc::linear-progress :value="0.6" :bufferValue="0.9" aria-label="Data loaded 60%, buffered 90%" />
                <x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">Loaded: 60% | Prefetched: 90%</x-mbc::typography>
            </div>
        </div>

        @slot('code')
            @include('pages.components.progress-indicator._codes.buffer')
        @endslot>
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Video/audio players, streaming applications, progressive loading, content prefetching.
    </x-mbc::typography>
</section>
