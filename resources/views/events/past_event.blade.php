@extends('layout1')
@section('content1')

<!-- page wrapper -->


    

      

        <section class="events-grid" style="padding-bottom:20px !important; padding-top:40px !important; background-color:#fff8f8">
            <div class="auto-container">
		
				
				     <form action="" methhod="get">
				 <div class="row clearfix">            
                  <div class="col-lg-2 col-md-2 col-sm-12 schedule-block" style="padding-top: 10px;">
					   <h6> <b>Search by Location :</b> </h6>
                        </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 schedule-block">
                        <select name="location" id="location" class="form-control">
                            <option value="">All Location</option>
                            @foreach ($location as $location)
                                <option value="{{$location->id}}"
                                    @if (app('request')->input('location') && app('request')->input('location') == $location->id) selected @endif
                                    >{{$location->location}}</option>
                            @endforeach
                        </select>
                    </div>
                   <div class="col-lg-2 col-md-2 col-sm-12 schedule-block" style="padding-top: 10px;">
						   <h6><b> Search by Event :</b></h6>
                        </div>
                <div class="col-lg-4 col-md-4 col-sm-12 schedule-block">
                        <select name="event_name" id="event_name" class="form-control">
                            <option value="">All Event</option>
                            @foreach ($event_name as $event_name)
                                <option value="{{$event_name->event_name}}"
                                    @if (app('request')->input('event_name') && app('request')->input('event_name') == $event_name->event_name) selected @endif
                                    >{{$event_name->event_name}}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
</form>
				
				
                <div class="row clearfix" style="padding-top:40px;">

     {{-- <form action=""> --}}
     {{-- <input type="hidden" name="id" value="{{ $edit_event->id }}">  --}}
    {{-- @json($edit_event) --}}

             
                    {{-- @json($edit_event) --}}
                    @forelse($edit_event as $edit_event)
                    <div class="col-lg-3 col-md-6 col-sm-12 schedule-block">
                        
                      
                        <div class="schedule-block-one">
                            <div class="inner-box">
                                <div class="image-box" >
                                    {{-- <img height="50" width="50" src="{{ asset('images/FE-valuation/'.$new_edit->image[ $loop->index]) }}" alt=""> --}}
                                    <figure class="image"><img  src="{{ asset('assets1/images/event/'.$edit_event->event_front_image) }}" width="100" height="100" /></figure>
                                    <div class="content-box">
                                        <div class="post-date"><h3 style="font-size: 19px; padding-right:10px;">{{date('d M Y', strtotime($edit_event->event_date))}}</h3></div>
                                        <div class="text">
                                            <!-- <span class="category"><i class="flaticon-star"></i>Celebration</span> -->
                                            <h4>{{ $edit_event->event_name }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <!-- <li><i class="flaticon-clock-circular-outline"></i>3.00 pm - 4.30 pm</li> -->
                                        <li><img src="assets1/images/location.png">{{ $edit_event->location}}</li>
                                    </ul>
                                    <div class="links"><a href="{{ route('pasteventdetail',$edit_event->id) }}"><span style="color:rgb(225, 30, 30)">Result</span><i class="flaticon-right-arrow"></i></a></div>
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   @empty
                      <div style="padding-bottom:23%; padding-top :5%;">

						<h3 ><b>No events found for your search.</b></h3>
                    </div>

                    @endforelse
                    
                   

                </div>
              
            </div>
        </section>
        <!-- events-grid end -->

        <!-- main-footer -->
       @stop
        <!-- main-footer end -->
   @section('js')
       <script>
       $("#location,#event_name").on('change', function(){
        $(this).closest("form").submit();
    
      })
      </script> 
    @stop


       