@extends('layout')
@section('content')
    <!--start page wrapper -->


    <div class="page-wrapper">
        <div class="page-content">
			            @include('alert')

            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Event Table List</h5>
                </div>

                <div class="font-5 ms-auto">
                    <div class="col">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success create-event" ><i class="lni lni-circle-plus"></i> Create Event</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" id="modal-content-id">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add New Event</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">

                                              


                                                <div class="row">
                                                    <form class="row g-2" action="{{ route('events.store') }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="col-md-3">
                                                            <label>Event Name</label>
                                                            <input class="form-control mb-3" name="event_name"
                                                                type="text" placeholder="Event Name">
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Add Location</label>
                                                            <select class="form-select" name="location_id">
                                                                <option>Select Location</option>
                                                                @foreach ($loc as $loc)
                                                                    <option value={{ $loc->id }}>{{ $loc->location }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Add Fees</label>
                                                            <input class="form-control mb-3" name="add_price" type="text"
                                                                placeholder="Fees">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Select Type Of Event</label>
                                                            <select class="form-select mb-3" name="type_of_event"
                                                                aria-label="Default select example">
                                                                <option selected>Select</option>
                                                                <option value="2">General</option>
                                                                <option value="1">College</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Event Date</label>
                                                            <input class="form-control mb-3" name="event_date"
                                                                type="date">
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label><b><span style="color:red">Registration Closing
                                                                        Date</span></b></label>
                                                            <input class="form-control mb-3" name="closing_date"
                                                                type="date">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Event Front Image (250*250px)</label>
                                                            <input type="file" name="event_front_image"
                                                                class="form-control mb-3" accept="image/*" required>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Event Banner Image (730*500px)</label>
                                                            <input type="file" name="event_banner_image"
                                                                class="form-control mb-3" accept="image/*" required>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Event Rule Book
                                                            </label>

                                                            <input type="file" name="event_rule_book"
                                                                class="form-control mb-3"
                                                                accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"
                                                                required>

                                                        </div>
                                                        
                                                        <div class="col-md-3 mt-4">
                                                            <label for="toggle-pay-later">Allow Pay Later?</label>
                                                            <label class="switch s-outline s-outline-primary  mr-2" style="display: inline-block;">
                                                              <input type="checkbox" name="allow_pay_later" value="1" id="toggle-pay-later">
                                                              <span class="slider round"></span>
                                                            </label>
                                                          </div>

                                                        <div class="col-md-12">
                                                            <label>Description</label>
                                                            <textarea class="form-control mb-3" name="description" id="description" rows="6" cols="50"
                                                                placeholder="Enter the Description"></textarea>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Add Schedule Date</label>
                                                            <input class="form-control mb-3" type="date"
                                                                id="shedule_date">
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Add Schedule Activity</label>
                                                            <input class="form-control mb-3" type="text"
                                                                placeholder=" Activity" id="shedule_activity">
                                                        </div>

                                                        <div class="col-md-1" style="margin-top: 3.5%;">
                                                            <button type="button" class="btn btn-success add-row"><i
                                                                    class="lni lni-circle-plus"></i>
                                                            </button>
                                                        </div>

                                                        <div style="overflow-x: scroll;">
                                                            <table style="width:100%; margin-top:4%;" id="table">
                                                                <tr align="center">
                                                                    <th width="">Add Schedule Date</th>
                                                                    <th width="">Add Schedule Activity</th>
                                                                    <th width="">Action</th>
                                                                </tr>
                                                                <tbody class="add_more">
                                                                    {{-- <tr align="center" id="scheme_data"> --}}
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="col-md-2" style="margin-top: 3.5%;">
                                                            <button type="submit" class="btn btn-success"
                                                                style="margin-left:45%;">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
 
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Event Name</th>
                                        <th>Location</th>
                                        <th>Type</th>  
                                        <th>Front Image</th>
                                        <th>Banner Image</th>
                                        <th>Rule Book</th>
                                        <th>Date</th>
                                        <th>Closing Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $event->event_name }}</td>
                                            <td>{{ $event->location }}</td>
                                            <td> {{$event->type_of_event=='2' ? 'General' : 'College'}}</td>
                                            <td><img src="{{ asset('assets1/images/event/' . $event->event_front_image) }}"
                                                    width="100" height="100" /></td>
                                            <td><img src="{{ asset('assets1/images/event/' . $event->event_banner_image) }}"
                                                    width="100" height="100" /></td>
                                            {{-- <td><a href="{{asset('/')}}{{$event->event_front_image}}">
                                        <img height="50px" width="50px" src="{{asset('/')}}{{$event->event_banner_image}}" alt="" /></a>
                                    </td> --}}

                                            <td><a target="_blank"
                                                    href="{{ asset('assets1/images/event/' . $event->event_rule_book) }}">
                                                    {{ Str::limit($event->event_rule_book,30) }}</a></td>
                                            <td>{{ date('d-m-Y', strtotime($event->event_date)) }}</td>
                                            <td>{{ date('d-m-Y', strtotime($event->closing_date)) }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#scheduleModal{{ $event->id }}">
                                                    View Schedule
                                                </button>
                                                <a target="_blank" href="{{ asset('assets1/images/event/' . $event->event_rule_book) }}"><button
                                                        type="submit" class="btn1 btn-outline-succes"> <i
                                                            class="fadeIn animated bx bx-book-alt" data-bs-toggle="modal"
                                                            data-bs-target="#exampleLargeModal1" $event></i></button></a>
                                                <button type="submit" id="{{ $event->id }}"
                                                    class="btn1 btn-outline-warning edit-event"><i
                                                        class="bx bx-edit me-0"></i>
                                                </button>
                                                <form action="{{ route('events.destroy', $event) }}" method="POST"
                                                    style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn1 btn-outline-danger"
                                                        onclick="return confirm('Are you sure you want to delete this event?')"><i
                                                            class="bx bx-trash me-0"></i> </button>

                                                    {{-- <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button> --}}
                                                </form>


                                                <!-- Modal -->
                                                <div class="modal fade" id="scheduleModal{{ $event->id }}"
                                                    tabindex="-1" aria-labelledby="scheduleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="scheduleModalLabel">Schedule
                                                                    for {{ $event->event_name }}</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Sr.No.</th>
                                                                            <th>Schedule Date</th>
                                                                            <th>Schedule Activity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($event->schedule_date as $key => $value)
                                                                            <tr>
                                                                                <td>{{ $key + 1 }}</td>
                                                                                <td>{{ $value }}</td>
                                                                                <td>{{ $event->schedule_activity[$key] }}
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        {{-- <div class="modal fade" id="exampleLargeModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">shedule Details</h5>



                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
        {{-- <div class="modal-body"> --}}

        {{-- <table>
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Schedule Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $key => $event)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    @foreach ($event->schedule_date as $date)
                                        {{ $date }}<br>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}


        {{-- </div> --}}
        {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div> --}}
        {{-- </div>
    </div>
</div> --}}


    @endsection

    @section('js')

        <script>
            $(document).ready(function() {
                $(document).on("click", ".add-row", function() {
                    var shedule_date1 = $('#shedule_date').val();
                    var shedule_activity1 = $('#shedule_activity').val();

                    var markup =
                        '<tr><td><input type="text" name="schedule_date[]" required="" style="border:none; width: 100%;" value="' +
                        shedule_date1 +
                        '"></td><td><input type="text" name="schedule_activity[]" required="" style="border:none; width: 100%;" value="' +
                        shedule_activity1 +
                        '"></td><td><button type="button" class="btn1 btn-outline-danger delete-row"><i class="bx bx-trash me-0"></i></button></td></tr>';

                    $(".add_more").append(markup);
                    $('#schedule_date').val('');
                    $('#schedule_activity').val('');

                })
                // Find and remove selected table rows
                $(document).on("click", ".delete-row", function() {
                    var shedule_date = $(this).parents("tr").find('input[name="schedule_date[]"]').val()
                    var shedule_activity = $(this).parents("tr").find('input[name="schedule_activity[]"]').val()



                    $(this).parents("tr").remove();
                    // final_calculations();
                });

               


                var create_model = $("#modal-content-id").clone();
                $(".create-event").on('click', function() {
                    $("#exampleLargeModal").modal('show');
                    $("#modal-content-id").empty();
                    $("#modal-content-id").html(create_model);
                    ClassicEditor
                    .create(document.querySelector('#description'))
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });

                })

                $(".edit-event").on('click', function() {
                    create_model = $("#modal-content-id").clone();
                    $.ajax({
                        url: "{{ route('edit-event') }}",
                        type: "GET",
                        data: {
                            id: $(this).attr('id')
                        },
                        dataType: "json",
                        success: function(data) {
                            $("#exampleLargeModal").modal("show");
                            $("#modal-content-id").empty();
                            $("#modal-content-id").html(data);
                            ClassicEditor
                                .create(document.querySelector('#description'))
                                .then(editor => {
                                    console.log(editor);
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        }
                    })
                })



            })
        </script>
    @endsection



    {{-- old code --}}




    {{-- <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Event Name</th>
                                <th>Location</th>
                                <th>Front Image</th>
                                <th>Banner Image</th>
                                <th>Rule Book</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $event->event_name }}</td>

                                    <td>{{ $event->location }}</td> --}}
    {{-- <td>{{ $event->event_front_image }}</td> --}}
    {{-- <td><img src="{{ asset('event_images/'.$event->event_front_image) }}" width="100" height="100" /></td>
                                    <td><img src="{{ asset('event_banner_images/'.$event->event_banner_image) }}" width="100" height="100" /></td>
                                    <td>{{ $event->event_rule_book }}</td>
                                    <td>{{ $event->event_date }}</td>
                                    <td> --}}
    {{-- <a href="{{ route('events.show', $event) }}" class="btn btn-sm btn-primary">View</a> --}}
    {{-- <a href="{{ route('events.edit', $event) }}" >Edit</a> --}}
    {{-- <button type="submit" class="btn1 btn-outline-succes" >	<i class="fadeIn animated bx bx-book-alt" data-bs-toggle="modal" data-bs-target="#exampleLargeModal1" $event></i></button>
                                        <form action="{{ route('events.destroy', $event) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn1 btn-outline-danger" onclick="return confirm('Are you sure you want to delete this event?')"><i class="bx bx-trash me-0"></i> </button>


                                        </form>
                                    </td>

                                </tr>
                                @endforeach

                        </tbody>
                    </table> --}}
