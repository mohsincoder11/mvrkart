@extends('layout1')
@section('css')
    <style>
        .share-box2 {
            position: absolute;
            right: 20px;
            bottom: 0px;
        }

        .btn {
            height: 45px;
            width: 45px;
            border-radius: 50%;
            box-shadow: 4px 2px 10px 1px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #999;
            cursor: pointer;
            position: relative;
            background: #fff;
        }

        .btn .fa-share-alt {
            margin-right: 2px;
        }

        .btn>i:hover {
            color: rgb(225, 30, 30);
        }

        active:not(:focus-within)>i {
            transform: translate(0.8px, 0.8px);
        }

        .social2 {
            box-shadow: 4px 2px 10px 1px rgba(0, 0, 0, 0.2);
            position: absolute;
            top: -50px;
            display: none;
            justify-content: space-between;
            background-color: white;
            padding: 2px 2px;
            border-radius: 50px;
            z-index: 9999;

        }

        .toggle input[type="checkbox"]:checked+.btn .social2 {
            animation: fadeIn 1s;
            display: flex;
        }

        .toggle input[type="checkbox"]:not(:checked)+.btn .social2 {
            animation: fadeOut 1s;
        }

        .toggle input[type="checkbox"]:checked+.btn .fa-share-alt {
            display: none;
        }

        .toggle input[type="checkbox"]:not(:checked)+.btn .fa-times {
            display: none;
        }

        .social2 a {
            margin: 0 10px;
            font-size: 25px !important;
        }

      
.fa-link{
  color: rgb(149, 149, 149);

}
.fa-link:hover{
  color: rgb(0, 0, 0);

}


        input[type="checkbox"] {
            display: none;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }


        #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px 30px;
  position: fixed;
  z-index: 9999;
  left: 50%;
  top: 30px;
  font-size: 17px;
  border-radius: 5px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {top: 0; opacity: 0;} 
  to {top: 30px; opacity: 1;}
}

@keyframes fadein {
  from {top: 0; opacity: 0;}
  to {top: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {top: 30px; opacity: 1;} 
  to {top: 0; opacity: 0;}
}

@keyframes fadeout {
  from {top: 30px; opacity: 1;}
  to {top: 0; opacity: 0;}
}
    </style>
@stop
@section('content1')

    <!-- page wrapper -->

    <section class="events-grid"
        style="padding-bottom:20px !important; padding-top:40px !important; background-color:#fff8f8;">
        <div class="auto-container">
			
			
			   <form action="" methhod="get" >
            <div class="row clearfix" >
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

                {{-- @json($edit_event) --}}
                @forelse ($edit_event as $edit_event)
                    <div class="col-lg-3 col-md-6 col-sm-12 schedule-block">


                        <div class="schedule-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    {{-- <img height="50" width="50" src="{{ asset('images/FE-valuation/'.$new_edit->image[ $loop->index]) }}" alt=""> --}}
                                    <figure class="image"><img
                                            src="{{ asset('assets1/images/event/' . $edit_event->event_front_image) }}"
                                            width="100" height="100" /></figure>
                                    <div class="content-box">
                                        <div class="post-date">
                                            <h3 style="font-size: 19px; padding-right:10px;">
                                                {{ date('d M Y', strtotime($edit_event->event_date)) }}</h3>
                                        </div>
                                        <div class="text">
                                            <!-- <span class="category"><i class="flaticon-star"></i>Celebration</span> -->
                                            <h4>{{ $edit_event->event_name }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <!-- <li><i class="flaticon-clock-circular-outline"></i>3.00 pm - 4.30 pm</li> -->
                                        <li><img src="assets1/images/location.png">{{ $edit_event->location }}</li>
                                    </ul>
                                    <div class="links"><a href="{{ route('event_detail', $edit_event->id) }}"><span
                                                style="color:rgb(225, 30, 30)">Details</span><i
                                                class="flaticon-right-arrow"></i></a></div>
                                    <div class="share-box2">
                                        <label class="toggle" for="toggle{{ $loop->index }}">
                                            <input type="checkbox" id="toggle{{ $loop->index }}" />
                                            <div class="btn">
                                                <i class="fas fa-share-alt"></i>
                                                <i class="fas fa-times"></i>
                                                <div class="social2">
                                                    <a class="whatsapp_icon"
                                                        href="whatsapp://send?text=Explore this event {{ route('event_detail', $edit_event->id) }}"
                                                        data-action="share/whatsapp/share">
                                                        <i class="fab fa-whatsapp"></i></a>
                                                        <a
                                                        href="https://www.facebook.com/sharer/sharer.php?u={{ route('event_detail', $edit_event->id) }}">
                                                        <i class="fab fa-facebook"></i>
                                                      </a>
                                                      {{-- <a
                                                      href="https://www.instagram.com/?url={{ route('event_detail', $edit_event->id) }}">
                                                      <i class="fab fa-instagram"></i>
                                                    </a>  --}}
                                                    <a class="copy-link" href="#"
                                                    link="{{ route('event_detail', $edit_event->id) }}">
                                                    <i class="fas fa-link"></i>
                                                  </a>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
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

    <div id="snackbar">Link copied to clipboard</div>


@stop
<!-- main-footer end -->
@section('js')
     <script>
       
   $('.copy-link').on('click', function() {
    var link = $(this).attr('link');
    var tempInput = document.createElement("input");
    tempInput.value = link;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  });
  
  $("#location,#event_name").on('change', function(){
    $(this).closest("form").submit();

  })
  </script> 
@stop

