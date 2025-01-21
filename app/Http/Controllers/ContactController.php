<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactVal;
use App\Models\Contact;
use App\Models\Profile;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        return view('contact',compact('profiles'));
    }
    public function store(ContactVal $request){
        $fields = $request->validated();
        Contact::create($fields);
        return redirect()
        ->back()
        ->with('success','Feedback sent successfully');
    }
}
