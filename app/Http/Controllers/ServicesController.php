<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesVal;
use App\Models\Services;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
   public function index() : View{
    $services = Services::latest()->get();
    return view('services', compact('services'));
   }
   public function store(ServicesVal $request) {
        $fields = $request->validated();
        Services::create($fields);
        return redirect()
        ->back()->with('success','Service added');
   }
}
