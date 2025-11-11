&lt;x-mbc::app-bar title="Page Title" color="primary">
    &commat;slot('start')
        &lt;x-mbc::icon-button icon="menu" color="inherit" aria-label="Open navigation menu" />
    &commat;endslot

    &commat;slot('end')
        &lt;x-mbc::icon-button icon="search" color="inherit" aria-label="Search" />
        &lt;x-mbc::icon-button icon="more_vert" color="inherit" aria-label="Options" />
    &commat;endslot
&lt;/x-mbc::app-bar>
