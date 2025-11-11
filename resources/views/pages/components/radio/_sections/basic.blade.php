<section>
    <x-h2>Basic Radio Buttons</x-h2>

    <x-mbc::typography>
        Radio buttons are used when you have a list of options and the user should select exactly one. All radio buttons with the same <code>name</code> attribute form a group where only one can be selected.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 2rem;">
            <x-mbc::radio id="radio-basic-1" name="basic-group" value="1" checked />
            <x-mbc::radio id="radio-basic-2" name="basic-group" value="2" />
            <x-mbc::radio id="radio-basic-3" name="basic-group" value="3" />
            <x-mbc::radio id="radio-basic-4" name="basic-group" value="4" />
        </div>

        @slot('code')
            @include('pages.components.radio._codes.basic')
        @endslot
    </x-component-preview>

    <x-mbc::typography variant="body2" style="margin-top: 1rem; color: #666;">
        <strong>Important:</strong> The <code>name</code> attribute groups radio buttons together. Only one radio in a group can be selected at a time. The <code>id</code> must be unique for each radio button.
    </x-mbc::typography>
</section>
