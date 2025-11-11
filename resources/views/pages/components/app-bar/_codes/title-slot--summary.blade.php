&lt;x-mbc::app-bar>
    &commat;slot('start')
        &lt;x-mbc::icon-button icon="menu" color="inherit" />
    &commat;endslot

    &commat;slot('title')
        &lt;div style="display: flex; align-items: center; gap: 8px;">
            &lt;x-mbc::icon name="star" />
            Custom Title
        &lt;/div>
    &commat;endslot
&lt;/x-mbc::app-bar>
