<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Activation;
use App\User;
use Sentinel;

class ActivationController extends Controller
{
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
