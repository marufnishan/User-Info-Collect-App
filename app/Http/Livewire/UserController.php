<?php

namespace App\Http\Livewire;

use App\Models\Userinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class UserController extends Component
{
    use WithPagination;
    public $searchUser;
    public $filter =2;

    public $name;
    public $fathername;
    public $mothername;
    public $trainingname;
    public $cirtificateno;
    public $village;
    public $postoffice;
    public $province;
    public $district;
    public $nid;
    public $birthdate;
    public $phone;
    public $parentphone;
    public $emailfb;
    public $picture;

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name'=> 'required',
            'trainingname' => 'required',
        ])->validate();
  
        Userinfo::create($request->all());
            return back()->with('message','Profile created successfully!');
    }

    public function delete($id)
    {
        Userinfo::find($id)->delete();
        return back()->with('message', 'Profile Deleted Successfully!');
    }

    public function render()
    {
        $search = '%'.$this->searchUser.'%';
        return view('livewire.user-controller',[
            'allusers' => Userinfo::where('name','like', $search)->paginate($this->filter)
        ]);
    }
    
}
