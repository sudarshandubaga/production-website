<div class="row">
    <div class="col-sm-12 ">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    {{ Form::label('title', null, ['class' => 'form-label']) }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter title', 'required' => 'required']) }}
                </div>
                <div class="mb-3" style="max-width: 400px;">
                    {{ Form::label('image_file', 'Choose Image', ['class' => 'form-label']) }}
                    <label for="image_file" class="drop-zone">
                        @if (!empty($gallery->image))
                            <figure>
                                <img src="{{ $gallery->image }}">
                            </figure>
                        @endif
                        <p>click to upload image</p>
                        <input type="file" accept="image/*" id="image_file" data-size="512">
                        <textarea name="image" class="d-none"></textarea>
                    </label>
                </div>

            </div>
        </div>
    </div>
</div>

@push('extra_scripts')
    <script></script>
@endpush
