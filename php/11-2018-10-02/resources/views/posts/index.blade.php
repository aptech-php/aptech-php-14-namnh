<form action="{{route('posts.create')}}">
<button type="submit">Add New Post</button>
</form>

@foreach($posts as $post)
<div>
<h1>{{$post->id}} - <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></h1>
</div>

@endforeach
