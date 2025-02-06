@extends('web.layouts.page')

@section('page_content')
    <section class="py-16 bg-white">
        <div class="container">
            <h3 class="text-3xl text-orange-500 font-bold ps-5 border-s-4 border-s-orange-500 mb-5">Core Members</h3>
            <div>
                @foreach ($members as $member)
                    <div class="grid grid-cols-3 gap-10 mb-10">
                        <div class="col-span-1">
                            <div class="relative p-8">
                                <span class="absolute top-0 end-0 size-12 border-t-2 border-e-2 border-orange-500"></span>
                                <span
                                    class="absolute bottom-0 start-0 size-12 border-b-2 border-s-2 border-orange-500"></span>
                                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}"
                                    class="w-full shadow-lg aspect-square">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <h1 class="text-xl font-bold text-gray-800">{{ $member['name'] }}</h1>
                            <h2 class="text-lg font-semibold text-gray-400">{{ $member['position'] }}</h2>
                            <p class="text-gray-600">
                                {{ $member->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
