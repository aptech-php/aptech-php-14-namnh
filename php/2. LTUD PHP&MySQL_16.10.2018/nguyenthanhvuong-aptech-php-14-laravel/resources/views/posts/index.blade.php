@extends('layout.master') 
 @section('content')
 
<div class= "container-fluid p-3" >
<table class="table table-hover table-dark text-center">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Content</th>
      <th scope="col">Ngày Tạo</th>
      <th scope="col">Ngày Update</th>
      <th scope="col">Tùy Chỉnh</th>
    </tr>
</thead>
<tbody>
@foreach ($abc as $post)
<tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title }}</td>
      <td>{{$post->description}}</td>
      <td>{!!$post->content!!}</td>
      <td>{{$post->created_at }}</td>
      <td>{{$post->updated_at }}</td>
      <td class="d-flex align-items-center justify-content-around">
      <form action="{{route('posts.show',$post->id)}}" method="get">
              <button type="submit" class="btn btn-primary">Xem</button>
      </form> 
      <form action=""     method="get"><button       type="submit" class=" btn btn-warning">Sửa</button> 
      </form>
      <form action="{{route('posts.destroy',$post->id)}}" method="POST">  
          {{csrf_field()}}   
          <input type="hidden" name="_method" value ="delete"> 
      <!-- value ="delete" kiểu delete của post phải thêm dòng này để xóa key-->
              <button type="submit" class="btn btn-primary">Xóa</button>
       </form> 
      </td>
  </tr>  
  @endforeach 
    </tbody>
   </table>
</div>  
      <div>   
             <form action="{{route('posts.create')}}" method="get">
                <button type="submit" class="btn btn-sm btn-warning mx-2  rounded-0">
                  Create
                </button>
              </form>
      </div>    
 
      {{ $abc->links() }}
     
@endsection



 
 