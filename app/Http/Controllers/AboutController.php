<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Review;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $profiles = Profile::all();
        $testimonies = Review::all();
        return view('about',compact('profiles','testimonies'));
    }
}
