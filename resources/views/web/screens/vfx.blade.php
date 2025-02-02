@extends('web.layouts.page')

@section('page_content')
    <section class="py-16 bg-white">
        <div class="container">
            <div class="grid grid-cols-2 gap-16">
                @foreach ($records as $record)
                    <div>
                        <h5 class="font-bold text-2xl mb-5">{{ $record['title'] }}</h5>
                        <div class="relative aspect-[4/3]">
                            <div class="absolute w-3/4">
                                <div class="overflow-hidden">
                                    <img src="{{ $record['before_image'] }}" alt=""
                                        class="w-full transition-all hover:scale-150">
                                </div>
                                <div
                                    class="bg-orange-500 text-white px-5 py-2 max-w-fit ms-auto absolute -bottom-5 start-1">
                                    Before
                                </div>
                            </div>
                            <div class="absolute bottom-0 end-0 w-3/4">
                                <div class="overflow-hidden">
                                    <img src="{{ $record['after_image'] }}" alt=""
                                        class="w-full transition-all hover:scale-150">
                                </div>
                                <div class="bg-orange-500 text-white px-5 py-2 max-w-fit ms-auto absolute -top-5 end-1">
                                    After
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
