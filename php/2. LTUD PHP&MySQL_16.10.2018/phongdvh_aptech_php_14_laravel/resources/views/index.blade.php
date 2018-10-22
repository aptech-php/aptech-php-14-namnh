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
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
    <form action="{{asset('/users')}}" method="post">
    <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
    <div class="form-group">
    <label for="name">Name (*)</label>
    <input class="form-control" type="text" placeholder="Name" id="name" name="name" >
    </div>
    <div class="form-group">
    <label for="email">Email (*)</label>
    <input class="form-control" type="text" placeholder="Email" id="email" name="email" >
    </div>
    <div class="form-group">
    <label for="password">Password (*)</label>
    <input class="form-control" type="password" placeholder="password" id="password" name="password">
    </div>
    <div class="d-flex justify-content-between w-100">
    <button class="btn" type="submit">Đăng ký</button>
    <a href="{{asset('users')}}" class="btn btn-primary">Quay về trang chủ</a>
    </div>
    </form>
    </div>
    </div>
</div>
</body>
</html>