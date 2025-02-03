@extends('admin.layouts.afterlogin')

@section('title', 'Faq Category')

@section('admin_content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-alert />
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <h5 class="card-header">
                        Add Faq Category
                    </h5>
                    <div class="card-body">
                        {{ Form::open(['url' => route('admin.faq-category.store')]) }}
                        @include('admin.screens.faq-category._form')
                        <div class="d-grid">
                            <button class="btn btn-primary">Save</button>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="card">
                    <h5 class="card-header">View Categories</h5>
                    <div class="card-body">
                        @if (!$categories->isEmpty())
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S. No.</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $key => $category)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->description }}</td>

                                                <td>
                                                    <a href="{{ route('admin.faq-category.edit', $category) }}"
                                                        title="Edit" class="btn btn-link">
                                                        <i class="bx bxs-pencil"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-link text-danger btn-delete"
                                                        data-href="{{ route('admin.faq-category.destroy', [$category]) }}">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div>
                                No record(s) found.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

@push('extra_styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.6.1/css/colReorder.bootstrap5.min.css">
@endpush

@push('extra_scripts')
@endpush
