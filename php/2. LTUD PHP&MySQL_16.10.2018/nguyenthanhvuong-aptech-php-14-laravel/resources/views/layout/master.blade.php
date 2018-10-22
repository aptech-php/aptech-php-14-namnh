<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{{asset('public/layout/style.css')}}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>APTECH PHP LARAVEL CRUD USERS DEMO</title>
  <link rel="stylesheet" href="{{asset('./css/bootstrap.css')}}">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('./css/styles.css')}}">
</head>

<body>

 @include('layout.header')
  <hr> 
@section('content') @show
  <hr>
  @include('layout.footer')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
