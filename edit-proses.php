<?php
if(isset($_POST['simpan'])) {
	include ('connect.php');
	$id = $_POST['id'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$update = mysqli_query($koneksi,"UPDATE register SET email = '$email', username = '$username', password = '$password', phone = '$phone' WHERE username = '$id'") or die (mysqli_error());
	
	if ($update) {
		echo "<script>alert('Update data berhasil!'); location = 'index.php';</script>";
		
	}
	else {
		echo "<script>alert('Gagal menyimpan data!'); location = 'edit.php';</script>";
	}

}
	
	else {
		echo '<script>window.history.back()</script>';
	}
	


?>