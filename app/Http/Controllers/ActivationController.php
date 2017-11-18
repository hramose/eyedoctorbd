<?php

namespace App\Http\Controllers;

use App\User;
use Sentinel;
use Activation;
use Illuminate\Http\Request;

class ActivationController extends Controller
{

	public function index()
	{
		$activations = Activation::all();
		return view('admin.activation',compact('activations'));
	}

	public function activatedByAdmin($id,$code)
	{
		$user = User::find($id);

		if (Activation::complete($user,$code)) {
			 return redirect(route('activation'))->with('successMsg','User Successfully Activated');      
		} else {
			 return redirect(route('activation'))->with('errorMsg','Somthing not right try again :(');      

		}
		
	}

    public function activate($email,$activationCode)
    {
    	$user = User::whereEmail($email)->first();

    	if (Activation::complete($user,$activationCode)) {
    		return redirect(route('login'))->with(['activationMsg' => 'Your account has been successfully activated. You can login now :)']);
    	} else {
    		# code...
    	}
    	
    }
}
