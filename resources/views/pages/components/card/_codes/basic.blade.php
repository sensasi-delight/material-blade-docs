{{-- Simple card with plain content --}}
&lt;x-mbc::card style="width: 300px; padding: 16px;">
    &lt;x-mbc::typography variant="h6">Simple Card&lt;/x-mbc::typography>
    &lt;x-mbc::typography variant="body2">
        This is a simple card with plain content.
    &lt;/x-mbc::typography>
&lt;/x-mbc::card>

{{-- Card with header and content components --}}
&lt;x-mbc::card style="width: 300px;">
    &lt;x-mbc::card-header title="Card with Header" subtitle="With subtitle" />
    &lt;x-mbc::card-content>
        This card uses the card-header and card-content components.
    &lt;/x-mbc::card-content>
&lt;/x-mbc::card>
