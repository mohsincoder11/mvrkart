@extends('layout')
@section('content')

<div class="overlay toggle-icon"></div>
<div class="col-md-10 mx-auto" style="margin-top:5%">
    <div class="card">
        <div class="card-body">
                      @include('alert')

    
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Competitor Name</th>
                           
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Category</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($college as $college)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td   data-bs-toggle="tooltip" data-bs-placement="right" title="
                            Team Nmae:{{ $college->state}}
                            College Name:- {{ $college->city }}
                        
                            "
                            >{{ $college->competitor}}</td>
                            <td>{{ $college->contact_no}}</td>
                            <td>{{ $college->email }}</td>
                            <td>{{ $college->category_name }}</td>
                            <td>{{ $college->payment_status }}</td>
                            <td Style="background-color:white">
                               
                                {{-- <a href="{{route('',$college->id>) }}"><button type="button" class="btn1 btn-outline-success"><i
                                    class='bx bx-edit-alt me-0'></i></button></a> --}}

                                    <a href="{{route('college_delete',$college->id) }}"><button type="button" class="btn1 btn-outline-danger"><i
                                        class='bx bx-trash me-0'></i></button></a>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
 </div> 
{{-- </div>
</div>  --}}
@stop