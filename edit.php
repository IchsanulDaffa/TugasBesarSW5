<!DOCTYPE html>
<html lang="en">
<head>
	
  <title>USU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:100px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  
   .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  
  
	body { background-color:#90EE90;} 
	}
  </style>
</head>
<body >


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
        <li class="active"><a href="halamanutama.php">Home</a></li>
        <li><a href="index.php">Pengunjung</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logoutbaru.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<h3 align="center">
Edit profile pengujung 
</h3>

<?php
include ('connect.php');
$id = $_GET['id'];
$show = mysqli_query($koneksi,"SELECT * FROM register WHERE username = '$id'");
if (mysqli_num_rows($show) == 0) {
	echo '<script>windows.history.back()</script>';
}

else {
	$data = mysqli_fetch_assoc($show);
}

?>

<form action = "edit-proses.php" method = "post">
<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<table cellpadding = "3" cellspacing = "0" align="center">
<tr>
<td>Email</td>
<td>:</td>
<td><input type = "text" class="form-control" name = "email" size = "30" value = "<?php echo $data['email']; ?>" required></td>
</tr>
<tr>
<td>Username</td>
<td>:</td>
<td><input type = "text" class="form-control" name = "username" size = "30" value = "<?php echo $data['username']; ?>" required></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type = "password" class="form-control" name = "password" size = "30" value = "<?php echo $data['password']; ?>" required></td></tr>
<tr>
<td>Phone</td>
<td>:</td>
<td><input type = "text" class="form-control" name = "phone" size = "30" value = "<?php echo $data['phone']; ?>" required></td>
</tr>
<br>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type = "submit" class="btn btn-default" name = "simpan" value = "Save"></td>
</tr></table>
</form>
</body>

</html>