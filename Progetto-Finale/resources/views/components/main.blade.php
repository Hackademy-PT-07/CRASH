<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? ''}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="backgroundMain img-fluid  ">
    
    <div class="sticky-top">

    </div>
    <div>
        <div>
            {{ $slot }}
        </div>
    </div>

    @livewireScripts



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>