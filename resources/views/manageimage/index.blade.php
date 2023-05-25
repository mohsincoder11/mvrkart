@extends('layout')
@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
		        @include('alert')

        <div class="row">
            <div class="col-md-6 mx-auto">




                <!--end page wrapper -->
                <!--start overlay-->
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-0">Manage Image</h5>
                    </div>

                    <div class="font-5 ms-auto">
                        <div class="col">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleLargeModalae"><i class="lni lni-circle-plus"></i> Add
                                Image</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="overlay toggle-icon"></div>
                <div class=" mx-auto">
                    <div class="card">
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Gallery Image</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        @foreach ($manage_images as $manage_image)
                                        <tr>
                                            {{-- <td>{{ $manage_image->id }}</td> --}}
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('imagesManage/'.$manage_image->Gallery_Image) }}" width="100" height="100" /></td>
                                            <td>{{ $manage_image->Status }}</td>
                                            <td>
                                                {{-- <a href="{{ route('manageimage.show', $manage_image) }}" class="btn btn-info btn-sm">View</a> --}}
                                                {{-- <a href="{{ route('manageimage.edit', $manage_image) }}" ><button type="button" class="btn1 btn-outline-success"><i --}}
                                                    {{-- class='bx bx-edit-alt me-0'></i></button></a> --}}
                                                <form action="{{ route('manageimage.destroy', $manage_image) }}" method="POST" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                            <button type="submit" class="btn1 btn-outline-danger" onclick="return confirm('Are you sure you want to delete this event?')"><i class="bx bx-trash me-0"></i> </button>

                                                    {{-- <button type="submit" class="btn1 btn-outline-danger" onclick="return confirm('Are you sure you want to delete this event?')"><i class="bx bx-trash me-0"></button>
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button> --}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center">
                                {{ $manage_images->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mx-auto">




                <!--end page wrapper -->
                <!--start overlay-->
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-0">Manage Video</h5>
                    </div>

                    <div class="font-5 ms-auto">
                        <div class="col">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal11"><i class="lni lni-circle-plus"></i> Add
                                Video</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="overlay toggle-icon"></div>
                <div class=" mx-auto">
                    <div class="card">
                        <div class="card-body">
                           

                            <div class="table-responsive">

                                <table id="example3" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Video URL</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($videos as $video)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $video->videoURL }}</td>
                                            <td>

                                                <form action="{{ route('managevideo.destroy',$video->id) }}" method="POST">
                                                    {{-- <a class="btn btn-info" href="{{ route('managevideo.show',$video->id) }}">Show</a> --}}
                                                    {{-- <a class="btn btn-primary" href="{{ route('managevideo.edit',$video->id) }}">Edit</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this video?')">Delete</button> --}}
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

    </div>
</div>
<div class="col">
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal11">Basic modal</button> -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Video title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                
                    <form class="row g-12" action="{{ route('managevideo.store') }}" method="POST">
                    @csrf

                    <div class="col-md-6"  >
                        <label > Video Link </label>
                        <input type="text" name="videoURL" class="form-control mb-3" placeholder="Enter Video Link">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success" style="margin-top:3vh;">Add Video URL</button>
                    </div>
                </form>


            </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleLargeModalae" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Gallery
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-12" action="{{ route('manageimage.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="col-md-12"></div>

                        <div class="col-md-4">
                            <label for="Gallery_Image">Gallery Image</label>
                            <input type="file" name="Gallery_Image" class="form-control mb-3" accept="image/*" required>
                        </div>

                        <div class="col-md-4">
                            <label for="Status">Status</label>
                            <select name="Status" class="form-control mb-3" required>
                                <option value="">Select Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success" style="margin-top:3vh;">Add Image</button>
                        </div>

                </form>



            </div>
        </div>
    </div>
</div>

    <!--end page wrapper -->
    @endsection
