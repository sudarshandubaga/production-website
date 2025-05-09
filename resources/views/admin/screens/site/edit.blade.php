@extends('admin.layouts.afterlogin')

@section('title', 'Site Setting')

@section('admin_content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-alert />
        <div class="card">
            <h5 class="card-header">
                Site Information
            </h5>
            <div class="card-body">
                <form action="{{ route('admin.site.update', $site) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('admin.screens.site._form')
                    <div>
                        <button class="btn btn-primary px-5">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Content -->
@endsection
