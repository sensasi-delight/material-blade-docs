&lt;div style="display: flex; flex-direction: column; gap: 1.5rem;">
    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Filter by Category:&lt;/x-mbc::typography>
        &lt;x-mbc::chip-set variant="filter">
            &lt;x-mbc::chip label="All" :selected="true" />
            &lt;x-mbc::chip label="Photos" icon="photo" />
            &lt;x-mbc::chip label="Videos" icon="videocam" />
            &lt;x-mbc::chip label="Documents" icon="description" />
            &lt;x-mbc::chip label="Music" icon="music_note" />
        &lt;/x-mbc::chip-set>
    &lt;/div>

    &lt;div>
        &lt;x-mbc::typography variant="subtitle2" gutterBottom>Filter by Status:&lt;/x-mbc::typography>
        &lt;x-mbc::chip-set variant="filter">
            &lt;x-mbc::chip label="Active" :selected="true" />
            &lt;x-mbc::chip label="Pending" :selected="true" />
            &lt;x-mbc::chip label="Completed" />
            &lt;x-mbc::chip label="Archived" />
        &lt;/x-mbc::chip-set>
    &lt;/div>
&lt;/div>