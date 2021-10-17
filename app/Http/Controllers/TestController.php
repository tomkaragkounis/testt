<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Contact;
use Illuminate\Support\Facades\Redirect;


class TestController extends Controller
{
    //testpage
    public function test() {
        
        $projects = Project::all();
        
        return view('testview', compact('projects'));
    }
    
    public function submitmail(Request $request) {
        
        $validated = $request->validate([
        'email' => 'required'
        ]);
        
        
        $contact = new Contact;
        
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->phone;
        $contact->message = $request->message;
        
        $contact->save();
        
       return redirect('/test#contact')->with('messagef','Your message was sent');
        
    }
}


