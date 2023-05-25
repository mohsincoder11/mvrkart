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
                            <th>Team Name</th>
                            <th>Logo</th>
                          
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Category</th>
                            <th>College ID Card</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($general_all as $general_all)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td
                            data-bs-toggle="tooltip" data-bs-placement="right" title="
                            Team Nmae:{{ $general_all->team_name}}
                            College Name:- {{ $general_all->college_name }}
                            City {{ $general_all->city }}
                            State:- {{ $general_all->state }}
                            Guide Name:- {{ $general_all->guide_name}}
                            Team Member:- {{ $general_all->team_memeber}}


                           
                           
                            ">{{ $general_all->team_name}}</td>
                            <td><img src="{{ asset('assets1/images/registration1/'.$general_all->logo) }}" width="100" height="100" ></td>
                     
                            <td>{{ $general_all->contact_number }}</td>
                            <td>{{ $general_all->email}}</td>
                            <td>{{ $general_all->category_name }}</td>
                            <td><img src="{{ asset('assets1/images/registration1/'.$general_all->college_id) }}" width="100" height="100" ></th>
                            <td>{{ $general_all->payment_status }}</td>
                            <td>
                               
                                {{-- <a href="{{route('',$general_all->id>) }}"><button type="button" class="btn1 btn-outline-success"><i
                                    class='bx bx-edit-alt me-0'></i></button></a> --}}

                                    <a href="{{route('general_delete',$general_all->id) }}"><button type="button" class="btn1 btn-outline-danger"><i
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
</div>
</div>
@stop