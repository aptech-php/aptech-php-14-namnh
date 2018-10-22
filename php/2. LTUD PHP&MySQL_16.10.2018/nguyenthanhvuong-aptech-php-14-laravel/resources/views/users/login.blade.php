<!DOCTYPE html>
<html lang="en" >
<head>
  <base href="{{asset('public/layout')}}" >
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Login Smart Farm</title>
  <link rel="stylesheet" href="style.css"> 
      <style type="text/css">
        .nenchu{
          color: red;
          font-size: 14px;
        }  


      </style>

  
</head>

<body>
 <div class= "container-fluid" >
  

  <div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="email"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="id driver "/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="POST">
     <input type="text"  name="email"  value="" placeholder="email"/>
     

      <input type="password"  name="matkhau" value="" placeholder="password"/>
     
      <button >login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</div>
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<script >
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous">
    </script>
</body>
</html>
