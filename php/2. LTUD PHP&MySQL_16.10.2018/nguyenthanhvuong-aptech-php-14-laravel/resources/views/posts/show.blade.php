
      
 @extends('layout.master') 
 @section('content')
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
  
    <tr>
      <th scope="row">{{$abc->id}}</th>
      <td>{{$abc->title }}</td><br>
      <td>{{$abc->description }}</td><br>
      <td>{!!$abc->content!!}</td><br>
      <td>{{$abc->created_at }}</td><br>
      <td>{{$abc->updated_at }}</td>
      <td class="d-flex align-items-center justify-content-around">
      <form action=""    method="get"><button type="submit" class="btn btn-primary">Xem</button>
      </form>  
       </td>
    </tr>
    
  </tbody>
</table>
</div>
@endsection