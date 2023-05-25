

@extends('layout1')
@section('content1')

        <!-- sidebar-page-container -->
        <form>
            {{-- <input type="text" name="id" value={{ $edit_event->id }} --}}



       
        <section class="sidebar-page-container" style="padding-bottom:20px !important; padding-top:40px !important; background-color:#fff8f8">
            <div class="auto-container">
                <h4> <b style="color:black;">{{  $edit_event->event_name }}</b> </h4><br>
                <div class="row clearfix">
                    
                        
                 

                    <div class="col-lg-7 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="inner-box">
                                <figure class="image-box" ><img
                                    src="{{ asset('assets1/images/event/'.$edit_event->event_banner_image) }}" alt=""></figure>
                                <div class="text" style="text-align: justify;">
                                   
                                        {!!$edit_event->description  !!}


                                    <div class="btn-box">
                                        {{-- {{  now()->format('d-m-y') }} --}}
                                     
                                        {{-- @if ($edit_event->type_of_event==1)
                                        
                                         <a href="{{ route('register') }}" class="theme-btn">REGISTER NOW</a>   
                                        @else
                                         <a href="{{ route('register2') }}" class="theme-btn">REGISTER NOW</a>  

                                        @endif --}}

                                        {{-- <p style="color:red">Sorry!... Registration for this event has been closed!... </p>
                                              --}}
                                         
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-1 col-md-12 col-sm-12"></div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">

                            <div class="sidebar-widget category-widget" >

                                <div class="widget-content">
                                    <ul class=" clearfix"><br>
                                    <li ><div class="row">
										<div class="col-md-6"><i class="fa fa-calendar" aria-hidden="true" style="color:red;"></i> <b style="color:black; font-size:15px;">&nbsp;Event Date : </b> </div><div class="col-md-6"><span><b style="color:black; padding-left: 20px; font-size:15px;" >{{date('d M Y', strtotime($edit_event->event_date))}}</b> </span> </div> </div></li>
                                        <hr>
                                        <li><div class="row">
										<div class="col-md-6"><i class="fa fa-location-arrow" aria-hidden="true" style="color:red;"></i> <b style="color:black; font-size:15px;">&nbsp;Event Location : </b> </div><div class="col-md-6"><span> <b style="color:black; padding-left: 20px; font-size:15px;">{{ $edit_event->location }}</b> </span> </div> </div></li>   <br>
                                       
                                    </ul>
                                </div>
                                
                            </div>



                        </div>
                    </div>
                </div>
            </div>
          
        </section>
        </div>
    </form>
       
        <!-- sidebar-page-container end -->


   



        <!--Scroll to top-->
      
        @stop








