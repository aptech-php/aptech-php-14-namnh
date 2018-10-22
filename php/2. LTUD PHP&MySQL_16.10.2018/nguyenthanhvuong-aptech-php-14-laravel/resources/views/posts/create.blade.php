<!doctype html>
<html lang="en">
<h2>Title</h2>
<form action="{{route('posts.store')}}" method="post"> 
{{csrf_field()}} 

 <!-- <label class="text-uppercase font-weight-bold" for="title">name</label> -->
  <input type="text" name="title"><br>

<br>

<h2>Description</h2>
 <!-- <label class="text-uppercase font-weight-bold" for="title">name</label> -->
  <input type="text" name="description">
  <br>

<br>
<h2>Content</h2>
<p>The textarea element defines a multi-line input field.</p>
  <textarea id = "editor1"  name="content" rows="10" cols="30">The cat was playing in the garden.</textarea>
  <br>
  <button type="submit" >
                confirm
            </button>
</form>
<br>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script> CKEDITOR.replace('editor1'); </script>
</html>
