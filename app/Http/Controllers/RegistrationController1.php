<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration\Registration1;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use App\Models\Event;
use Mail;

$client = new Client();

class RegistrationController1 extends Controller
{
    protected $working_key='FB39DAA6A1AC1A97A28A19208F42C4DB';//Shared by CCAVENUES
   
   
    public function register(Request $request)
    {

        $event=Event::find($request->id);
        $amount=$event->add_price;
        $event_id=$event->id;
        return view('events.register1',compact('amount','event_id'));
    }
    public function register_pay_later1(Request $request)
    {

        $event=Event::find($request->id);
        $event_id=$event->id;
        return view('events.register-pay-later',compact('event_id'));
    } 
    
    public function insert(Request $request)
    {
       

        
        // $validator = Validator::make(
        //     $request->all(),
        //     [
        //         'contact_number' => ['required|max:10'],
        //         'email'=>['unique'],
              
    
              
        //     ],
        //                 [
        //                 'mobile.required' => 'Please enter documents.',
        //                 'email'=>'must be contain special character',
                      
                    
        //                 ]
        //             ); 
    
        //             if ($validator->fails()) {
        //               $error = '';
        //               $messages = $validator->messages();
        //               foreach ($messages->all() as $message) {
        //                   $error .= $message . "<br>";
        //               }
        //               return redirect()->back()->with(['error'=>$error]);
                  
        //               }
     

        $store = new Registration1;
            
        
        // Save event details in database
        $store->team_name = $request->team_name;
        $store->college_name =$request-> college_name;
        $store->city = $request->city;
        $store -> state = $request->state;
        $store -> logo = $request-> logo;
        $store -> guide_name = $request->guide_name;
        $store -> team_memeber = $request->team_memeber;
        $store -> contact_number = $request->contact_number;
        $store -> email = $request->email;
        $store -> category = $request->category;
        $store -> college_id = $request->college_id; 
        $store -> payment_status = 'Pending';
        $store -> order_id = $request->order_id;
        $store -> event_id = $request->event_id;


        
        
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets1/images/registration1'), $filename);
            $store->logo= $filename;
        }
        if ($request->hasFile('college_id')) {
            $file = $request->file('college_id');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets1/images/registration1'), $filename);
            $store->college_id= $filename;
        }
           
            $store->save();

        $merchant_data='';
 
        $request->request->remove('_token');
                foreach ($request->all() as $key => $value){
            $merchant_data.=$key.'='.$value.'&';
        }
      
        $access_code='AVWI28KC18AT80IWTA';//Shared by CCAVENUES
        $encrypted_data=$this->encrypt($merchant_data,$this->working_key); // Method for encrypting the data.
      
                return view('payment_page',compact('encrypted_data','access_code'));

    }


    public function insert_pay_later(Request $request)
    {
       

        $store = new Registration1;
            
        
        // Save event details in database
        $store->team_name = $request->team_name;
        $store->college_name =$request-> college_name;
        $store->city = $request->city;
        $store -> state = $request->state;
        $store -> logo = $request-> logo;
        $store -> guide_name = $request->guide_name;
        $store -> team_memeber = $request->team_memeber;
        $store -> contact_number = $request->contact_number;
        $store -> email = $request->email;
        $store -> category = $request->category;
        $store -> college_id = $request->college_id; 
        $store -> payment_status = 'Pending';
        $store -> order_id = $request->order_id;
        $store -> event_id = $request->event_id;


        
        
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets1/images/registration1'), $filename);
            $store->logo= $filename;
        }
        if ($request->hasFile('college_id')) {
            $file = $request->file('college_id');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets1/images/registration1'), $filename);
            $store->college_id= $filename;
        }
        $store->allow_pay_later='Pay Later';
            $store->save();

            $registration_data1=Registration1::where('id',$store->id)->first();
            $registration_data=['registration_data'=>$registration_data1];
                   Mail::send('success_mail', $registration_data, function($message) use($registration_data1) {
                    $message->to($registration_data1->email, $registration_data1->team_name)->subject
                       ('Registration success');
                    $message->from('info@mvrmotorsports.com','Kart 1');
                   });
                   // dd('success');
                   return redirect()->route('success-landing')->with(['success'=> 'Event subscribed successfully.']);
           

    }

    public function success_callback(Request $request)
    {
    $encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=$this->decrypt($encResponse,$this->working_key);		//Crypto Decryption used as per the specified working key.
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
    $payment_info=[];
    for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
        $payment_info[]=[
            $information[0]=>$information[1]
        ];
	}
  
        $registration_data1=Registration1::where('order_id',$payment_info[0]['order_id'])->first();
        $registration_data1->update(
            [
            'payment_status'=>$payment_info[3]['order_status'],
            'payment_info'=>$payment_info
            ]
        );
		  
        $registration_data=['registration_data'=>$registration_data1];
        Mail::send('success_mail', $registration_data, function($message) use($registration_data1) {
         $message->to($registration_data1->email, $registration_data1->team_name)->subject
            ('Registration success');
         $message->from('info@mvrmotorsports.com','Kart 1');
        });
        // dd('success');
        return redirect()->route('success-landing')->with(['success'=> 'Event subscribed successfully.']);


    
    }  
    
    public function cancel_callback(Request $request)
    {
    $encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=$this->decrypt($encResponse,$this->working_key);		//Crypto Decryption used as per the specified working key.
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
    $payment_info=[];
    for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
        $payment_info[]=[
            $information[0]=>$information[1]
        ];
	}
  
        Registration1::where('order_id',$payment_info[0]['order_id'])
        ->update(
            [
            'payment_status'=>$payment_info[3]['order_status'],
            'payment_info'=>$payment_info
            ]
        );
    
    // dd('cancel');
    return redirect()->route('cancel-landing')->with(['success'=> 'Something went wrong.']);

    //redirect to page or show error message
    }

    public function encrypt($plainText,$key){
    $key = $this->hextobin(md5($key));
	$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
	$openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
	$encryptedText = bin2hex($openMode);
	return $encryptedText;
    }

    function decrypt($encryptedText,$key)
{
	$key = $this->hextobin(md5($key));
	$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
	$encryptedText =  $this->hextobin($encryptedText);
	$decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
	return $decryptedText;
}

    function hextobin($hexString) 
 { 
	$length = strlen($hexString); 
	$binString="";   
	$count=0; 
	while($count<$length) 
	{       
	    $subString =substr($hexString,$count,2);           
	    $packedString = pack("H*",$subString); 
	    if ($count==0)
	    {
			$binString=$packedString;
	    } 
	    
	    else 
	    {
			$binString.=$packedString;
	    } 
	    
	    $count+=2; 
	} 
        return $binString; 
  } 


    public function registration1_table()
    {
        $general_all=Registration1::all();
        return view('events.registration1_table',compact('general_all'));
    }

    public function delete($id)
    {
        $data = Registration1::find($id);
        $data->delete();
        return back()->with(['error'=>'Record deleted successfully.']);
    }
	
	
	public function mail_test(){
        $registration_data1=Registration1::find(15);
        $registration_data=['registration_data'=>$registration_data1];
       
        Mail::send('success_mail', $registration_data, function($message) use($registration_data1) {
         $message->to($registration_data1->email, $registration_data1->team_name)->subject
            ('Registration success');
         $message->from('info@mvrmotorsports.com','Kart 1');
        });
        //return view('success_mail',compact('registration_data'));

    }

    public function success_landing(){
        return view('success_landing');
    }
    public function cancel_landing(){
        return view('cancel_landing');

    }
	
    }




