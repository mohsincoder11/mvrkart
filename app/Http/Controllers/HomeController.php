<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;
use Mail;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $slider_image=DB::table('banners')->where('status','active')->orderby('id','desc')->get();
        return view('Home.home',compact('slider_image'));
    }
   

    public function philosophy_index()
    {
        return view('Philosophy.philosophy');

    }

    public function gallery_index()
    {
        return view('Gallery.gallery');

    }

    public function contact_index()
    {
       
        return view('Contact.contact');

    }
    public function save_contact_form(Request $request )
    {
        $insert=ContactModel::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'city' => $request['city'],
            'phone_number' => $request['phone_number'],
            'message' => $request['message'],
            
        ]);
        $registration_data=['contact_data'=>$request];
        Mail::send('contact-mail', $registration_data, function($message) use($request) {
         $message->to('info@mvrmotorsports.com', 'Kart 1')->subject
            ('New Enquiry');
         $message->from('info@mvrmotorsports.com','Kart 1');
        });
    
            return response()->json(1);
    }
	
	 public function faq_index()
    {
        return view('FooterPages.faq');

    }
	
	 public function terms_index()
    {
        return view('FooterPages.terms');

    }
	
	 public function refund_index()
    {
        return view('FooterPages.refund');

    }
	
	 public function privacy_index()
    {
        return view('FooterPages.privacy');

    }
}
