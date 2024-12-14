<x-mbc::drawer style="position: fixed; top:0; left: 0; height: 100vh; overflow-y: auto;" subtitle="Documentation">
    @slot('title')
        <a href="{{ route('index') }}" style="color: inherit; text-decoration: none;">Material Blade</a>
    @endslot

    <x-mbc::list element="nav" dense>

        @foreach (collect(App\Enums\DocRoute::cases())->map(function ($routeEnum) {
            return $routeEnum->value;
        })->groupBy(function ($route) {
            return explode('.', $route)[0];
        }) as $section => $routes)
            @if ($routes->count() > 1)
                <x-mbc::typography class="mbc-px-2 mbc-mt-2 mbc-mb-1"
                    style="text-transform: uppercase; font-weight: bold;" variant="caption" htmlTag="div">
                    {{ ucfirst($section) }}
                </x-mbc::typography>
            @endif

            @foreach ($routes as $route)
                <x-mbc::list-item href="{{ route($route) }}" htmlTag="a" :activated="request()->route()->named($route)"
                    style="height: 32px; margin-bottom: 0; margin-top: 0;">
                    {{ ucfirst(str_replace('-', ' ', str_replace("{$section}.", '', $route))) }}
                </x-mbc::list-item>
            @endforeach
        @endforeach
    </x-mbc::list>
</x-mbc::drawer>
