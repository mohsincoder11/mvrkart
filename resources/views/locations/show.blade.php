@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Location Details
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" class="form-control" id="location" name="location" value="{{ $location->location }}" readonly>
                        </div>
                        <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('locations.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
