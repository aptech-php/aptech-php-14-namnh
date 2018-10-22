<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fruid">
        <div class="row">
            <div class="col-12">
            <table class="table border">
            <thead>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Created Date</th>
            <th>Updated Date</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td><a class="btn btn-warning" href="{{asset('/users/'.$user->id.'/edit')}}">Edit</a><a class="btn btn-danger" href="{{asset('/users/'.$user->id.'/delete')}}">Delete</a></td>
            </tr>
            </tbody>
            </table>
            <a href="{{asset('users')}}" class="btn btn-primary">Quay về trang chủ</a>
            </div>
        </div>
    </div>
</body>
</html>