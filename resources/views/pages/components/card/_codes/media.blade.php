{{-- Card with wide media (default) --}}
&lt;x-mbc::card style="width: 300px;">
    &lt;x-mbc::card-media src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" />
    &lt;x-mbc::card-header title="Wide Media" subtitle="16:9 aspect ratio" />
    &lt;x-mbc::card-content>
        This card has a wide media image.
    &lt;/x-mbc::card-content>
&lt;/x-mbc::card>

{{-- Card with square media --}}
&lt;x-mbc::card style="width: 300px;">
    &lt;x-mbc::card-media variant="square" src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" />
    &lt;x-mbc::card-header title="Square Media" subtitle="1:1 aspect ratio" />
    &lt;x-mbc::card-content>
        This card has a square media image.
    &lt;/x-mbc::card-content>
&lt;/x-mbc::card>
