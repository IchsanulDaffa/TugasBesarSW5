<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
	body { background-color: #90EE90;} 
	}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
	  
		<a class="navbar-brand" href="#">
		<img src="usu.png" alt="logo" style="width:30px;"height="30px">
		</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
	   <ul class="nav navbar-nav navbar-right">
        <li><a href="loginbaru.php"><span class="glyphicon glyphicon-circle-arrow-right"></span> Back to login</a></li>
      </ul>
    </div>
  </div>
</nav>
<h2 style="text-align :center;">Register</h2>
<div class="container">
  <form action ="tambah-proses.php" method = "post">
    <div class="input-group">
      <span class="input-group-addon"><i class="	glyphicon glyphicon-envelope"></i></span>
      <input  type="text" class="form-control" name="email" placeholder="Enter email">
    </div>
	<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  type="text" class="form-control" name="username" placeholder="Enter username">
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input  type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
		<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
      <input  type="text" class="form-control" name="phone" placeholder=" Enter phone number">
    </div>
    <br>
	<input type = "submit" class="btn btn-default" name = "tambah" value = "Register"></td>
    </form>
  </div>
  
</html>
