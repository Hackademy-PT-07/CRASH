<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? ''}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>


    <div class="main-layout-container ">
        <div>
            <div>
                {{ $slot }}
            </div>
        </div>

        @livewireScripts



    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @if(!request()->routeIs('login','register','categoryShow'))

    <x-footer />
    @endif
</body>

</html>