@extends('admin.layouts.afterlogin')

@section('title', 'Exhibitor')

@section('admin_content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <x-alert />
        <div class="card">
            <h5 class="card-header">View Exhibitors</h5>
            <div class="card-body">
                @if ($exhibitors->isEmpty())
                    <div>No data found.</div>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SNo.</th>
                                    <th>Image</th>
                                    <th>Details</th>
                                    <th>Gallery Images</th>
                                    <th>Projects</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exhibitors as $key => $exhibitor)
                                    <tr>
                                        <td>
                                            {{ $key + $exhibitors->firstItem() }}
                                        </td>
                                        <td>
                                            @if ($exhibitor->image)
                                                <img src="{{ $exhibitor->image }}" alt="{{ $exhibitor->name }}"
                                                    class="img img-thumbnail" style="max-height: 48px">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <div>
                                                <strong>
                                                    {{ substr($exhibitor->name, 0, 30) }}
                                                    @if (strlen($exhibitor->name) > 30)
                                                        &hellip;
                                                    @endif
                                                </strong>
                                            </div>
                                            <div>
                                                <i class="bx bx-building"></i> {{ $exhibitor->company_name }}
                                            </div>
                                            <div>
                                                <i class="bx bx-envelope"></i> {{ $exhibitor->email }}
                                            </div>
                                            <div>
                                                <i class="bx bx-phone"></i> {{ $exhibitor->phone }}
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#ExhibtiorGallery{{ $exhibitor->id }}" data-bs-toggle="modal">
                                                View
                                                ({{ $exhibitor->images_count ?: 0 }})
                                            </a>
                                        </td>
                                        <td style="white-space: nowrap">
                                            <a href="#ExhibtiorAddProject{{ $exhibitor->id }}" data-bs-toggle="modal">
                                                Add
                                            </a> |
                                            <a href="#ExhibtiorViewProject{{ $exhibitor->id }}" data-bs-toggle="modal">
                                                View
                                                ({{ $exhibitor->projects_count ?: 0 }})
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.exhibitor.edit', $exhibitor) }}" title="Edit"
                                                class="btn btn-link">
                                                <i class="bx bxs-pencil"></i>
                                            </a>
                                            <button type="button" class="btn btn-link text-danger btn-delete"
                                                data-href="{{ route('admin.exhibitor.destroy', [$exhibitor]) }}">
                                                <i class="bx bx-trash"></i>
                                            </button>

                                            <hr>

                                            <div class="d-grid">
                                                <a href="{{ route('admin.exhibitor.show', $exhibitor) }}" target="_blank"
                                                    class="btn btn-primary btn-sm" style="white-space: nowrap">
                                                    View / Download Pass
                                                </a>
                                            </div>

                                            <x-exhibitor-add-project :exhibitor="$exhibitor" />
                                            <x-exhibitor-view-project :exhibitor="$exhibitor" />
                                            <x-exhibitor-gallery :exhibitor="$exhibitor" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="py-5">
                        {{ $exhibitors->links() }}
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
    <script>
        $(function() {
            $(document).on("submit", ".project-add-form, .exhibitor-gallery-form", function(e) {
                e.preventDefault();
                let form = $(this);
                form.find('.res-msg').remove();

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: form.serialize(),
                    success: function(res) {
                        // 
                        location.reload();
                    },
                    error: function(err) {
                        // 
                    }
                });
            });
        });
    </script>
@endpush
