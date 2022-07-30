@extends('admin.layouts.app')

@push('custom-style')
<!-- Styles -->
@endpush

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <section class="main-content">
        <div class="title-section d-flex justify-content-between align-items-center">
            <div class="text-block">
                <h1 class="title">New Post Create</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-block">
                <a class="btn btn-primary" href="{{ route('post.index') }}">
                <ion-icon name="list-outline"></ion-icon>
                    <span>Post List</span>
                </a>
            </div>
        </div>
        <div class="form-block">
            {!! Form::open(array('route' => 'post.store', 'method'=> 'POST', 'class'=> 'row g-3', 'enctype' => 'multipart/form-data')) !!}
                @csrf
                <div class="col-md-9">
                    <div class="col-md-12">
                        {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                        {!! Form::text('title', null, ['placeholder' => 'Post Title','class' => 'form-control',  'required' => true]) !!}
                        @if($errors->has('title'))
                            <div class="error_msg">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('post_category_id', 'Post Category ID', ['class' => 'form-label']) !!}
                        <select name="post_category_id" id="post_category_id" class="form-select" onchange="userFormatState('post_category_id')" required>
                            <option selected disabled value="">Choose...</option>
                            @foreach($post_categories as $post_category)
                                <option value="{{ $post_category->id }}">{{ $post_category->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('post_category_id'))
                            <div class="error_msg">
                                {{ $errors->first('post_category_id') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <!-- {!! Form::label('cover_image', 'Cover Image', ['class' => 'form-label']) !!}
                        {!! Form::text('cover_image', null, ['class' => 'form-control']) !!}
                        @if($errors->has('cover_image'))
                            <div class="error_msg">
                                {{ $errors->first('cover_image') }}
                            </div>
                        @endif -->
                        <div class="data-container">
                            <div class="data-block cover-image drop-container" data-id="0">
                                <div class="field-text">Cover image <span class="required-span d-flex">*</span></div>
                                    <div class="upload-btn-block">
                                        <div class="select-btn" id="drop-container" data-id="coverImage">
                                            {!! Form::label('cover_image', 'Select files', ['class'=>'']) !!}
                                            {!! Form::hidden('cover_image_data',"", ['id' => 'cover_image_data', 'class' => 'product-image']) !!}
                                            {!! Form::file('cover_image', ['onchange' => 'imageUpload(this)', 'id' => 'cover_image','class' => 'drop-area-text']) !!}
                                        </div>
                                        <div class="delete-btn" id="cover_imageDelete" onclick="removeImage('cover_image')">Delete image</div>
                                    </div>
                                <div class="image-name" id="cover_imageName">Not selected</div>
                                <div class="product-image">
                                    <img id="cover_imagePreview" src="{{ asset('images/admin/default.jpg') }}" alt="">
                                    <span class="formate-error cover_imageerror">Select a jpg, jpeg, png type image file.</span>
                                </div>
                                @if($errors->has('cover_image'))
                                    <div class="error_msg">
                                        {{ $errors->first('cover_image') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('description', null, ['placeholder' => 'Description', 'class' => 'form-control', 'id' => 'description', 'type' => 'textarea']) !!}
                        @if($errors->has('description'))
                            <div class="error_msg">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-12">
                        {!! Form::label('meta_title', 'Meta Title', ['class' => 'form-label']) !!}
                        {!! Form::text('meta_title', null, ['placeholder' => 'Meta Title', 'class' => 'form-control',  'required' => true]) !!}
                        @if($errors->has('meta_title'))
                            <div class="error_msg">
                                {{ $errors->first('meta_title') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-12">
                        {!! Form::label('meta_description', 'Meta Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('meta_description', null, ['placeholder' => 'Meta Description', 'class' => 'form-control', 'id' => 'meta_description', 'type' => 'textarea', 'required' => true]) !!}
                        @if($errors->has('meta_description'))
                            <div class="error_msg">
                                {{ $errors->first('meta_description') }}
                            </div>
                        @endif
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
</main>
@endsection

@push('custom-scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
     // ckeditor init js
     setTimeout(function(){
            CKEDITOR.replace('description', {
                filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        },100);
</script>
<script>
    $(document).ready( function () {
        $('#category').select2();
    });
</script>
<script type="text/javascript">
    // image upload and preview js

    var noImage = "{{ asset('images/admin/default.jpg') }}";
    function imageUpload( e ) {
            var imgPath = e.value;
            var ext = imgPath.substring( imgPath.lastIndexOf( '.' ) + 1 ).toLowerCase();
            if ( ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg" ) {
                readURL( e, e.id );
                $( '.' + e.id + 'error' ).hide()
                $( '.btn-submit' ).prop( "disabled", false );
            } else {
                $( '.' + e.id + 'error' ).html( 'Select a jpg, jpeg, png type image file.' ).show();
                $( '.btn-submit' ).prop( "disabled", true );
            }
        }

        var imageName;
        function readURL( input, id ) {
            if ( input.files && input.files[ 0 ] ) {
                imageName = input.files[0].name;
                var reader = new FileReader();
                reader.readAsDataURL( input.files[ 0 ] );
                reader.onload = function ( e ) {
                    $( '#' + id + 'Preview' ).attr( 'src', e.target.result ).show();
                    $( '#' + id + 'Delete' ).css( 'display', 'flex' );
                    $( '#' + id + 'Name' ).html( input.files[ 0 ].name );
                    $("#" + id + "_data").attr("value", imageName);
                };
            }
        }

        function removeImage(id) {
            $( "#" + id ).val( null );
            $( '#' + id + 'Preview' ).attr( 'src', noImage );
            $( '#' + id + 'Name' ).html( 'Not selected' );
            $( '#' + id + 'Delete' ).css( 'display', 'none' );
        }
</script>
@endpush
