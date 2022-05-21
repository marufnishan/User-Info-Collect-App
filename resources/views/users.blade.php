<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <x-app-layout>

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
                                    <input type="text" class="me-3 mb-3" placeholder="Search...." style="border-radius: 5px"> 
                                    <div class="dropdown" class="me-3 mb-3">
                                        <button class="btn btn-secondary dropdown-toggle text-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          Dropdown button
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                          <li><a class="dropdown-item" href="#">Action</a></li>
                                          <li><a class="dropdown-item" href="#">Another action</a></li>
                                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                      </div>
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
                                <td class="d-flex"><button class="btn btn-secondary m-2">Edit</button><button class="btn btn-danger m-2">Delete</button></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                    
    </x-app-layout>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <style>
        th{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            border: 2px solid black;
        },
    </style>
</body>

</html>
