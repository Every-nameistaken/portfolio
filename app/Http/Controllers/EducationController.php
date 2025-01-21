<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationVal;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index(){
       $edus =  Education::all();
       $experiences = Experience::all();
       $profiles = Profile::all();


    //    $job_descriptions = json_decode($experiences->job_description);
        return view('resume', compact('profiles','edus','experiences'));
    }
    public function store(EducationVal $requst){

        try{
            $fields = $requst->validated();
            Education::create($fields);
            return redirect()
            ->back()
            ->with('edu_success','Education updated succesfully');
        } catch(Exception $exception){
            return redirect()
            ->back()
            ->withErrors(['err' => $exception]);

        }



    }
}
