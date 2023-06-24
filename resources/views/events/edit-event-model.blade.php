 <div class="modal-header">
     <h5 class="modal-title">Edit Event</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
     <div class="card">
         <div class="card-body">

             <div class="row">
                 <form class="row g-2" action="{{ route('update-event') }}" method="POST"
                     enctype="multipart/form-data">
                     @csrf
<input type="hidden" name="event_id" value="{{ $edit_event->id }}">
                     <div class="col-md-3">
                         <label>Event Name</label>
                         <input class="form-control mb-3" value="{{$edit_event->event_name}}" name="event_name" type="text" placeholder="Event Name">
                     </div>
                     <div class="col-md-3">
                         <label>Add Location</label>
                         <select class="form-select" name="location_id">
                             <option>Select Location</option>
                             @foreach ($loc as $loc)
                                 <option value={{ $loc->id }}
                                    @if($edit_event->location_id==$loc->id)
                                    {{'selected'}}
                                    @endif
                                    
                                    >{{ $loc->location }}
                                 </option>
                             @endforeach
                         </select>
                     </div>
                     <div class="col-md-3">
                         <label>Add Fees</label>
                         <input class="form-control mb-3" value="{{$edit_event->add_price}}" name="add_price" type="text" placeholder="Fees">
                     </div>
                     <div class="col-md-3">
                         <label>Select Type Of Event</label>
                         <select class="form-select mb-3" name="type_of_event" aria-label="Default select example">
                             <option selected>Select</option>
                             <option value="2"
                              @if($edit_event->type_of_event==2)
                                    {{'selected'}}
                                    @endif
                                    >General</option>
                             <option value="1"
                              @if($edit_event->type_of_event==1)
                                    {{'selected'}}
                                    @endif
                                    >College</option>

                         </select>
                     </div>
                     <div class="col-md-3">
                         <label>Event Date</label>
                         <input class="form-control mb-3" value="{{$edit_event->event_date}}" name="event_date" type="date">
                     </div>

                     <div class="col-md-3">
                         <label><b><span style="color:red">Registration Closing
                                     Date</span></b></label>
                         <input class="form-control mb-3" value="{{$edit_event->closing_date}}" name="closing_date" type="date">
                     </div>
                     <div class="col-md-3">
                         <label>Event Front Image (250*250px)</label>
                         <input type="file" name="event_front_image" class="form-control mb-3" accept="image/*"
                             > 
                             <img style="border:1px solid #c4c4c4;height: 40px;width:40px;" src="{{asset('assets1/images/event/'.$edit_event->event_front_image)}}" alt="">
                     </div>

                     <div class="col-md-3">
                         <label>Event Banner Image (730*500px)</label>
                         <input type="file" name="event_banner_image" class="form-control mb-3" accept="image/*"
                             >
                             <img style="border:1px solid #c4c4c4;height: 40px;width:40px;" src="{{asset('assets1/images/event/'.$edit_event->event_banner_image)}}" alt="">
                            
                     </div>

                     <div class="col-md-3">
                         <label>Event Rule Book
                         </label>

                         <input type="file" name="event_rule_book" class="form-control mb-3"
                             accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" >
                            <a target="_blank" href="{{asset('assets1/images/event/'.$edit_event->event_rule_book)}}"> <label for="">{{$edit_event->event_rule_book}}</label></a>

                     </div>
                     <div class="col-md-3 mt-4">
                        <label for="toggle-pay-later">Allow Pay Later?</label>
                        <label class="switch s-outline s-outline-primary  mr-2" style="display: inline-block;">
                          <input type="checkbox" name="allow_pay_later" value="1" id="toggle-pay-later" @if($edit_event->allow_pay_later=='1') checked @endif>
                          <span class="slider round"></span>
                        </label>
                      </div>

                     <div class="col-md-12">
                         <label>Description</label>
                         <textarea class="form-control mb-3 description" name="description" id="description" rows="6" cols="50"
                             placeholder="Enter the Description">{!!$edit_event->description  !!}</textarea>
                     </div>

                     <div class="col-md-3">
                         <label>Add Schedule Date</label>
                         <input class="form-control mb-3" type="date" id="shedule_date">
                     </div>

                     <div class="col-md-3">
                         <label>Add Schedule Activity</label>
                         <input class="form-control mb-3" type="text" placeholder=" Activity" id="shedule_activity">
                     </div>

                     <div class="col-md-1" style="margin-top: 3.5%;">
                         <button type="button" class="btn btn-success add-row"><i class="lni lni-circle-plus"></i>
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
                                @foreach ($edit_event->schedule_date as $key=>$sd)
                                     <tr>
                                    <td>
<input type="text" value="{{$sd}}" name="schedule_date[]" required="" style="border:none; width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" value="{{$edit_event->schedule_activity[$key]}}" name="schedule_activity[]" required="" style="border:none; width: 100%;">

                                    </td>
                                    <td><button type="button" class="btn1 btn-outline-danger delete-row"><i class="bx bx-trash me-0"></i></button></td>
                                </tr>
                                @endforeach
                               
                             </tbody>
                         </table>
                     </div>

                     <div class="col-md-2" style="margin-top: 3.5%;">
                         <button type="submit" class="btn btn-success" style="margin-left:45%;">Save</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
