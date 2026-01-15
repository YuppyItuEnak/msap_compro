<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <title>CV MSAP</title>

    {{-- Tailwind CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins'],
                    },
                },
            },
        }
    </script>

</head>

<body class="font-poppins">
    <x-header></x-header>

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <x-footer></x-footer>



    {{-- Tailwind CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>

</html>
