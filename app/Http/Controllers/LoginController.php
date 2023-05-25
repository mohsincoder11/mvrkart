<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class LoginController extends Controller
{
  

    public function post_login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/locations');
        }
        return redirect()->back()->with(['error'=>'Invalid email or password']);
    }

    public function logout(){
        auth()->logout();

        return redirect()->route('login')->with(['success'=>'Log out successfully']);

    }

}
