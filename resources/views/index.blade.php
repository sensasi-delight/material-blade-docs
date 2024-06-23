@php
$packageInfo = json_decode(File::get(base_path('vendor/sensasi-delight/material-blade/composer.json')));
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Blade &mdash; {{ $packageInfo->description }}</title>

    <x-mbc::_assets />

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #F6F6FF;
        }
    </style>
</head>

<body>
    <main>
        <x-mbc::grid container>
            <x-mbc::grid colSize="6" align="middle" padding="2" @style([ 'display: flex' , 'flex-direction: column' , 'gap: 16px' ])>
                <x-mbc::typography variant="h2" element="h1">
                    Material Blade
                </x-mbc::typography>

                <x-mbc::typography gutterBottom>
                    {{$packageInfo->description}}
                </x-mbc::typography>

                <div>
                    <x-mbc::button label="Get Started" variant="raised" href="installation" />
                </div>
            </x-mbc::grid>

            <x-mbc::grid colSize="6" style="background-color: #EAEAEA; overflow:hidden; padding-right: 0; height: 100vh" padding="2">
                <x-mbc::grid container @style(['width: 800px'])>
                    <x-mbc::grid colSize="6" @style([ 'display: flex' , 'flex-direction: column' , 'gap: 16px' ])>
                        <x-mbc::Card>
                            <!-- Media -->
                            <x-mbc::CardMedia src="https://material-components.github.io/material-components-web-catalog/static/media/photos/3x2/2.jpg" />

                            <!-- Header -->
                            <x-mbc::CardHeader title="Our Changing Planet" subtitle="by Kurt Wagner" />

                            <!-- Content -->
                            <x-mbc::CardContent>
                                <x-mbc::Typography variant="body2" slot="Visit ten places on our planet that are undergoing the biggest changes today." />
                            </x-mbc::CardContent>

                            <!-- Actions -->
                            <x-mbc::CardActions>

                                <!-- Button Actions -->
                                <x-slot name="buttons">
                                    <x-mbc::Button label="Read" />
                                    <x-mbc::Button label="Bookmark" />
                                </x-slot>

                                <!-- Icon Button Actions -->
                                <x-slot name="iconButtons">
                                    <x-mbc::IconButton toggle icon="favorite" offIcon="favorite_border" color="error" aria-label="Add to favorites" title="Add to favorites" />
                                    <x-mbc::IconButton icon="share" title="Share" />
                                    <x-mbc::IconButton icon="more_vert" title="More options" aria-label="More options" />
                                </x-slot>
                            </x-mbc::CardActions>
                        </x-mbc::Card>

                        <x-mbc::ChipSet>
                            @foreach ($packageInfo->keywords as $keyword)
                            <x-mbc::Chip label="{{ $keyword }}" color="primary" />
                            @endforeach
                        </x-mbc::ChipSet>

                        <div>
                            <x-mbc::button>
                                Text
                            </x-mbc::button>
                            <x-mbc::button label="Raised" variant="raised" />
                            <x-mbc::button label="Unelevated" variant="unelevated" />
                            <x-mbc::button label="Outlined" variant="outlined" />
                        </div>

                    </x-mbc::grid>

                    <x-mbc::grid colSize="6" @style([ 'display: flex' , 'flex-direction: column' , 'gap: 16px' ])>
                        @php
                        $header = ['Signal name', 'Status', 'Severity', 'Stage', 'Time', 'Roles'];
                        $data = [[
                        false, 'Arcus watch slowdown', 'Online', 'Medium', 'Triaged', '0:33', 'Allison Brie'
                        ], [
                        true, 'monarch: prod shared ares-managed-features-provider-heavy', 'Offline', 'Huge', 'Triaged', '0:33', 'Brie Larson'
                        ], [
                        true, 'monarch: prod shared ares-managed-features-provider-heavy', 'Online', 'Minor', 'Not triaged', '0:33', 'Jeremy Lake'
                        ], [
                        false, 'Arcus watch slowdown', 'Online', 'Negligible', 'Triaged', '0:33', 'Angelina Cheng'
                        ]];
                        @endphp

                        <x-MaterialBlade::DataTable :header="$header" :data="$data" withCheckbox />

                        @php
                        $tabs = ['Tabs one', 'Tabs two', 'Tabs three', 'Tabs four', 'Tabs five', 'Tabs six', 'Tabs seven', 'Tabs eight', 'Tabs nine', 'Tabs ten', 'Tabs eleven', 'Tabs twelve'];
                        @endphp

                        <x-mbc::TabBar :tabs="$tabs" color="primary" lightText elevation="3" />

                        <div>
                            <x-mbc::IconButton toggle icon="home" />
                            <x-mbc::IconButton toggle icon="bluetooth" color="primary" />
                            <x-mbc::IconButton toggle="on" icon="filter_vintage" color="secondary" />
                            <x-mbc::IconButton toggle="on" icon="delete" color="error" />
                            <x-mbc::IconButton toggle icon="paid" color="warning" />
                            <x-mbc::IconButton toggle icon="power_settings_new" color="info" />
                            <x-mbc::IconButton toggle icon="check_circle" color="success" />
                        </div>

                        <x-mbc::Card>
                            <div style="display:flex; flex-direction: row; border-bottom-left-radius: inherit; border-top-left-radius: inherit;">
                                <x-mbc::CardMedia variant="square" style="width: 110px; border-radius: inherit;" src="https://upload.wikimedia.org/wikipedia/en/9/9f/Bohemian_Rhapsody.png">
                                </x-mbc::CardMedia>

                                <div>
                                    <x-mbc::CardHeader title="Bohemian Raphsody" subtitle="by Queen" />

                                    <x-mbc::CardActions>
                                        <x-slot name="iconButtons">
                                            <x-mbc::IconButton icon="skip_previous" title="Previous" />
                                            <x-mbc::IconButton icon="play_arrow" title="play" style="font-size: 3em;" />
                                            <x-mbc::IconButton icon="skip_next" title="Next" />
                                        </x-slot>
                                    </x-mbc::CardActions>
                                </div>
                            </div>
                        </x-mbc::Card>

                    </x-mbc::grid>
                </x-mbc::grid>
            </x-mbc::grid>
        </x-mbc::grid>
    </main>
</body>

</html>