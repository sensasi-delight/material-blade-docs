<section>
    <x-h2>Card Primary Action</x-h2>

    <x-mbc::typography>
        Use <code>mbc::card-primary-action</code> to make specific areas of the card clickable. This creates an interactive region with ripple effects and proper accessibility attributes.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-wrap: wrap; gap: 1.5rem;">
            <x-mbc::card style="width: 350px;">
                <x-mbc::card-primary-action>
                    <x-mbc::card-header title="Clickable Card" subtitle="Click anywhere on this area" />
                    <x-mbc::card-content>
                        The entire header and content area is clickable and shows a ripple effect when interacted with.
                    </x-mbc::card-content>
                </x-mbc::card-primary-action>

                <x-mbc::card-actions>
                    @slot('buttons')
                        <x-mbc::button variant="text" label="Action" />
                    @endslot
                </x-mbc::card-actions>
            </x-mbc::card>

            <x-mbc::card style="width: 350px;">
                <x-mbc::card-primary-action>
                    <x-mbc::card-media 
                        src="https://picsum.photos/seed/card1/400/200" 
                        variant="wide" 
                    />
                    <x-mbc::card-header 
                        title="Media Card" 
                        subtitle="With clickable area" 
                    />
                    <x-mbc::card-content>
                        Click on the image or content to navigate.
                    </x-mbc::card-content>
                </x-mbc::card-primary-action>

                <x-mbc::card-actions>
                    @slot('iconButtons')
                        <x-mbc::icon-button icon="favorite_border" title="Like" />
                        <x-mbc::icon-button icon="share" title="Share" />
                    @endslot
                </x-mbc::card-actions>
            </x-mbc::card>

            <x-mbc::card variant="outlined" style="width: 350px;">
                <x-mbc::card-primary-action>
                    <x-mbc::card-header 
                        title="Product Card" 
                        subtitle="$29.99" 
                    />
                    <x-mbc::card-media 
                        src="https://picsum.photos/seed/card2/400/200" 
                        variant="wide" 
                    />
                    <x-mbc::card-content>
                        Click to view product details and add to cart.
                    </x-mbc::card-content>
                </x-mbc::card-primary-action>
            </x-mbc::card>
        </div>

        @slot('code')
            @include('pages.components.card._codes.primary-action')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Use Case:</strong> Use primary action for cards that navigate to detail pages, like article previews, product listings, or gallery items. Actions outside the primary action area (like icon buttons) remain independently clickable.
    </x-mbc::typography>

    <x-mbc::typography variant="body2" style="margin-top: 0.5rem; color: #666;">
        <strong>Accessibility:</strong> The primary action area is keyboard-accessible (tabindex="0") and shows visual feedback through the ripple effect.
    </x-mbc::typography>
</section>
