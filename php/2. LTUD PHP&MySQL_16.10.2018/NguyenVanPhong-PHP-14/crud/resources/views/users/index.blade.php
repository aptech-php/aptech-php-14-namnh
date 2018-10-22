@extends('layout.master') 
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h3 class="text-uppercase">index page</h3>
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Name</th>
            <th scope="col" class="">Email</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr class="text-center">
            <th>{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('users.show',$user->id)}}" method="get">
                <button class="btn btn-sm btn-primary ">
                  Show
                </button>
              </form>
              <form action="{{route('users.edit',$user->id)}}" method="get">
                <button class="btn btn-sm btn-warning ">
                  Edit
                </button>
              </form>
              <form action="{{route('users.destroy',$user->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" > {{csrf_field()}}
                <button class="btn btn-sm btn-danger   ">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection