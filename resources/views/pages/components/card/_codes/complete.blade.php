&lt;x-mbc::card style="width: 350px;">
    {{-- Media --}}
    &lt;x-mbc::card-media 
        src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" 
    />
    
    {{-- Header --}}
    &lt;x-mbc::card-header 
        title="Our Changing Planet" 
        subtitle="by Kurt Wagner" 
    />
    
    {{-- Content --}}
    &lt;x-mbc::card-content>
        &lt;x-mbc::typography variant="body2">
            Visit ten places on our planet that are undergoing the biggest 
            changes today. Explore the beauty and challenges of our evolving world.
        &lt;/x-mbc::typography>
    &lt;/x-mbc::card-content>
    
    {{-- Actions --}}
    &lt;x-mbc::card-actions>
        @slot('buttons')
            &lt;x-mbc::button variant="text" label="Read" />
            &lt;x-mbc::button variant="text" label="Bookmark" />
        @endslot

        @slot('iconButtons')
            &lt;x-mbc::icon-button 
                toggle 
                icon="favorite" 
                offIcon="favorite_border" 
                color="error" 
                title="Add to favorites" 
            />
            &lt;x-mbc::icon-button icon="share" title="Share" />
            &lt;x-mbc::icon-button icon="more_vert" title="More options" />
        @endslot
    &lt;/x-mbc::card-actions>
&lt;/x-mbc::card>
