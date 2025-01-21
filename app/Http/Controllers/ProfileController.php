<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileVal;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\TryCatch;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        return view('admin.forms',compact('profiles'));
    }
    public function store(ProfileVal $request){
       $fields = $request->validated();

        Profile::updateOrCreate([
            'id' => 1
        ],$fields);
        return redirect()->back()->with('update_success','Profile Info Updated Successfully');
    }
    public function storeImg(Request $request){
        $request->validate([
            'img' => ['required','image','max:5000','mimes:png,jpg,webp,jpeg'],
        ]);
        $aboutImgPath = Storage::disk('public')->put('profile', $request->img);
        Profile::updateOrCreate([
            'id' => 1
        ],[
            'img' => $aboutImgPath
        ]);
        return redirect()->back()->with('img_success','Profile Info Updated Successfully');
    }
    public function storeIndex_Img(Request $request){
        $request->validate([
            'index_img' => ['required','image','max:5000','mimes:png,jpg,webp,jpeg'],
        ]);
        $indexImgPath = Storage::disk('public')->put('profile', $request->index_img);
        Profile::updateOrCreate([
            'id' => 1
        ],[
            'index_img' => $indexImgPath
        ]);
        return redirect()->back()->with('index_img_success','Profile Info Updated Successfully');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
