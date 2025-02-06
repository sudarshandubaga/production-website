<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $page->seo_title ?: $site->title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <meta name="keywords" content="{{ $page->seo_keywords }}">
    <meta name="description" content="{{ $page->seo_description }}">
    <meta name="author" content="{{ $site->title }}">
    <meta name="robots" content="index, follow">

    <!-- Open Graph for Social Media -->
    <meta property="og:title" content="{{ $page->seo_title ?: $site->title }}">
    <meta property="og:description" content="{{ $page->seo_description }}">
    <meta property="og:image" content="{{ $page->image }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card for Better Twitter Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $page->seo_title ?: $site->title }}">
    <meta name="twitter:description" content="{{ $page->seo_description }}">
    <meta name="twitter:image" content="{{ $page->image }}">

    <!-- Canonical URL to Avoid Duplicate Content Issues -->
    <link rel="canonical" href="{{ request()->url() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ $site->favicon }}" type="image/x-icon">


    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50 bg-orange-50">
    <header class="header">
        <div class="container">
            <div class="bg-orange-400 lg:rounded overflow-hidden">
                <div class="flex flex-col lg:flex-row lg:items-center">
                    <div class="flex items-center justify-between bg-orange-200 px-5 py-2">
                        <a href="{{ route('home') }}">
                            <img src="{{ $site->logo }}" alt="{{ $site->title }} Logo"
                                title="{{ $site->title }} Logo" class="h-20">
                        </a>
                        <button type="button"
                            class="bg-orange-500 aspect-square px-1 text-3xl rounded toggle-menu lg:hidden">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>

                    <x-menu menuLocation="Header" :params="[
                        'class' => 'navbar',
                    ]" />
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('main_content')
    </main>

    <footer class="py-16 text-sm bg-gray-900 text-gray-300">
        <div class="container">
            <div class="lg:grid flex flex-col lg:grid-cols-7 gap-5">
                <div class="lg:col-span-3">
                    <h3 class="text-3xl font-bold text-white mb-5">{{ $site->title }}</h3>
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
                <div class="lg:col-span-1">
                    <h3 class="text-3xl font-bold text-white mb-5">Quick Links</h3>

                    <x-menu menuLocation="Footer 1" :params="[
                        'class' => 'space-y-3',
                        'beforeIcon' => '<i class=\'bi bi-circle-fill scale-50\'></i>',
                        'linkClass' => 'flex items-center gap-2',
                    ]" />
                </div>
                <div class="lg:col-span-1">
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
                            <a href="tel:{{ $site->phone }}">{{ $site->phone }}</a>
                        </div>
                        <div class="flex gap-3">
                            <i class="bi bi-envelope"></i>
                            <a href="mailto:{{ $site->email }}">{{ $site->email }}</a>
                        </div>
                        <div class="flex gap-3">
                            <i class="bi bi-geo-alt"></i>
                            <a>
                                <span class="text-white font-bold">{{ $site->title }}</span><br />
                                {!! nl2br($site->address) !!}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 flex flex-col lg:flex-row gap-3 text-center lg:text-start justify-between">
                <div>
                    &copy; {{ date('Y') }} . All rights are reserved by <a href="{{ route('home') }}"
                        class="font-bold">{{ $site->title }}</a>
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
