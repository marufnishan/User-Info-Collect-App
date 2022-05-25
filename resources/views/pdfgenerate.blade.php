<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <style>
        @font-face {
            font-family: 'Nikosh';
            src: url({{ storage_path('fonts\Nikosh.ttf') }}) format("truetype");
			font-style: normal;
            font-variant: normal;
        }
        #usr{
            font-family: sans-serif,'Nikosh';
            font-size: 6px;
            border-collapse: collapse;
            width: 100%
        }
        #usr td,#usr th{
            font-family: 'Nikosh';
            border: 1px solid #ddd;
            padding: 2px;
            text: center;
        }
        #usr tr:nth-child(even){
            background-color: #0bfdfd;
        }

        #usr th{
            text-align: left;
            background-color: rgb(20, 17, 17);
            color: bisque;
        }

        body{
            font-family: 'Nikosh';
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <table id="usr">
        <thead>
            <tr>
                <th>No.</th>
                <th>Student Name</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Training Name</th>
                <th>Cirtificate Name</th>
                <th>Village / Road No</th>
                <th>Postoffice</th>
                <th>Upozilla</th>
                <th>Zilla</th>
                <th>Nid No</th>
                <th>Birth Date</th>
                <th>Phone(Personal)</th>
                <th>Phone(Parent)</th>
                <th>Email / Fb Id</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allusers as $index=>$user)
            <tr>
                <td>{{$index+1}}</td>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>