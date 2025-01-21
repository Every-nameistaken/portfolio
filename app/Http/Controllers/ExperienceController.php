<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceVal;
use App\Models\Experience;
use Exception;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
  public function store(ExperienceVal $request) {
    try{
        $request->validated();
        Experience::create([
            'role' => $request->rolee,
            'years' => $request->year,
            'address' => $request->address,
            'job_description' => json_encode($request->job_description),
            'ref_website' => $request->ref_website
        ]);
        return redirect()
        ->back()
        ->with('exp_success','Experience updated succesfully');
    }catch(Exception $exception){
        return redirect()
        ->back()
        ->withErrors(['err' => $exception]);
    }
  }
}
