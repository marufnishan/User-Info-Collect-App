<?php

namespace App\Http\Controllers\Livewire;

use App\Http\Controllers\Controller;
use App\Models\Userinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name'=> 'required',
            'trainingname' => 'required',
        ])->validate();
  
        Userinfo::create($request->all());
            return redirect()->back()
            ->with(['message'=>'Profile Updated Successfully'],200);
    }

    public function index()
    {
        $allusers = Userinfo::all();
        return view('users',['allusers'=>$allusers]);
    }
}
