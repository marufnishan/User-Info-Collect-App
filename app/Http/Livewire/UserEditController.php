<?php

namespace App\Http\Livewire;

use App\Models\Userinfo;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserEditController extends Component
{
    use WithFileUploads;
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

    public $newpicture;

    public function mount($user_id)
    {
        $this->user_id = $user_id;
        $user = Userinfo::findOrFail($user_id); 
        $this->name = $user->name;
        $this->fathername = $user->fathername;
        $this->mothername = $user->mothername;
        $this->trainingname = $user->trainingname;
        $this->cirtificateno = $user->cirtificateno;
        $this->village = $user->village;
        $this->postoffice = $user->postoffice;
        $this->province = $user->province;
        $this->district = $user->district;
        $this->nid = $user->nid;
        $this->birthdate = $user->birthdate;
        $this->phone = $user->phone;
        $this->parentphone = $user->parentphone;
        $this->emailfb = $user->emailfb;
        $this->picture = $user->picture; 

        return view('livewire.user-edit-controller');
    }

    public function update()
    {
        $this->validate([
            'name'=> 'required',
            'fathername' => 'required',
            'mothername' => 'required',
            'trainingname' => 'required',
            'cirtificateno' => 'required',
            'village' => 'required',
            'postoffice' => 'required',
            'province' => 'required',
            'district' => 'required',
            'nid' => 'required',
            'birthdate' => 'required',
            'phone' => 'required',
            'parentphone' => 'required',
            'emailfb' => 'required',
        ]);

        if($this->newpicture)
        {
            $this->validate([
                
                'newpicture' => 'required|mimes:jpeg,png'
            ]);
        }

        $user = Userinfo::find($this->user_id);
        $user->name = $this->name;
        $user->fathername = $this->fathername;
        $user->mothername = $this->mothername;
        $user->trainingname = $this->trainingname;
        $user->cirtificateno = $this->cirtificateno;
        $user->village = $this->village;
        $user->postoffice = $this->postoffice;
        $user->province = $this->province;
        $user->district = $this->district;
        $user->nid = $this->nid;
        $user->birthdate = $this->birthdate;
        $user->phone = $this->phone;
        $user->parentphone = $this->parentphone;
        $user->emailfb = $this->emailfb;

        if($this->newpicture)
        {
            $imageName = Carbon::now()->timestamp. '.' . $this->newpicture->extension();
            $this->newpicture->storeAs('public/images', $imageName);
            $user->picture = $imageName;
        }
        $user->save();
        return redirect('/all_users')->with('success','Profile Updated successfully!');
    }
    public function render()
    {
        return view('livewire.user-edit-controller');
    }
}
