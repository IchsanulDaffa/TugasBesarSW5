<?php 
if (isset($_POST['tambah'])) {

include ('connect.php');
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
	
$input = mysqli_query($koneksi,"INSERT INTO register VALUES ('$email','$username','$password','$phone')");//or die (mysql_error());

if ($input) {
	echo "<script>alert('register sukses'); location = 'halamanutamabaru.php';</script>";
}	
else {
	echo "<script>alert('register gagal atau inputan tidak benar'); location = 'tambah.php';</script>";
}
	
	
}


?>