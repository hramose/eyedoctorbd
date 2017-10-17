<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function addMessage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);
        
        $contact  = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->description = $request->description;
        $contact->save();
        return response(['message'=>'Message Successfully Send']);
    }

    public function viewMessage()
    {
        $messages = Contact::paginate(10);
        return view('admin.contact',compact('messages'));
    }
}
