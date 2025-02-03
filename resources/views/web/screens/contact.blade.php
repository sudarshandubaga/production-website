@extends('web.layouts.page')

@section('page_content')
    <section class="py-16 bg-white">
        <div class="container">
            <div class="grid grid-cols-2 gap-10">
                <div>
                    <h3 class="text-3xl text-orange-500 font-bold ps-5 border-s-4 border-s-orange-500 mb-5">
                        Enquiry Now:
                    </h3>
                    <form action="{{ route('enquiry.submit') }}" method="POST" class="flex flex-col gap-5">
                        @csrf
                        <div>
                            <label class="block font-bold mb-2" for="name">Name:</label>
                            <input type="text" id="name" name="name" class="w-full p-2 border rounded"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-bold mb-2" for="mobile">Contact No.:</label>
                            <input type="tel" id="mobile" name="mobile" class="w-full p-2 border rounded"
                                value="{{ old('mobile') }}" required>
                            @error('mobile')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-bold mb-2" for="email">Email:</label>
                            <input type="email" id="email" name="email" class="w-full p-2 border rounded"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-bold mb-2" for="message">Message:</label>
                            <textarea id="message" name="message" class="w-full h-72 p-2 border rounded" rows="4" required>{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded">Send Message <i
                                class="bi bi-chevron-right"></i></button>
                    </form>
                </div>
                <div>
                    <h3 class="text-3xl text-orange-500 font-bold ps-5 border-s-4 border-s-orange-500 mb-5">
                        Get in Touch:
                    </h3>
                    <div class="text-lg">
                        <div class="flex gap-3 items-center py-5 border-b-2">
                            <i class="bi bi-phone text-orange-500 text-3xl"></i>
                            <div>
                                <div class="font-bold">
                                    Contact No.:
                                </div>
                                <a href="tel:{{ $site->phone }}">{{ $site->phone }}</a>
                            </div>
                        </div>
                        <div class="flex gap-3 items-center py-5 border-b-2">
                            <i class="bi bi-envelope text-orange-500 text-3xl"></i>
                            <div>
                                <div class="font-bold">
                                    Email Address:
                                </div>
                                <a href="mailto:{{ $site->email }}">{{ $site->email }}</a>
                            </div>
                        </div>
                        <div class="flex gap-3 py-5">
                            <i class="bi bi-geo-alt text-orange-500 text-3xl"></i>
                            <address>
                                <span class="font-bold">{{ $site->title }}</span>,<br />
                                {!! nl2br($site->address) !!}
                            </address>
                        </div>

                        <div class="border">
                            <iframe src="{{ $site->google_map }}" class="w-full aspect-[2/1]" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
