<section>
    <x-h2>Card with Actions</x-h2>

    <x-mbc::typography>
        Cards can include action buttons using the <code>mbc::card-actions</code> component. It supports both regular buttons and icon buttons through named slots.
    </x-mbc::typography>

    <x-component-preview>
        <x-mbc::card style="width: 350px;">
            <x-mbc::card-header title="Actions Example" subtitle="With buttons" />
            <x-mbc::card-content>
                This card demonstrates various action types.
            </x-mbc::card-content>

            <x-mbc::card-actions>
                @slot('buttons')
                    <x-mbc::button variant="text" label="Action 1" />
                    <x-mbc::button variant="text" label="Action 2" />
                @endslot

                @slot('iconButtons')
                    <x-mbc::icon-button icon="favorite_border" title="Like" />
                    <x-mbc::icon-button icon="share" title="Share" />
                    <x-mbc::icon-button icon="more_vert" title="More" />
                @endslot
            </x-mbc::card-actions>
        </x-mbc::card>

        @slot('code')
            @include('pages.components.card._codes.actions')
        @endslot
    </x-component-preview>
</section>
