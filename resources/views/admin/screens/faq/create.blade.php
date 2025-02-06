@extends('admin.layouts.afterlogin')

@section('title', 'FAQ » Add New')

@section('admin_content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <form action="{{ route('admin.faq.store') }}" method="post">
            @csrf
            <div class="card mb-4 position-sticky top-0" style="z-index: 1;">
                <div class="card-body py-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="m-0">Add New FAQ</h3>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary px-5">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <x-alert />
            @include('admin.screens.faq._form')
        </form>
    </div>
    <!-- /Content -->
@endsection
