<?php

if(isset($_GET['id'])) {
	include ('connect.php');
	$id = $_GET['id'];
	$cek = mysqli_query($koneksi,"SELECT username FROM register WHERE username = '$id'") or die (mysql_error());

	if(mysqli_num_rows($cek) == 0) {
		echo '<script>windows.history.back()</script>';
	}
	else {
		$del = mysqli_query($koneksi,"DELETE FROM register WHERE username = '$id'");
		
		if ($del) {
			echo "<script>alert('Data berhasil dihapus !'); location = 'index.php';</script>";
		}
		
		else {
			echo "<script>alert('Gagal menyimpan data!'); location = 'edit.php';</script>";
		}
		
	}
	}
	
	else {
		echo '<script>window.history.back()</script>';
	}
	
?>