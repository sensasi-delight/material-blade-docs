<section>
    <x-h2>Complete Example</x-h2>

    <x-mbc::typography>
        Here's a complete example combining all card features: media, header, content, and actions.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::card style="width: 350px;">
            <x-mbc::card-media src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" />
            
            <x-mbc::card-header title="Our Changing Planet" subtitle="by Kurt Wagner" />
            
            <x-mbc::card-content>
                <x-mbc::typography variant="body2">
                    Visit ten places on our planet that are undergoing the biggest changes today. Explore the beauty and challenges of our evolving world.
                </x-mbc::typography>
            </x-mbc::card-content>
            
            <x-mbc::card-actions>
                @slot('buttons')
                    <x-mbc::button variant="text" label="Read" />
                    <x-mbc::button variant="text" label="Bookmark" />
                @endslot

                @slot('iconButtons')
                    <x-mbc::icon-button 
                        toggle 
                        icon="favorite" 
                        offIcon="favorite_border" 
                        color="error" 
                        title="Add to favorites" 
                    />
                    <x-mbc::icon-button icon="share" title="Share" />
                    <x-mbc::icon-button icon="more_vert" title="More options" />
                @endslot
            </x-mbc::card-actions>
        </x-mbc::card>

        @slot('code')
            @include('pages.components.card._codes.complete')
        @endslot
    </x-component-preview>
</section>
