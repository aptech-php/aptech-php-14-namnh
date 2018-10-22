<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}} ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Bạn có chắc chắn muốn xong người dùng: {{$user->name}}?</p>
    <form action="{{asset('/users/'.$user->id)}}" method="post">
    <input type="hidden" name="_method" value="delete">{{csrf_field()}}
    <button type="submit" class="btn">Delete</button>
    <a class="btn" href="{{asset('/users/'.$user->id)}}">Cancel</a>
    </form>
</body>
</html>