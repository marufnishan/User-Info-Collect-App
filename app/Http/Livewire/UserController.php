<?php

namespace App\Http\Livewire;

use App\Models\Userinfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class UserController extends Component
{
    use WithPagination;
    use WithFileUploads;
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
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ])->validate();
        $imageName = Carbon::now()->timestamp. '.' . $request->picture->extension();
     
        $request->picture->storeAs('public/images', $imageName);

        $user= new Userinfo();
        $user->name = $request->name;
        $user->fathername = $request->fathername;
        $user->mothername = $request->mothername;
        $user->trainingname = $request->trainingname;
        $user->cirtificateno = $request->cirtificateno;
        $user->village = $request->village;
        $user->postoffice = $request->postoffice;
        $user->province = $request->province;
        $user->district = $request->district;
        $user->nid = $request->nid;
        $user->birthdate = $request->birthdate;
        $user->phone = $request->phone;
        $user->parentphone = $request->parentphone;
        $user->emailfb = $request->emailfb;
        $user->picture = $imageName;
        $user->save();
            return back()->with('message','Profile created successfully!');
    }

    public function delete($id)
    {
        Userinfo::find($id)->delete();
        return back()->with('message', 'Profile Deleted Successfully!');
    }

    public function  download($id){
        $user =Userinfo::find($id);
        $path = public_path('storage/images').'/'.$user->picture;
        return response()->download($path);
    }

    public function render()
    {
        $search = '%'.$this->searchUser.'%';
        return view('livewire.user-controller',[
            'allusers' => Userinfo::where('name','like', $search)->paginate($this->filter)
        ]);
    }
    
}
