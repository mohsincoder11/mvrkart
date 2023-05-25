<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\Location;
Use \Carbon\Carbon;
use DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function event( Request $request)
    {

        // $date=Carbon::now()->format('y.m.d');
        // echo json_encode($date);
        // exit();
      $edit_event=Event::leftjoin('locations','locations.id','=','events.location_id') 
      ->select('events.*','locations.location')
        ->orderby('events.event_date','asc')
        ->where('event_date','>=',Carbon::now()->format('Y-m-d'))
        ->when($request->location, function ($q) use ($request) {
          return $q->where('location_id', $request->location);
      })
      ->when($request->event_name, function ($q) use ($request) {
        return $q->where('event_name', $request->event_name);
    })->get();

        $location=DB::table('locations')->orderby('location','asc')->get();
        $event_name=Event::when($request->location, function ($q) use ($request) {
          return $q->where('location_id', $request->location);
      })->where('event_date','>=',Carbon::now()->format('Y-m-d'))->orderby('event_name','asc')->groupBy('event_name')->get();

        return view('events.event',compact('edit_event','location','event_name'));
    }
    
   public function detail(request $request)
   {

    $edit_event=Event::leftjoin('locations','locations.id','=','events.location_id') 
    ->where('events.id',$request->id)
      ->select('events.*','locations.location')
        ->orderby('events.id','desc')
        ->first();    
      //  echo json_encode($edit_event);
       // echo json_encode($edit_event1);
       // exit();
        return view('events.event-detail1',compact('edit_event'));

   }






    public function past_event( Request $request)
    {

        $edit_event=Event::leftjoin('locations','locations.id','=','events.location_id') 
        ->select('events.*','locations.location')
          ->orderby('events.event_date','desc')
          ->where('event_date','<',Carbon::now()->format('Y-m-d'))
          ->when($request->location, function ($q) use ($request) {
            return $q->where('location_id', $request->location);
        })
        ->when($request->event_name, function ($q) use ($request) {
          return $q->where('event_name', $request->event_name);
      })->get();



   
        $location=DB::table('locations')->orderby('location','asc')->get();
        $event_name=Event::when($request->location, function ($q) use ($request) {
          return $q->where('location_id', $request->location);
      })->where('event_date','<',Carbon::now()->format('Y-m-d'))
        ->orderby('event_name','asc')->groupBy('event_name')->get();

        return view('events.past_event',compact('edit_event','location','event_name'));
    }







    public function past_event_detail(request $request)
    {
 
      $edit_event=Event::leftjoin('locations','locations.id','=','events.location_id') 
      ->where('events.id',$request->id)
        ->select('events.*','locations.location')
          ->orderby('events.id','desc')
          ->first();     
     
         return view('events.past_event_detail',compact('edit_event'));
 
    }
 






    public function index()
    {
        $events = Event::leftjoin('locations','locations.id','=','events.location_id')
        ->select('events.*','locations.location')
          ->orderby('events.id','desc')
          ->get();

          $loc=Location::all();
        return view('events.index', compact('events','loc'));

          // $branch_all=Branch::all();

    }

    public function edit_event(Request $request){
      $edit_event = Event::where('id',$request->id)->first();
      $loc=Location::all();

      $view= view('events.edit-event-model',['edit_event'=>$edit_event,'loc'=>$loc])->render();
      return response()->json($view);
    }

    public function update_event(Request $request){
      if(isset($request->schedule_date) && count($request->schedule_date)){
        if ($request->hasFile('event_rule_book')) {
          $event_rule_book = $request->file('event_rule_book');
        $event_rule_book_size = $event_rule_book->getSize();
        if ($event_rule_book_size > (1024*1024*6)) {
          return redirect()->route('events.index')->with(['error'=> 'Event rule pdf must be less than 6MB.']);
        }
      }
        $event = Event::find($request->event_id);
        $event -> event_name = $request->event_name;
        $event -> location_id = $request-> location_id;
        $event -> add_price = $request->add_price;
        $event -> type_of_event = $request->type_of_event;
        $event -> event_date = $request->event_date;
        $event -> closing_date = $request->closing_date;
        $event -> description = $request->description;
        $event -> schedule_date = $request->schedule_date;
        $event -> schedule_activity = $request->schedule_activity;
        if ($request->hasFile('event_front_image')) {
            $file1 = $request->file('event_front_image');
            $filename1 = 'f'.rand(1234,9999).time() . '.' . $file1->getClientOriginalExtension();
            $file1->move(public_path('assets1/images/event'), $filename1);
            $event->event_front_image= $filename1;
        }

        if ($request->hasFile('event_banner_image')) {
            $file2 = $request->file('event_banner_image');
            $filename2 = 'b'.rand(1234,9999).time() . '.' . $file2->getClientOriginalExtension();
            $file2->move(public_path('assets1/images/event'), $filename2);
            $event->event_banner_image= $filename2;
        }

        if ($request->hasFile('event_rule_book')) {
            $file3 = $request->file('event_rule_book');
            $filename3 = $file3->getClientOriginalName();
            $file3->move(public_path('assets1/images/event'), $filename3);
            $event->event_rule_book= $filename3;
        }
           
            $event->save();


            return redirect()->route('events.index')->with(['success'=> 'Event updated successfully.']);
          }else{
            return redirect()->route('events.index')->with(['error'=>'Add schedule to add event.']);

          }
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {

           

            //  echo_json_encode($event);
            //  exit();


    //          $filename='';
    // if($request->hasFile('event_front_image')){
    //     $file= $request->file('event_front_image');
    //     $filename=time().'.'.$file->getClientOriginalExtension();
    //     $file->move(public_path('assets1/images/event/'), $filename);
    //     $event->event_front_image= 'assets1/images/event/'.$filename;
    // }

    
    // $filename='';
    // if($request->hasFile('event_banner_image')){
    //     $file= $request->file('event_banner_image');
    //     $filename=time().'.'.$file->getClientOriginalExtension();
    //     $file->move(public_path('assets1/images/event/'), $filename);
    //     $event->event_banner_image= 'assets1/images/event/'.$filename;
    // }
       
    
        
            // $event_front_image = $request->file('event_front_image');
            // $event_front_imageName = time() . '.' . $event_front_image->extension();
            // $event_front_image->move(public_path('assets1/event'), $event_front_imageName);


            
                   
            
            // $event_banner_image = $request->file('event_banner_image');
            // $event_banner_imageName = time() . '.' . $event_banner_image->extension();
            // $event_banner_image->move(public_path('assets1/event'), $event_banner_imageName);

            
            // $filename='';
            // if($request->hasFile('event_rule_book')){
            //     $file= $request->file('event_rule_book');
            //     $filename=rand(0123,9999). time().'.'.$file->getClientOriginalExtension();
            //     $file->move(public_path('assets1/images/event/'), $filename);
            //     $event->event_rule_book= 'assets1/images/event/'.$filename;
            // }

           

            // $event_rule_book = $request->file('event_rule_book');
            // $event_rule_bookName = time() . '.' . $event_rule_book->extension();
            // $event_rule_book->move(public_path('assets1/event'), $event_rule_bookName);



        // Save event details in database
if(isset($request->schedule_date) && count($request->schedule_date)){
  if ($request->hasFile('event_rule_book')) {
    $event_rule_book = $request->file('event_rule_book');
  $event_rule_book_size = $event_rule_book->getSize();
  if ($event_rule_book_size > (1024*1024*6)) {
    return redirect()->route('events.index')->with(['error'=>'Event rule pdf must be less than 6MB.']);
  }
}

        $event = new Event;
        $event -> event_name = $request->event_name;
        $event -> location_id = $request-> location_id;
        $event -> add_price = $request->add_price;
        $event -> type_of_event = $request->type_of_event;
        $event -> event_date = $request->event_date;
        $event -> closing_date = $request->closing_date;
        $event -> description = $request->description;
        $event -> schedule_date = $request->schedule_date;
        $event -> schedule_activity = $request->schedule_activity;
        if ($request->hasFile('event_front_image')) {
            $file1 = $request->file('event_front_image');
            $filename1 = 'f'.rand(1234,9999).time() . '.' . $file1->getClientOriginalExtension();
            $file1->move(public_path('assets1/images/event'), $filename1);
            $event->event_front_image= $filename1;
        }

        if ($request->hasFile('event_banner_image')) {
            $file2 = $request->file('event_banner_image');
            $filename2 = 'b'.rand(1234,9999).time() . '.' . $file2->getClientOriginalExtension();
            $file2->move(public_path('assets1/images/event'), $filename2);
            $event->event_banner_image= $filename2;
        }

        if ($request->hasFile('event_rule_book')) {
            $file3 = $request->file('event_rule_book');
            $filename3 = $file3->getClientOriginalName();
            $file3->move(public_path('assets1/images/event'), $filename3);
            $event->event_rule_book= $filename3;
        }


           
            $event->save();


            return redirect()->route('events.index')->with(['success'=> 'Event created successfully.']);
          }else{
            return redirect()->route('events.index')->with(['error'=> 'Add schedule to add event.']);

          }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $events = Event::findOrFail($id);
        return view('events.show', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $events = Event::findOrFail($id);
        return view('events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
        'event_name' => 'required',
        'location' => 'required',
        'add_price' => 'required',
        'type_of_event' => 'required',
        'event_date' => 'required',
        'event_front_image' => 'required',
        'event_rule_book' => 'required',
        'description' => 'required',
        'schedule_date' => 'required',
        'schedule_activity' => 'required',
    ]);

    $event->update($validated);

    return redirect()->route('events.index')->with(['success'=> 'Event updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $events = Event::findOrFail($id);
        $events->delete();

        return redirect()->route('events.index')->with(['error'=> 'Event deleted successfully.']);
    }
}
