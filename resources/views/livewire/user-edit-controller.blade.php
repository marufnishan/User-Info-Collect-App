<div>
    <!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                @if(Auth::user()->utype === 'Admin')
                <a href="{{ route('allusers') }}"><button class="btn btn-success">All Users</button></a>
                @endif
            </h2>
        </x-slot>
        
        @if ($message = Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close pe-5" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 10px">
                    <form  wire:submit.prevent="update" enctype="multipart/form-data">
                        
                        <div>
                            <x-jet-label for="name" class="block mt-2 w-full" value="{{ __('পরীক্ষার্থীর নাম') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name"  wire:model="name" />
                            @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <div>
                            <x-jet-label for="fathername" class="block mt-2 w-full" value="{{ __('পিতার নাম ') }}" />
                            <x-jet-input id="fathername" class="block mt-1 w-full" type="text" name="fathername" :value="old('fathername')"  autofocus autocomplete="fathername"  wire:model="fathername" />
                            @error('fathername') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
    
                        <div>
                            <x-jet-label for="mothername" class="block mt-2 w-full" value="{{ __('মাতার নাম') }}" />
                            <x-jet-input id="mothername" class="block mt-1 w-full" type="text" name="mothername" :value="old('mothername')"  autofocus autocomplete="mothername"  wire:model="mothername"/>
                            @error('mothername') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
    
                        <div>
                            <x-jet-label for="trainingname" class="block mt-2 w-full" value="{{ __('প্রশিক্ষণের নাম') }}" />
                            <x-jet-input id="trainingname" class="block mt-1 w-full" type="text" name="trainingname" :value="old('trainingname')"  autofocus autocomplete="trainingname" wire:model="trainingname"/>
                            @error('trainingname') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <x-jet-label for="cirtificateno" class="block mt-2 w-full" value="{{ __('সনদ পত্র নং') }}" />
                            <x-jet-input id="cirtificateno" class="block mt-1 w-full" type="text" name="cirtificateno" :value="old('cirtificateno')"  autofocus autocomplete="cirtificateno" wire:model="cirtificateno" />
                            @error('cirtificateno') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <div>
                            <x-jet-label for="village" class="block mt-2 w-full" value="{{ __('গ্রাম / রোড নং') }}" />
                            <x-jet-input id="village" class="block mt-1 w-full" type="text" name="village" :value="old('village')"  autofocus autocomplete="village" wire:model="village" />
                            @error('village') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
    
                        <div>
                            <x-jet-label for="postoffice" class="block mt-2 w-full" value="{{ __('ডাকঘর') }}" />
                            <x-jet-input id="postoffice" class="block mt-1 w-full" type="text" name="postoffice" :value="old('postoffice')"  autofocus autocomplete="postoffice" wire:model="postoffice" />
                            @error('postoffice') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
    
                        <div>
                            <x-jet-label for="province" class="block mt-2 w-full" value="{{ __('উপজেলা') }}" />
                            <x-jet-input id="province" class="block mt-1 w-full" type="text" name="province" :value="old('province')"  autofocus autocomplete="province" wire:model="province" />
                            @error('province') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <x-jet-label for="district" class="block mt-2 w-full" value="{{ __('জেলা') }}" />
                            <x-jet-input id="district" class="block mt-1 w-full" type="text" name="district" :value="old('district')"  autofocus autocomplete="district" wire:model="district" />
                            @error('district') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <x-jet-label for="nid" class="block mt-2 w-full" value="{{ __('জাতীয় পরিচয় পত্র নম্বর') }}" />
                            <x-jet-input id="nid" class="block mt-1 w-full" type="text" name="nid" :value="old('nid')"  autofocus autocomplete="nid" wire:model="nid" />
                            @error('nid') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
            
                        <div>
                            <x-jet-label for="birthdate" class="block mt-2 w-full" value="{{ __('জন্মতারিখ') }}" />
                            <x-jet-input id="birthdate" class="block mt-1 w-full" type="text" name="birthdate" :value="old('birthdate')"  autofocus autocomplete="birthdate" wire:model="birthdate" />
                            @error('birthdate') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
    
                        <div>
                            <x-jet-label for="phone" class="block mt-2 w-full" value="{{ __('মোবাইল(ব্যক্তিগত)') }}" />
                            <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"  autofocus autocomplete="phone" wire:model="phone" />
                            @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
    
                        <div>
                            <x-jet-label for="parentphone" class="block mt-2 w-full" value="{{ __('মোবাইল(অভিভাবক)') }}" />
                            <x-jet-input id="parentphone" class="block mt-1 w-full" type="text" name="parentphone" :value="old('parentphone')"  autofocus autocomplete="parentphone" wire:model="parentphone" />
                            @error('parentphone') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <x-jet-label for="emailfb" class="block mt-2 w-full" value="{{ __('ই-মেইল / ফেসবুক আইডি') }}" />
                            <x-jet-input id="emailfb" class="block mt-1 w-full" type="text" name="emailfb" :value="old('emailfb')"  autofocus autocomplete="emailfb" wire:model="emailfb" />
                            @error('emailfb') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
    
                        <div>
                            <x-jet-label for="newpicture" class="block mt-2 w-full" value="{{ __('ছবি') }}" />
                            <x-jet-input id="newpicture" class="block mt-1 p-3 w-full" type="file" name="newpicture" :value="old('newpicture')"  autofocus autocomplete="newpicture" wire:model="newpicture" />
                        </div>
            
                        <div class="flex items-center justify-end mt-4">
                            <x-jet-button class="ml-4">
                                {{ __('সংশোধন করুন') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>
</html>

</div>