@extends('layout.master')
@section('content')

<form action="{{route('users.update',$user->id)}}" method="POST">

{{csrf_field()}}

<input type="hidden" name="_method" value="put">

<input type="text" name="name" value="{{$user->name}}">

<input type="text" name="email" value="{{$user->email}}">

<button type="submit">update</button>

</form>
@endsection
