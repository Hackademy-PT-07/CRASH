<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? ''}}</title>    
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

    </head>
    <body>
        <div class="sticky-top">
            <x-navbar/>
        </div>

        <div>
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>