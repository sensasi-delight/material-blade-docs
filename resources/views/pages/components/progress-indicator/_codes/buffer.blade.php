&lt;div style="display: flex; flex-direction: column; gap: 2rem; width: 100%;">
    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Video Buffering&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress :value="0.4" :bufferValue="0.7" aria-label="Video playing at 40%, buffered to 70%" />
        &lt;x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">Playing: 40% | Buffered: 70%&lt;/x-mbc::typography>
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Audio Streaming&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress :value="0.25" :bufferValue="0.85" aria-label="Audio at 25%, buffered to 85%" />
        &lt;x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">Playback: 25% | Buffer: 85%&lt;/x-mbc::typography>
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Data Loading&lt;/x-mbc::typography>
        &lt;x-mbc::linear-progress :value="0.6" :bufferValue="0.9" aria-label="Data loaded 60%, buffered 90%" />
        &lt;x-mbc::typography variant="caption" style="color: #666; margin-top: 4px;">Loaded: 60% | Prefetched: 90%&lt;/x-mbc::typography>
    &lt;/div>
&lt;/div>