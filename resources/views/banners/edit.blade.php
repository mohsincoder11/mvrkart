@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Banner') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('banners.update', $banner->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row mt-4 mb-2">
                            <label for="banner_image" class="col-md-4 col-form-label text-md-right">{{ __('Banner Image') }}</label>

                            <div class="col-md-6">
                                <div class="mb-2">
                                    <img src="{{ asset('images/'.$banner->banner_image) }}" alt="{{ $banner->banner_image }}" style="max-width: 200px; max-height: 200px;">
                                </div>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('banner_image') is-invalid @enderror" id="banner_image" name="banner_image">
                                    <label class="custom-file-label" for="banner_image">{{ __('Choose file') }}</label>

                                    @error('banner_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select id="status" class="form-control @error('status') is-invalid @enderror" name="status">
                                    <option value="active" {{ $banner->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                    <option value="inactive" {{ $banner->status == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group row mb-2">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Link</label>
                            <div class="col-md-6">

                            <input class="form-control mb-3" name="link" value="{{$banner->link}}"
                                placeholder="Enter the link"/>
                                @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> 
                    </div> 
                        
                        <div class="form-group row mb-2">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea class="form-control mb-3" name="description" id="description" rows="6" cols="50"
                                placeholder="Enter the Description">{!!$banner->description!!}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                                <a href="{{ route('banners.index') }}" class="btn btn-secondary">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    
    ClassicEditor
    .create(document.querySelector('#description'), {
        toolbar: {
            items: [
                'heading',
                '|',
                'bold',
                'italic',
                'underline',
                'link',
                '|',
                'bulletedList',
                'numberedList',
                '|',
                'alignment',
                'indent',
                'outdent',
                '|',
                'imageUpload',
                'mediaEmbed',
                '|',
                'undo',
                'redo'
            ]
        },
        language: 'en'
    })
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });


</script>
@stop