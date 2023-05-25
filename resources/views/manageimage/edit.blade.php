@extends('layout')
{{-- @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Image</h2>
                <form action="{{ route('manageimage.update', $manage_image->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Gallery_Image">Image:</label>
                        <input type="file" class="form-control" id="Gallery_Image" name="Gallery_Image">

                    </div>
                    <div class="form-group">
                        <label for="Status">Status:</label>
                        <select class="form-control" id="Status" name="Status">
                            <option value="active" {{ $manage_image->Status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $manage_image->Status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection --}}



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Banner') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('manageimage.update', $manage_image->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="Gallery_Image" class="col-md-4 col-form-label text-md-right">{{ __('Banner Image') }}</label>

                            <div class="col-md-6">
                                <div class="mb-2">
                                    <img src="{{ asset('imagesManage/'.$manage_image->Gallery_Image) }}" alt="{{ $manage_image->Gallery_Image }}" style="max-width: 200px; max-height: 200px;">
                                </div>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('Gallery_Image') is-invalid @enderror" id="Gallery_Image" name="Gallery_Image">
                                    <label class="custom-file-label" for="Gallery_Image">{{ __('Choose file') }}</label>

                                    @error('Gallery_Image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select id="Status" class="form-control @error('status') is-invalid @enderror" name="Status">
                                    <option value="active" {{ $manage_image->status == 'active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                    <option value="inactive" {{ $manage_image->status == 'inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                </select>

                                @error('Status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                                <a href="{{ route('manageimage.index') }}" class="btn btn-secondary">
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

