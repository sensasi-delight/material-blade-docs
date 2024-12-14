<section>
    <x-h2>
        References
    </x-h2>

    <ul>
        @foreach ($links as $link)
            <li>
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer nofollow">
                    <x-mbc::typography class="mbc-m-0" variant="body2">
                        {{ $link }} <x-mbc::icon style="font-size: inherit;" name="open_in_new" />
                    </x-mbc::typography>
                </a>
            </li>
        @endforeach
    </ul>
</section>
