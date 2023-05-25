@extends('layout')
@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
		        @include('alert')

        <div class="row">
            <div class="col-md-6 mx-auto">

                <div class="col-md-12">
                    <div class="row">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Add College Categories</h5>
                            </div>

                            <div class="font-5 ms-auto">
                                <div class="col">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="lni lni-circle-plus"></i> Add Categories</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="overlay toggle-icon"></div>
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                  
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name of Category</th>
                                    <th>Number of Inputs</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    {{-- <td>{{ $category->id }}</td> --}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name_of_category }}</td>
                                    <td>{{ $category->number_of_inputs }}</td>
                                    <td>
                                        {{-- <a href="{{ route('college.show', $category->id) }}" class="btn btn-primary btn-sm">View</a> --}}
                                        <a href="{{ route('college.edit', $category->id) }}"><button type="button" class="btn1 btn-outline-success"><i
                                            class='bx bx-edit-alt me-0'></i></button></a>
                                        <form action="{{ route('college.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn1 btn-outline-danger" onclick="return confirm('Are you sure you want to delete this event?')"><i class="bx bx-trash me-0"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add College Categories
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-12" action="{{ route('college.store') }}" method="POST">
                    @csrf


                    <div class="col-md-4">
                        <label>Name of Category</label>
                        <input class="form-control mb-3" type="text"  id="name_of_category" name="name_of_category" value="{{ old('name_of_category') }}">
                               
                    </div>


                    <div class="col-md-4">
                        <label>Number of Inputs</label>
                        <input class="form-control mb-3" type="number"  id="number_of_inputs" name="number_of_inputs" value="{{ old('number_of_inputs') }}">
                               
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success" style="margin-top:3vh;">Add College </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <!--end page wrapper -->
@endsection
