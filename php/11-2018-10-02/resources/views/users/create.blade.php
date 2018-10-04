@extends('layout.master')
@section('content')
<form action="{{route('users.store')}}" method="POST">
{{csrf_field()}}
<input type="text" name="name">
<input type="text" name="email">
<input type="text" name="password">
<button type="submit">Tao Moi</button>
</form>
@endsection
