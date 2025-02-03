@extends('web.layouts.default')

@section('main_content')
    {{-- Banner Slider Section Start --}}
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slide)
                    <div class="swiper-slide">
                        <img src="{{ $slide->image }}" alt="{{ $slide->title }}" loading="lazy"
                            class="aspect-video object-cover w-full">
                    </div>
                @endforeach
            </div>
            <button class="swiper-button-next !block bg-orange-500/80 !text-white !h-auto py-2 !w-16 aspect-square"></button>
            <button class="swiper-button-prev !block bg-orange-500/80 !text-white !h-auto py-2 !w-16 aspect-square"></button>
            <div class="swiper-pagination !block"></div>
        </div>
    </section>
    {{-- Banner Slider Section End --}}

    {{-- New Release Section Start --}}
    <section class="py-16">
        <div class="container">
            <h3 class="text-3xl text-orange-500 font-bold ps-5 border-s-4 border-s-orange-500 mb-5">New Release</h3>
            <div class="swiper carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rounded-3xl overflow-hidden relative">
                            <div class="absolute top-3 left-3 bg-orange-500/80 text-white rounded-2xl px-4 py-1">
                                Tv Serial
                            </div>
                            <img src="https://www.ultraindia.com/wp-content/uploads/2023/07/hara-sindur-2022.jpg"
                                alt="Slide 1" loading="lazy" class="aspect-[2/3] object-cover w-full">
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden relative">
                            <div class="absolute top-3 left-3 bg-orange-500/80 text-white rounded-2xl px-4 py-1">
                                Tv Serial
                            </div>
                            <img src="https://www.ultraindia.com/wp-content/uploads/2023/07/parshuram-season-1.jpg"
                                alt="Slide 2" loading="lazy" class="aspect-[2/3] object-cover w-full">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-3xl overflow-hidden relative">
                            <div class="absolute top-3 left-3 bg-orange-500/80 text-white rounded-2xl px-4 py-1">
                                Tv Serial
                            </div>
                            <img src="https://www.ultraindia.com/wp-content/uploads/2023/07/hara-sindur-2022.jpg"
                                alt="Slide 1" loading="lazy" class="aspect-[2/3] object-cover w-full">
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden relative">
                            <div class="absolute top-3 left-3 bg-orange-500/80 text-white rounded-2xl px-4 py-1">
                                Tv Serial
                            </div>
                            <img src="https://www.ultraindia.com/wp-content/uploads/2023/07/parshuram-season-2.jpg"
                                alt="Slide 1" loading="lazy" class="aspect-[2/3] object-cover w-full">
                        </div>
                    </div>

                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden relative">
                            <div class="absolute top-3 left-3 bg-orange-500/80 text-white rounded-2xl px-4 py-1">
                                Tv Serial
                            </div>
                            <img src="https://www.ultraindia.com/wp-content/uploads/2023/07/hara-sindur-2022.jpg"
                                alt="Slide 1" loading="lazy" class="aspect-[2/3] object-cover w-full">
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden relative">
                            <div class="absolute top-3 left-3 bg-orange-500/80 text-white rounded-2xl px-4 py-1">
                                Tv Serial
                            </div>
                            <img src="https://www.ultraindia.com/wp-content/uploads/2023/07/parshuram-season-1.jpg"
                                alt="Slide 2" loading="lazy" class="aspect-[2/3] object-cover w-full">
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden relative">
                            <div class="absolute top-3 left-3 bg-orange-500/80 text-white rounded-2xl px-4 py-1">
                                Tv Serial
                            </div>
                            <img src="https://www.ultraindia.com/wp-content/uploads/2023/07/hara-sindur-2022.jpg"
                                alt="Slide 1" loading="lazy" class="aspect-[2/3] object-cover w-full">
                        </div>
                    </div>
                    <div class="swiper-slide">

                        <div class="rounded-3xl overflow-hidden relative">
                            <div class="absolute top-3 left-3 bg-orange-500/80 text-white rounded-2xl px-4 py-1">
                                Tv Serial
                            </div>
                            <img src="https://www.ultraindia.com/wp-content/uploads/2023/07/parshuram-season-2.jpg"
                                alt="Slide 1" loading="lazy" class="aspect-[2/3] object-cover w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- New Release Section End --}}

    {{-- About Section Start --}}
    <section class="text-gray-50"
        style="background-image: url({{ asset('images/movie-bg.jpg') }}); background-size: cover; background-attachment: fixed;">
        <div class="overlay py-16   bg-gray-700/80">
            <div class="container">
                <div class="grid grid-cols-3 gap-10 items-center">
                    <div class="aspect-square bg-white flex justify-center items-center col-span-1 p-10 rounded-lg">
                        <img src="{{ asset('images/logo-full.png') }}" alt="" class="inline">
                    </div>
                    <div class="col-span-2">
                        <h3 class="text-3xl text-white font-bold ps-5 border-s-4 border-s-white mb-5">About <span
                                class="text-orange-500">{{ env('APP_NAME') }}</span>
                        </h3>
                        <p class="font-bold mb-5">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam minima alias quisquam quod
                            assumenda,
                            harum corporis? Illum, sapiente qui rerum illo quasi fugiat! Fuga quaerat, ad tenetur alias
                            possimus
                            distinctio?
                        </p>
                        <p class="mb-5">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore nulla eum iure. Officiis cumque
                            delectus voluptas ex aspernatur, quia ut fugiat necessitatibus odio labore aperiam distinctio at
                            magni neque non laudantium, sunt accusantium, deleniti inventore obcaecati iure dolore. Ea,
                            perspiciatis. Possimus minima fugiat placeat. Eum, quas mollitia adipisci temporibus sequi
                            incidunt
                            atque totam sapiente praesentium quam minus exercitationem, nam natus hic magni? Ducimus nisi
                            officiis fugiat iusto quia exercitationem non laborum itaque sed, autem error pariatur porro
                            voluptates. Ipsam laboriosam maiores illum eos repellendus quisquam qui perferendis tenetur cum
                            distinctio, eligendi labore dolorem sapiente deserunt voluptate consequatur quasi, eaque ducimus
                            libero, quos fugiat. Expedita ullam vel dolorum alias eius dicta iure, minus consequatur sint?
                            Perspiciatis cupiditate dolore non illum alias facere laboriosam officiis voluptatem aut debitis
                            harum magni deserunt ut, perferendis suscipit, quas corporis doloribus consectetur rem quibusdam
                            fugiat vel illo rerum temporibus? Quos blanditiis neque, vero consequuntur illo accusantium!
                        </p>
                        <a href="" class="default-btn">Read More &raquo;</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- About Section End --}}

    {{-- Video Section Start --}}
    <section class="py-16">
        <div class="container">
            <h3 class="text-3xl text-orange-500 font-bold ps-5 border-s-4 border-s-orange-500 mb-5">Work Shots</h3>
            <p class="mb-20">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore ad repellendus perspiciatis
                nostrum
                nesciunt cupiditate minima cumque veniam dolorum vel repudiandae laudantium exercitationem ab earum, ipsam
                ipsa. Quam, fugiat asperiores.</p>
        </div>

        <div class="swiper video-carousel">
            <div class="swiper-wrapper">
                @foreach ($videos as $video)
                    <div class="swiper-slide">
                        <x-video-lightbox :videoID="$video" />
                    </div>
                @endforeach
            </div>
            <button
                class="swiper-button-next !block bg-orange-500/80 !text-white !h-auto py-2 !w-16 aspect-square"></button>
            <button
                class="swiper-button-prev !block bg-orange-500/80 !text-white !h-auto py-2 !w-16 aspect-square"></button>
        </div>
    </section>
    {{-- Video Section End --}}

    {{-- Numbers Section Start --}}
    <section class="py-16 grid grid-cols-4 text-white text-center">
        <div class="aspect-square flex flex-col justify-center bg-purple-600">
            <div class="text-8xl font-bold">5+</div>
            <div class="text-3xl">TV Shows</div>
        </div>
        <div class="aspect-square flex flex-col justify-center bg-green-600">
            <div class="text-8xl font-bold">500+</div>
            <div class="text-3xl">Episodes</div>
        </div>
        <div class="aspect-square flex flex-col justify-center bg-yellow-600">
            <div class="text-8xl font-bold">4.8</div>
            <div class="text-3xl">Avg. IMDB Rating</div>
        </div>
        <div class="aspect-square flex flex-col justify-center bg-blue-600">
            <div class="text-8xl font-bold">8.9</div>
            <div class="text-3xl">Avg. TRP</div>
        </div>
    </section>
    {{-- Numbers Section End --}}

    {{-- News & Media Section Start --}}
    <section class="py-16">
        <div class="container">
            <h3 class="text-3xl font-bold ps-3 border-s-4 text-orange-500 border-s-orange-500 mb-10">News &amp; Media</h3>
            <div class="swiper blog-carousel">
                <div class="swiper-wrapper">
                    @foreach ($blogs as $blog)
                        <div class="swiper-slide">
                            <div class="bg-white rounded-3xl overflow-hidden border">
                                <div class="relative">
                                    <img src="{{ $blog['image'] }}" alt=""
                                        class="w-full aspect-[4/3] object-cover">
                                    <div
                                        class="absolute size-16 flex flex-col justify-center items-center aspect-square bg-orange-500 text-white -bottom-5 left-5">
                                        <div class="text-4xl font-bold">
                                            {{ date('d', strtotime($blog['date'])) }}
                                        </div>
                                        <div class="text-xs">{{ date('M y', strtotime($blog['date'])) }}</div>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <a href="#"
                                        class="block text-xl font-bold overflow-hidden text-nowrap text-ellipsis text-orange-500">
                                        {{ $blog['title'] }}</a>
                                    <p class="mb-5">{{ $blog['description'] }}</p>
                                    <a href=""
                                        class="default-btn text-orange-500 border-orange-500 hover:text-white font-bold">More
                                        Details
                                        &raquo;</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button
                    class="swiper-button-next !block bg-orange-500/80 !text-white !h-auto py-2 !w-16 aspect-square"></button>
                <button
                    class="swiper-button-prev !block bg-orange-500/80 !text-white !h-auto py-2 !w-16 aspect-square"></button>
            </div>
        </div>
    </section>
    {{-- News & Media Section End --}}

    <!-- Lightbox -->
    <x-video-lightbox-popup />
@endsection
