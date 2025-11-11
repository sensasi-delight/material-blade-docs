&lt;x-mbc::card style="width: 350px;">
    &lt;x-mbc::card-header title="Actions Example" subtitle="With buttons" />
    &lt;x-mbc::card-content>
        This card demonstrates various action types.
    &lt;/x-mbc::card-content>

    &lt;x-mbc::card-actions>
        @slot('buttons')
            &lt;x-mbc::button variant="text" label="Action 1" />
            &lt;x-mbc::button variant="text" label="Action 2" />
        @endslot

        @slot('iconButtons')
            &lt;x-mbc::icon-button icon="favorite_border" title="Like" />
            &lt;x-mbc::icon-button icon="share" title="Share" />
            &lt;x-mbc::icon-button icon="more_vert" title="More" />
        @endslot
    &lt;/x-mbc::card-actions>
&lt;/x-mbc::card>
