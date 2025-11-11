&lt;x-mbc::app-bar color="secondary">
    &commat;slot('start')
        &lt;x-mbc::icon-button icon="menu" color="inherit" aria-label="Open navigation menu" />
    &commat;endslot

    &commat;slot('title')
        &lt;div style="display: flex; align-items: center; gap: 8px;">
            &lt;x-mbc::icon name="star" />
            Starred Items
        &lt;/div>
    &commat;endslot

    &commat;slot('end')
        &lt;x-mbc::icon-button icon="search" color="inherit" aria-label="Search" />
        &lt;x-mbc::icon-button icon="filter_list" color="inherit" aria-label="Filter" />
        &lt;x-mbc::icon-button icon="more_vert" color="inherit" aria-label="Options" />
    &commat;endslot
&lt;/x-mbc::app-bar>
