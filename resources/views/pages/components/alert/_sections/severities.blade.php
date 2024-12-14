<section>
    <x-h2>Severities</x-h2>

    <x-mbc::typography>
        The Alert component has four severities: <code>success</code>, <code>info</code>, <code>warning</code>, and
        <code>error</code>.
    </x-mbc::typography>

    <x-component-preview>
        <div style="display: flex; gap: 0.5rem; flex-direction: column;">
            <x-mbc::alert severity="success">This is a success Alert.</x-mbc::alert>
            <x-mbc::alert severity="info">This is an info Alert.</x-mbc::alert>
            <x-mbc::alert severity="warning">This is a warning Alert.</x-mbc::alert>
            <x-mbc::alert severity="error">This is an error Alert.</x-mbc::alert>
        </div>

        @slot('code')
            @include('pages.components.alert._codes.severities')
        @endslot

        @slot('codeSummary')
            @include('pages.components.alert._codes.severities-summary')
        @endslot
    </x-component-preview>
</section>
