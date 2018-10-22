

  

 
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
  @foreach ($abc as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name }}</td>
      <td>{{$user->email }}</td>
      <td>{{$user->password }}</td>
      <td>{{$user->created_at }}</td>
      <td>{{$user->updated_at }}</td>
      <td class="d-flex align-items-center justify-content-around">
      <!-- <form action="{{asset('/users')}}/{{$user->id}}"    method="get"><button type="submit" class="btn btn-primary">Xem</button>
      </form> -->
      <form action="{{route('users.show',$user->id)}}"    method="get"><button type="submit" class="btn btn-primary">Xem</button>
      </form>
      <!-- //users.edit cái tên trong router ,tương ứng với ten dat trong view.blade co dẽ nho -->
      <form action="{{route('users.edit',$user->id)}}"     method="get"><button type="submit" class=" btn btn-warning">Sửa</button> 
    </form>

      <form action="{{route('user.destroy',$user->id)}}"   method="POST">  
      {{csrf_field()}}   
      <input type="hidden" name="_method" value ="delete"> 
      <!-- value ="delete" kiểu delete của post phải thêm dòng này để xóa key-->

        <button type="submit" class="btn btn-danger">Xóa</button>
       </form>
       
       </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<!-- <div>
<form action="{{route('users.create')}}" method="get">
                <button type="submit" class="btn btn-sm btn-warning mx-2  rounded-0">
                  Create
                </button>
              </form>
              </div>              -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
@endsection