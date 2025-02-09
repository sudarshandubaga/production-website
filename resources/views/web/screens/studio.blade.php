@extends('web.layouts.page')

@section('page_content')
    @foreach ($studioCategories as $studioCategory)
        <section class="py-16 bg-white">
            <div class="container">
                <h3 class="text-3xl text-orange-500 font-bold ps-5 border-s-4 border-s-orange-500 mb-5">
                    {{ $studioCategory->name }}</h3>
                <div class="grid lg:grid-cols-4 grid-cols-2 gap-5">
                    @foreach ($studioCategory->studios as $stage)
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
    @endforeach
@endsection
