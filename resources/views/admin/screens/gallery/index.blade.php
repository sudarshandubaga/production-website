@extends('admin.layouts.afterlogin')

@section('title', 'Gallery')

@section('admin_content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-alert />
        <div class="card">
            <h5 class="card-header">View Galleries</h5>
            <div class="card-body">
                @if ($galleries->isEmpty())
                    <div>No data found.</div>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>SNo.</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $key => $gallery)
                                    <tr>
                                        <td>
                                            {{ $key + $galleries->firstItem() }}
                                        </td>
                                        <td>
                                            @if ($gallery->image)
                                                <img src="{{ $gallery->image }}" alt="{{ $gallery->name }}"
                                                    class="img img-thumbnail" style="max-height: 48px">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            {{ $gallery->title }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.gallery.edit', $gallery) }}" title="Edit"
                                                class="btn btn-link">
                                                <i class="bx bxs-pencil"></i>
                                            </a>
                                            <button type="button" class="btn btn-link text-danger btn-delete"
                                                data-href="{{ route('admin.gallery.destroy', [$gallery]) }}">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="py-5">
                        {{ $galleries->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

@push('extra_styles')
@endpush

@push('extra_scripts')
@endpush
