<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50 bg-orange-50">
    <header class="fixed top-2 left-0 right-0 z-10 text-white">
        <div class="container">
            <div class="bg-orange-400 rounded overflow-hidden">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="block bg-orange-200 px-5 py-2">
                        <img src="{{ asset('images/logo.png') }}" alt="{{ env('APP_NAME') }} Logo"
                            title="{{ env('APP_NAME') }} Logo" class="h-20">
                    </a>

                    <x-menu menuLocation="Header" :params="[
                        'class' => 'ms-auto flex gap-5 px-5 text-lg [&>li:hover]:text-yellow-800 font-bold',
                    ]" />
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('main_content')
    </main>

    <footer class="py-16 text-sm bg-gray-900 text-gray-200">
        <div class="container">
            <div class="grid grid-cols-7 gap-5">
                <div class="col-span-3">
                    <h3 class="text-3xl font-bold text-white mb-5">{{ env('APP_NAME') }}</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quibusdam eum quaerat incidunt,
                        molestias illum ducimus soluta corporis debitis odit aspernatur placeat rem dolor minus ullam
                        accusamus voluptates sit sapiente?</p>

                    <div class="mt-10 flex gap-5 text-3xl [&>a:hover]:text-orange-500">
                        <a href="">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="col-span-1">
                    <h3 class="text-3xl font-bold text-white mb-5">Quick Links</h3>

                    <x-menu menuLocation="Footer 1" :params="[
                        'class' => 'space-y-3',
                        'beforeIcon' => '<i class=\'bi bi-circle-fill scale-50\'></i>',
                        'linkClass' => 'flex items-center gap-2',
                    ]" />
                </div>
                <div class="col-span-1">
                    <h3 class="text-3xl font-bold text-white mb-5">Support</h3>
                    <x-menu menuLocation="Footer 2" :params="[
                        'class' => 'space-y-3',
                        'beforeIcon' => '<i class=\'bi bi-circle-fill scale-50\'></i>',
                        'linkClass' => 'flex items-center gap-2',
                    ]" />
                </div>
                <div class="col-span-2">
                    <h3 class="text-3xl font-bold text-white mb-5">Get In Touch</h3>
                    <div class="space-y-3 text-lg">
                        <div class="flex gap-3">
                            <i class="bi bi-phone"></i>
                            <a>+91 9012345678</a>
                        </div>
                        <div class="flex gap-3">
                            <i class="bi bi-envelope"></i>
                            <a>info@floatingflowerfilms.com</a>
                        </div>
                        <div class="flex gap-3">
                            <i class="bi bi-geo-alt"></i>
                            <a>{{ env('APP_NAME') }},<br /> 166, S.V. Road, Near Andheri Subway, Andheri West, Mumbai -
                                400058,
                                Maharashtra.</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 flex justify-between">
                <div>
                    &copy; {{ date('Y') }} . All rights are reserved by <a href="{{ route('home') }}"
                        class="font-bold">{{ env('APP_NAME') }}</a>
                </div>
                <div>
                    Managed By: <a href="https://thexpertcoders.com" class="font-bold" target="_blank"
                        title="Website Design, Website Development & Mobile App Development">XPERT CODERS PVT
                        LTD</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite('resources/js/app.js')
</body>

</html>
