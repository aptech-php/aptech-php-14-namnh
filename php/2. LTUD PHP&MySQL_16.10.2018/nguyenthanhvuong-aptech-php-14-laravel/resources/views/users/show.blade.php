

  

 
 @extends('layout.master') 
 @section('content')
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
  
    <tr>
      <th scope="row">{{$abc->id}}</th>
      <td>{{$abc->name }}</td>
      <td>{{$abc->email }}</td>
      <td>{{$abc->password }}</td>
      <td>{{$abc->created_at }}</td>
      <td>{{$abc->updated_at }}</td>
      <td class="d-flex align-items-center justify-content-around">
      <form action="{{route('users.edit',$abc->id)}}"     method="get"><button type="submit" class=" btn btn-warning">Sửa</button> 
    </form>

      <form action="{{route('user.destroy',$abc->id)}}"   method="POST">  
      {{csrf_field()}}   
      <input type="hidden" name="_method" value ="delete"> 
      <!-- value ="delete" kiểu delete của post phải thêm dòng này để xóa key-->

        <button type="submit" class="btn btn-danger">Xóa</button>
       </form>
       
       </td>
    </tr>
    
  </tbody>
</table>
</div>
@endsection   