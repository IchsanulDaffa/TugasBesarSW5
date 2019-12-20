<!DOCTYPE html>
<html lang="en">
<head>
	
  <title>User</title>
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
  th {text-align:center;}
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
        <li class="active"><a href="halamanutama.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<h3 align="center">User</h3>
<table cellpadding = "10"  border = "2" align="center">
<tr bgcolor = "YellowGreen">
<th>No.</th>
<th>Email </th>
<th>Username</th>
<th>Password </th>
<th>Phone</th>
<th>Manage</th>	
</tr>
<?php
include ("connect.php");
$query = mysqli_query($koneksi,"SELECT * FROM register ") or die (mysql_error());
//ORDER BY nim ASC
if (mysqli_num_rows($query) == 0) {
	echo '<tr align="center"><td colspan = "6">Tidak ada data!</td></tr>';
}
else {
	$no = 1;
	while ($data = mysqli_fetch_assoc($query)) {
		echo '<tr bgcolor="#999966">';
		echo '<td>'.$no.'</td>';
		echo '<td>'.$data['email'].'</td>';
		echo '<td>'.$data['username'].'</td>';
		echo '<td>'.$data['password'].'</td>';
		echo '<td>'.$data['phone'].'</td>';
		echo '<td><a href = "edit.php?id='.$data['username'].'">Edit</a>/
		<a href = "hapus.php?id='.$data['username'].'" onclick = "return confirm (\'Yakin\')">Hapus</a>
		</td>';
		echo '</tr>';
		$no++;
	}
}

?>

</table>

</body>

</html>