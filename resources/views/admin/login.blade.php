<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<form action="{{route('admin.dologin')}}" method="post">
@csrf
  <div class="login">
 
<div class="title">Car Parking Management System</div>
<div class="subtitle">Admin Panel</div>  
<div class="fields">
<div class="usur">
  <i class="far fa-user"></i>
    <input type="username" name="email" class="userinput" placeholder="username">
</div>
<div class="password">
  <i class="fas fa-key"></i>
  <input type="password" class="pass" name="password" placeholder="password">
</div>
</div>
<button class="btn">Login</button>
<!-- </a> -->

</div>
</form>
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            
</body>
</html>