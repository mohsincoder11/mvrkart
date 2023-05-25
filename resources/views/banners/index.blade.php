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
                                <h5 class="mb-0">Add Banner</h5>
                            </div>

                            <div class="font-5 ms-auto">
                                <div class="col">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success create-event"  ><i
                                            class="lni lni-circle-plus"></i> Add Banner</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="overlay toggle-icon"></div>
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-body">

                  
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Banner Image</th>
                                    <th>Description</th>
                                    <th>link</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($banners as $banner)
                                <tr>
                                    {{-- <td>{{ $banner->id }}</td> --}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('images/'.$banner->banner_image) }}" width="100" height="100" /></td>
                                    <td>{!! $banner->description!!}</td>
                                    <td><a target="_blank" href="{{$banner->link}}">{{ $banner->link }}</a></td>
                                    <td>{{ $banner->status }}</td>
                                    <td>
                                        {{-- <a href="{{ route('banners.show', $banner) }}" class="btn btn-info btn-sm">View</a> --}}
                                        <a href="{{ route('banners.edit', $banner) }}" ><button type="button" class="btn1 btn-outline-success"><i
                                            class='bx bx-edit-alt me-0'></i></button></a>
                                        <form action="{{ route('banners.destroy', $banner) }}" method="POST" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn1 btn-outline-danger" onclick="return confirm('Are you sure you want to delete this event?')"><i class="bx bx-trash me-0"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

{{--
                                @foreach ($locations as $location)
                                <tr>
                                    <td>{{ $location->id }}</td>
                                    <td>{{ $location->location }}</td>
                                    <td>
                                        <a href="{{ route('locations.show', $location->id) }}" ></a>
                                        <a href="{{ route('locations.edit', $location->id) }}" ><button type="button" class="btn1 btn-outline-success"><i
                                            class='bx bx-edit-alt me-0'></i></button></a>
                                        <form action="{{ route('locations.destroy', $location->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn1 btn-outline-danger"><i
                                                class='bx bx-trash me-0'></i></button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach

 --}}

                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        {{ $banners->links() }}
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
                <h5 class="modal-title">Add Banner Image
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-12" action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="col-md-12"></div>

                        <div class="col-md-6">
                            <label for="banner_image">Banner Image</label>
                            <input type="file" name="banner_image" class="form-control mb-3" accept="image/*" required>
                        </div>

                        <div class="col-md-6">
                            <label for="status">Status</label>
                            <select name="status" class="form-control mb-3" required>
                                <option value="">Select Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>Link</label>
                            <input class="form-control mb-3" name="link"
                                placeholder="Enter the link"/>
                        </div> 
                        
                        <div class="col-md-12">
                            <label>Description</label>
                            <textarea class="form-control mb-3" name="description" id="description" rows="6" cols="50"
                                placeholder="Enter the Description"></textarea>
                        </div>


                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success" style="margin-top:3vh;">Add Banner</button>
                        </div>

                </form>


            </div>
        </div>
    </div>
    <!--end page wrapper -->
@endsection

@section('js')
<script>
     $(".create-event").on('click', function() {
                    $("#exampleModal").modal('show');
                  
                    ClassicEditor
                    .create(document.querySelector('#description'))
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });

                })

</script>
@stop