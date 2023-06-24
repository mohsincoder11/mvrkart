

@extends('layout1')
@section('content1')


<style>
	 .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */

        margin-top: 100px;
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 0px;
        border: 1px solid #888;
        width: 50%;
		height:auto;

    }

    /* The Close Button */
    .close,.close2 {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    @media only screen and (max-width: 600px) {

        .width {
            width: 80% !important;

        }

    }


    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    
</style>
        <!-- sidebar-page-container -->
        <form>
            {{-- <input type="text" name="id" value={{ $edit_event->id }} --}}



       
        <section class="sidebar-page-container" style="padding-bottom:20px !important; padding-top:40px !important; background-color:#fff8f8">
            <div class="auto-container">
                <h4> <b style="color:black;">{{  $edit_event->event_name }}</b> </h4><br>
                <div class="row clearfix">
                    
                        
                 

                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="inner-box">
                                <figure class="image-box" ><img
                                    src="{{ asset('assets1/images/event/'.$edit_event->event_banner_image) }}" alt="" ></figure>
                                <div class="text" style="text-align: justify;">
                                    
                                        {!!$edit_event->description  !!}

                                    <div class="btn-box">
                                        {{-- {{  now()->format('d-m-y') }} --}}
                                     
                                       @if(strtotime(date('Y-m-d'))>strtotime($edit_event->closing_date))

                                       <button type="button" class="theme-btn" id="event_closed_model_btn">
                                        REGISTER NOW
                                      </button>
                                       @else
                                       @if ($edit_event->type_of_event==1)
                                        
                                         <a href="{{ route('register',$edit_event->id) }}" class="theme-btn">REGISTER NOW</a>   
                                         @if($edit_event->allow_pay_later=='1')
                                         <a href="{{ route('register-pay-later1',$edit_event->id) }}" class="theme-btn">REGISTER NOW & PAY LATER
                                        </a>  
                                        @endif
                                        @else
                                         <a href="{{ route('register2',$edit_event->id) }}" class="theme-btn">REGISTER NOW</a> 
                                          @if($edit_event->allow_pay_later=='1')
                                          <a href="{{ route('register-pay-later2',$edit_event->id) }}" class="theme-btn">REGISTER NOW & PAY LATER
                                        </a>   
                                        @endif
                                        @endif
                                       
                                        
                                        @endif
                                             
                                         
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">

                            <div class="sidebar-widget category-widget" >

                                <div class="widget-content">
                                    <ul class=" clearfix"><br>
                                    <li >
										<div class="row">
										<div class="col-md-6">
										<i class="fa fa-calendar" aria-hidden="true" style="color:red;"></i> <b style="color:black; font-size:15px;">&nbsp;Event Date : </b> </div> <div class="col-md-6" align="left"><span><b style="color:black; padding-left: 20px; font-size:15px;" >{{date('d M Y', strtotime($edit_event->event_date))}}</b> </span></div></div>
											</li>
                                        <hr>
                                        <li> <div class="row">
										<div class="col-md-6"><i class="fa fa-location-arrow" aria-hidden="true" style="color:red;"></i> <b style="color:black; font-size:15px;">&nbsp;Event Location : </b></div> <div class="col-md-6" align="left"> <span> <b style="color:black; padding-left: 20px; font-size:15px;">{{ $edit_event->location }}</b> </span></div></div></li>   <hr>
                                        <li> 	<div class="row">
										<div class="col-md-6"><img src="{{ asset('assets/images/rupee.png')}}" style="height:20px; width:20px;"> <b style="color:black; font-size:15px;">&nbsp;Entry Fee :</b></div> <div class="col-md-6" align="left"> <span> <b style="color:black; padding-left: 20px; font-size:15px;">{{ number_format($edit_event->add_price) }}/-</b> </span></div></div></li> <hr>
										   <li><i class="fa fa-download" aria-hidden="true" style="color:red;"></i> <a href="{{ asset('assets1/images/event/'.$edit_event->event_rule_book) }}" target="/blank" > <b style="color:black; font-size:15px;">&nbsp;Download Rule
                        Book</b> </a></li><hr>
										 <li><i class="fa fa-eye" aria-hidden="true" style="color:red;"></i><a id="myBtn"> <b style="color:black; font-size:15px;">&nbsp;View Schedule</b> </a></li><br>
										
                                    </ul>
                                </div>
                                
                            </div>



                            <!-- <div class="sidebar-widget category-widget" >

<div class="widget-content">
    <ul class=" clearfix"><br>
        <li><i class="fa fa-download" aria-hidden="true" style="color:red;"></i> <a href="{{ asset('assets1/images/event/'.$edit_event->event_rule_book) }}" target="/blank" > <b style="color:black;">&nbsp;Download</b> <span><b style="color:black;">Rule
                        Book</b></span></a></li><hr>


        {{-- <li><i class="fa fa-eye" aria-hidden="true" style="color:red;"></i><a id="myBtn"> <b style="color:black;">&nbsp;View</b> <span><b
                        style="color:black;">Schedule</b></span>
                        <table>
                            <tr>
                                <th>Schedule Date</th>
                                <th>Schedule Activity</th>

                            </tr><br>
                            <tbody>
                                <tr> --}}

                                    {{-- <input name="schedule_date[]" type="hidden" value="{{$edit_event->schedule_date[ $loop->index]  }}">
        
                                    <input name="schedule_activity[]" type="hidden" value="{{$edit_event->schedule_activity[ $loop->index]  }}"> --}}
                                    {{-- <td>{{ $edit_event->schedule_date_string }}</td>
                                    <td>{{ $edit_event->schedule_activity_string }}</td>
                                   
                                </tr>
                            </tbody>
                        </table>
                    </a></li>
 --}}




                    <li><i class="fa fa-eye" aria-hidden="true" style="color:red;"></i><a id="myBtn"> <b style="color:black;">&nbsp;View</b> <span><b
                        style="color:black;">Schedule</b></span></a>
       <div class="row clearfix" style="padding-top: 10px;">
                    <div class="col-lg-6 col-md-6 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="inner-box">
                            <h6  style="font-size:15px;"><b>Schedule Date</b></h6>
                                <div class="text">
                               

                                @foreach($edit_event->schedule_date as $date ) 

                                <p><img src="{{ asset('assets/images/date.png') }}" style="height:16px; width:16px;">&nbsp;{{ $date}}</p>
                                
                                    @endforeach
                                                                
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="inner-box">
                            <h6 style="font-size:15px;"><b>Schedule Activity</b></h6>
                                <div class="text">
                              


@foreach($edit_event->schedule_activity as $activity ) 

<p>{{ $activity}}</p>
   
    @endforeach
                             

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </li>




                    
                    <br>
      
    </ul>
</div>

</div>-->

                        </div>
                    </div>
                </div>
            </div>
          
        </section>
        </div>
    </form>
       
        <!-- sidebar-page-container end -->


   



        <!--Scroll to top-->
        


     <div id="myModal" class="modal">

            <div class="modal-content width">
                <span class="close">×</span>
                <section class="contact-style-two sec-pad" >
                    <div class="auto-container">
                        <div class="">
                            <div class="sec-title centred" style="margin-bottom: 10px !important;">
                                
                                <h2>Schedule</h2>
                                <div class="title-shape"></div>
                             
                            </div>

                            <table>
                                <tr style="background-color: #dddddd; text-align: center !important;">
									 <th>Activity</th>
                                    <th>Date</th>
                                   

                                </tr>
									@foreach($edit_event->schedule_activity as $key=> $activity ) 
                                <tr>
									
                                    <td>{{ $activity}}</td>
									<td align="center">{{date('d M Y', strtotime($edit_event->schedule_date[$key]))}}</td>
									
								
                                </tr>
									 @endforeach
                               
                            </table>

                        </div>

                        <div class="map-inner">
                            <div class="google-map" id="contact-google-map" data-map-lat="40.712776"
                                data-map-lng="-74.005974" data-icon-path="assets/images/icons/map-marker.png"
                                data-map-title="Brooklyn, New York, United Kingdom" data-map-zoom="12" data-markers='{
                                    "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                }'>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>


        <div id="event_closed_model" class="modal">

            <div class="modal-content width">
                <span class="close2">×</span>
                <section class="contact-style-two sec-pad" style="padding-top:0px; padding-bottom: 0px;">
                    <div class="auto-container">
                        <div class="form-inner" style="padding-bottom: 35px;">
                            <div class="sec-title centred">
                                <h3>Event Closed</h3>
                                <div class="title-shape"></div>
                                <div class="model-body">
                                    <p> Entry to this event is now closed.</p>
                                    <p>Contact us on <a href="mailto:info@mvrmotorsports.com">info@mvrmotorsports.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

       

<script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        var modal2 = document.getElementById('event_closed_model');
        var btn2 = document.getElementById("event_closed_model_btn");
        var span2 = document.getElementsByClassName("close2")[0];
        btn2.onclick = function () {
            modal2.style.display = "block";
        }
        span2.onclick = function () {
            modal2.style.display = "none";
        }
        window.onclick = function (event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
    </script>

        @stop








