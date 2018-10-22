

  

 

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
  <div class= "container-fluid" >
        
  </div>
  <div class= "container-fluid p-3" >
  <table class="table table-hover table-dark text-center">
  <thead>
    <tr  >
      <th scope="col">#</th>
      <th scope="col">Họ Tên</th>
      <th scope="col">email</th>
      <th scope="col">Mật Khẩu</th>
      <th scope="col">Ngày Tạo</th>
      <th scope="col">Ngày Update</th>
      <th scope="col">Tùy Chỉnh</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($abc as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name }}</td>
      <td>{{$user->email }}</td>
      <td>{{$user->password }}</td>
      <td>{{$user->created_at }}</td>
      <td>{{$user->updated_at }}</td>
      <td class="d-flex align-items-center justify-content-around">
      <form action=""    method="get"><button type="button" class="btn btn-primary">Xem</button>
      </form>
      <form action=""    method="get"><button type="button" class=" btn btn-warning">Sửa</button> </form>
      <form action= ""  method="post">
                 {{csrf_field()}}
        <button type="button" class="btn btn-danger">Xóa</button>
       </form>
       
       </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
