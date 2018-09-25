<h1>
  Hello World</h1>
@foreach ($users as $user)
<p>This is user {{ $user->name }} & {{$user->email}}</p>
@endforeach