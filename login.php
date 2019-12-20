<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <style>
	body { background-color:#90EE90;} 
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

<div class="container">
  <h2>Welcome Admin! </h2>
	<form method="POST" action="aksi_login.php">
    <div class="form-group">
      <label for="username">Username :</label>
      <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password :</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary" value="login">Login</button>
  </form>
</div>

</body>
</html>
