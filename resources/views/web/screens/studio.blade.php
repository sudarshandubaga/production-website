@extends('web.layouts.page')

@section('page_content')
    <section class="py-16 bg-white">
        <div class="container">
            <h3 class="text-3xl text-orange-500 font-bold ps-5 border-s-4 border-s-orange-500 mb-5">Stages</h3>
            <div class="grid grid-cols-4 gap-5">
                @foreach ($stages as $stage)
                    <div class="relative [&:hover>img]:scale-125 overflow-hidden rounded-lg">
                        <img src="{{ $stage['image'] }}" alt="{{ $stage['title'] }}" loading="lazy"
                            class="w-full aspect-[4/3] transition-all">
                        <div
                            class="absolute top-0 bottom-0 start-0 end-0 bg-black/30 text-white flex flex-col justify-end py-10 text-center">
                            <h5 class="text-2xl font-bold">{{ $stage['title'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container">


            <h3 class="text-3xl text-orange-500 font-bold ps-5 border-s-4 border-s-orange-500 mb-5">Studio Services</h3>
            <div class="grid grid-cols-4 gap-5">
                @foreach ($stages as $stage)
                    <div class="relative [&:hover>img]:scale-125 overflow-hidden rounded-lg">
                        <img src="{{ $stage['image'] }}" alt="{{ $stage['title'] }}" loading="lazy"
                            class="w-full aspect-[4/3] transition-all">
                        <div
                            class="absolute top-0 bottom-0 start-0 end-0 bg-black/30 text-white flex flex-col justify-end py-10 text-center">
                            <h5 class="text-2xl font-bold">{{ $stage['title'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container">

            <h3 class="text-3xl text-orange-500 font-bold ps-5 border-s-4 border-s-orange-500 mb-5">Filmography</h3>
            <div class="grid grid-cols-4 gap-5">
                @foreach ($stages as $stage)
                    <div class="relative [&:hover>img]:scale-125 overflow-hidden rounded-lg">
                        <img src="{{ $stage['image'] }}" alt="{{ $stage['title'] }}" loading="lazy"
                            class="w-full aspect-[4/3] transition-all">
                        <div
                            class="absolute top-0 bottom-0 start-0 end-0 bg-black/30 text-white flex flex-col justify-end py-10 text-center">
                            <h5 class="text-2xl font-bold">{{ $stage['title'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
