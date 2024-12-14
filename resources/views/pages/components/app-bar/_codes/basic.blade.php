&lt;x-mbc::app-bar>
&commat;slot('start')
&lt;x-mbc::IconButton
icon="menu"
color="inherit"
aria-label="Open navigation menu"
/>

&lt;span class="mdc-top-app-bar__title">Page title&lt;/span>
&commat;endslot

&commat;slot('end')
&lt;x-mbc::icon-button
icon="favorite"
color="inherit"
aria-label="Favorite"
/>
&lt;x-mbc::icon-button
icon="search"
color="inherit"
aria-label="Search"
/>
&lt;x-mbc::icon-button
icon="more_vert"
color="inherit"
aria-label="Options"
/>
&commat;endslot
&lt;/x-mbc::app-bar>
