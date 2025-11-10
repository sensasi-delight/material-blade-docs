<section>
    <x-h2>Radio with Labels</x-h2>

    <x-mbc::typography>
        Add descriptive labels using the <code>label</code> prop. Labels make radio buttons more accessible and user-friendly by providing clear context about each option.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <x-mbc::radio 
                id="radio-label-1" 
                name="subscription" 
                value="free" 
                label="Free - Basic features" 
                checked 
            />
            <x-mbc::radio 
                id="radio-label-2" 
                name="subscription" 
                value="pro" 
                label="Pro - $9.99/month" 
            />
            <x-mbc::radio 
                id="radio-label-3" 
                name="subscription" 
                value="enterprise" 
                label="Enterprise - Custom pricing" 
            />
        </div>

        @slot('code')
            @include('pages.components.radio._codes.labels')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Tip:</strong> Labels are automatically associated with their radio buttons using the <code>id</code> attribute, making them clickable to toggle the radio state.
    </x-mbc::typography>
</section>
