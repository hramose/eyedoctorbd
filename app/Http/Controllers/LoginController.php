<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoginController extends Controller
{
   public function login()
   {
   	return view('auth.login');
   }

   public function doLogin(Request $request)
   {
      $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
         ]);

   		try {
   			$rememberMe = false;
   			if (isset($request->remember_me)) 
   				$rememberMe = true;

   			     if (Sentinel::authenticate($request->all(), $rememberMe)) {

   			     	if (Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin')
   			     		return redirect()->route('adminDashboard');
   			     	elseif (Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'doctor')
   			     		return redirect()->route('doctorDashboard');

   			     } else {
   			     	return redirect()->back()->with(['error' => "Wrong Credentials."]);
   			     }
   			     

   		} catch (ThrottlingException $e) {
   			$delay = $e->getDelay();
   			return redirect()->back()->with(['error' => "You are banned for $delay seconds."]);
   		} catch (NotActivatedException $e){
   			return redirect()->back()->with(['error' => "Your account has not been activated yet."]);
   		}
   }

   public function logout()
   {
   		Sentinel::logout(null,true);
   		return back();
   }
}
