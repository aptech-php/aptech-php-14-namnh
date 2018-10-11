<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="{{route('posts.store')}}" method="POST">

{{csrf_field()}}
<div>
Title : <input type="text" name="title">
</div>
<div>
Description : <textarea name="description" cols="30" rows="10"></textarea>
</div>
<div>
Content : <textarea id="editor1" name="content" cols="50" rows="10"></textarea>
</div>
<div>
<button type="submit">Luu</button>
</div>
</form>


<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script> CKEDITOR.replace('editor1'); </script>
</body>
</html>
