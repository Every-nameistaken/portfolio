<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Notifications\ContactToMe;
use Illuminate\Http\Request;
// use App\Notifications\contact;
use App\Notifications\contact;
use App\Http\Requests\ContactVal;
use App\Models\Contact as ModelsContact;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        return view('contact',compact('profiles'));
    }
    public function store(ContactVal $request){
        $fields = $request->validated();
        $contact = ModelsContact::create($fields);

        $user = User::find(1);

        Notification::route('mail',$fields['email'])->notify(new contact($contact));
        $user->notify(new ContactToMe($contact));




        return redirect()
        ->back()
        ->with('success','Email sent successfully');
    }
}
