<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewVal;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function store(ReviewVal $request){
        $fields = $request->validated();
        $imgPath = Storage::disk('public')->put('review', $request->img);
        $fields['img'] = $imgPath;
        Review::create($fields);
        return redirect()->back()->with('success','Review sent!');

    }
}
