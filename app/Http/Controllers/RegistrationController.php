<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use Activation;
use Mail;


class RegistrationController extends Controller
{
    public function register()
    {
    	return view('auth.register');
    }

    public function createDoctor(Request $request)
    {
      $this->validate($request,[
                'name' => 'required',
                'username' => 'required|unique:users|min:3',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5|max:20|confirmed',
                'password_confirmation' => 'required|min:5|max:20',
            ]);
        
		$user = Sentinel::register($request->all());
        $activation = Activation::create($user);
		$role = Sentinel::findRoleBySlug('doctor');
		$role->users()->attach($user);

        $this->sendEmail($user,$activation->code);
		
		return redirect()->back()->with(['success' => 'Registration successful. Please check your email to activate your account:)']);
// 		dd($request);

    }

    private function sendEmail($user,$code)
    {
        Mail::send('emails.activation', [
                'user' => $user,
                'code' => $code
            ],function($message) use ($user){
                $message->to($user->email);
                $message->subject("Hello $user->name , Activate your account.");
            });
    }
}
