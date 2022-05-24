<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSS only -->
        @livewireStyles
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Document</title>

    </head>

    <body>
        @if ($message = Session::get('message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close pe-5" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close pe-5" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                @if(Auth::user()->utype === 'Admin')
                <a href="{{ route('dashboard') }}"><button class="btn btn-success">Add New Student</button></a>
                @endif
            </h2>
        </x-slot>
        <div class="container p-5">
            <div class="panel md-whiteframe-2dp">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-panel-success">
                            <thead>
                                <div class="d-flex">
                                    <input type="text" class="me-3 mb-3" placeholder="Search By Name ...."
                                        style="border-radius: 5px" wire:model="searchUser">
                                    <Select class="me-3 mb-3" style="border-radius: 5px" wire:model="filter">
                                        <option value="">Per Page</option>
                                        <option value="5">5 Per Page</option>
                                        <option value="10">10 Per Page</option>
                                        <option value="15">15 Per Page</option>
                                    </Select>
                                </div>
                                <tr>
                                    <th>No.</th>
                                    <th>পরীক্ষার্থীর নাম</th>
                                    <th>পিতার নাম</th>
                                    <th>মাতার নাম</th>
                                    <th>প্রশিক্ষণের নাম</th>
                                    <th>সনদ পত্র নং</th>
                                    <th>গ্রাম / রোড নং</th>
                                    <th>ডাকঘর</th>
                                    <th>উপজেলা</th>
                                    <th>জেলা</th>
                                    <th>জাতীয় পরিচয় পত্র নম্বর</th>
                                    <th>জন্মতারিখ</th>
                                    <th>মোবাইল(ব্যক্তিগত)</th>
                                    <th>মোবাইল(অভিভাবক)</th>
                                    <th>ই-মেইল / ফেসবুক আইডি</th>
                                    <th>ছবি</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allusers as $user)
                                <tr ng-repeat="education in educationList" class="ng-scope" style="">
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->fathername}}</td>
                                    <td>{{$user->mothername}}</td>
                                    <td>{{$user->trainingname}}</td>
                                    <td>{{$user->cirtificateno}}</td>
                                    <td>{{$user->village}}</td>
                                    <td>{{$user->postoffice}}</td>
                                    <td>{{$user->province}}</td>
                                    <td>{{$user->district}}</td>
                                    <td>{{$user->nid}}</td>
                                    <td>{{$user->birthdate}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->parentphone}}</td>
                                    <td>{{$user->emailfb}}</td>
                                    <td>{{$user->picture}}</td>
                                    <td class="d-flex"><a href="{{route('edit',['user_id'=>$user->id])}}"><button class="btn btn-secondary m-2">Edit</button></a><button
                                            class="btn btn-danger m-2"
                                            wire:click="delete({{ $user->id }})">Delete</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $allusers->links() }}
                </div>
            </div>
            <!-- JavaScript Bundle with Popper -->
            @livewireScripts
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
                crossorigin="anonymous">
            </script>

            <style>
                th {
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    border: 2px solid black;
                }

                ,

            </style>

    </body>

    </html>

</div>
