<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
   public function index()
   {
    return view('payment_gateway.dataFrom');
   }

   public function ccavrequest_handeler()
   {
    return view('payment_gateway.ccavRequestHandler');
   }
}
