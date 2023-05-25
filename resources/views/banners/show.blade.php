@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Banner Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Banner Image</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/'.$banner->banner_image) }}" alt="Banner Image">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <p>{{ $banner->status }}</p>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('banners.index') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
