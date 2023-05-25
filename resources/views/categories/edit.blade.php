@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Category</div>

                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name_of_category">Name of Category</label>
                            <input type="text" class="form-control" id="name_of_category" name="name_of_category" value="{{ $category->name_of_category }}" required>
                        </div>
                        <div class="form-group">
                            <label for="number_of_inputs">Number of Inputs</label>
                            <input type="number" class="form-control" id="number_of_inputs" name="number_of_inputs" value="{{ $category->number_of_inputs }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
