<div class="row">
    <div class="col-sm-8 ">
        <div class="row g-3">
            <div class="col-sm-6">
                <div class="mb-3">
                    {{ Form::label('name', null, ['class' => 'form-label']) }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name.', 'required']) }}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    {{ Form::label('company_name', null, ['class' => 'form-label']) }}
                    {{ Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Company Name', 'required']) }}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    {{ Form::label('email', 'Email Address', ['class' => 'form-label']) }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address.', 'required']) }}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    {{ Form::label('phone', 'Contact No.', ['class' => 'form-label']) }}
                    {{ Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact No.', 'required']) }}
                </div>
            </div>
        </div>

        <div class="mb-3">
            {{ Form::label('address', null, ['class' => 'form-label']) }}
            {{ Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Enter Address', 'rows' => 5]) }}
        </div>

        <div class="mb-3">
            {{ Form::label('description', null, ['class' => 'form-label']) }}
            {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter Description', 'rows' => 10]) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="mb-3">
            {{ Form::label('image_file', 'Choose Main Image', ['class' => 'form-label']) }}
            <label for="image_file" class="drop-zone">
                @if (!empty($exhibitor->image))
                    <figure>
                        <img src="{{ $exhibitor->image }}">
                    </figure>
                @endif
                <p>click to upload image</p>
                <input type="file" accept="image/*" id="image_file" data-size="512">
                <textarea name="image" class="d-none"></textarea>
            </label>
        </div>

        <div class="mb-3">
            {{ Form::label('banner_image_file', 'Choose Banner Image', ['class' => 'form-label']) }}
            <label for="banner_image_file" class="drop-zone">
                @if (!empty($exhibitor->banner_image))
                    <figure>
                        <img src="{{ $exhibitor->banner_image }}">
                    </figure>
                @endif
                <p>click to upload image</p>
                <input type="file" accept="image/*" id="banner_image_file" data-size="512">
                <textarea name="banner_image" class="d-none"></textarea>
            </label>
        </div>
    </div>
</div>
