<?php

namespace App\Http\Livewire;

use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class NoticeboardController extends Component
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title'=> 'required',
            'description' => 'required',
            'notice' => 'required|mimes:pdf|max:10000',
        ])->validate();
        $fileName = Carbon::now()->timestamp. '.' . $request->notice->extension();
     
        $request->notice->storeAs('public/notices', $fileName);

        $user= new Notice();
        $user->title = $request->title;
        $user->description = $request->description;
        $user->notice = $fileName;
        $user->save();
            return back()->with('message','Notice created successfully!');
    }


    public function render()
    {
        return view('livewire.noticeboard-controller');
    }
}
