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
                                <a>+91 9012345678</a>
                            </div>
                        </div>
                        <div class="flex gap-3 items-center py-5 border-b-2">
                            <i class="bi bi-envelope text-orange-500 text-3xl"></i>
                            <div>
                                <div class="font-bold">
                                    Email Address:
                                </div>
                                <a>info@floatingflowerfilms.com</a>
                            </div>
                        </div>
                        <div class="flex gap-3 py-5">
                            <i class="bi bi-geo-alt text-orange-500 text-3xl"></i>
                            <address>
                                <span class="font-bold">{{ env('APP_NAME') }}</span>,<br />
                                166, S.V. Road, Near Andheri Subway,<br />
                                Andheri West, Mumbai &mdash; 400058,<br />
                                Maharashtra.
                            </address>
                        </div>

                        <div class="border">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.6525788380945!2d73.02279487480537!3d26.27293678729287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418d5c7b096573%3A0xe760a915f5109398!2sXPERT%20CODERS%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1738496385901!5m2!1sen!2sin"
                                class="w-full aspect-[2/1]" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
