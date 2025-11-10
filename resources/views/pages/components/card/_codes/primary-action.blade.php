&lt;!-- Simple clickable card --&gt;
&lt;x-mbc::card style="width: 350px;">
    &lt;x-mbc::card-primary-action>
        &lt;x-mbc::card-header title="Clickable Card" subtitle="Click anywhere on this area" />
        &lt;x-mbc::card-content>
            The entire header and content area is clickable and shows a ripple effect when interacted with.
        &lt;/x-mbc::card-content>
    &lt;/x-mbc::card-primary-action>

    &lt;x-mbc::card-actions>
        @slot('buttons')
            &lt;x-mbc::button variant="text" label="Action" />
        @endslot
    &lt;/x-mbc::card-actions>
&lt;/x-mbc::card>

&lt;!-- Clickable card with media --&gt;
&lt;x-mbc::card style="width: 350px;">
    &lt;x-mbc::card-primary-action>
        &lt;x-mbc::card-media 
            src="https://picsum.photos/seed/card1/400/200" 
            variant="wide" 
        />
        &lt;x-mbc::card-header 
            title="Media Card" 
            subtitle="With clickable area" 
        />
        &lt;x-mbc::card-content>
            Click on the image or content to navigate.
        &lt;/x-mbc::card-content>
    &lt;/x-mbc::card-primary-action>

    &lt;x-mbc::card-actions>
        @slot('iconButtons')
            &lt;x-mbc::icon-button icon="favorite_border" title="Like" />
            &lt;x-mbc::icon-button icon="share" title="Share" />
        @endslot
    &lt;/x-mbc::card-actions>
&lt;/x-mbc::card>

&lt;!-- Outlined card with primary action --&gt;
&lt;x-mbc::card variant="outlined" style="width: 350px;">
    &lt;x-mbc::card-primary-action>
        &lt;x-mbc::card-header 
            title="Product Card" 
            subtitle="$29.99" 
        />
        &lt;x-mbc::card-media 
            src="https://picsum.photos/seed/card2/400/200" 
            variant="wide" 
        />
        &lt;x-mbc::card-content>
            Click to view product details and add to cart.
        &lt;/x-mbc::card-content>
    &lt;/x-mbc::card-primary-action>
&lt;/x-mbc::card>