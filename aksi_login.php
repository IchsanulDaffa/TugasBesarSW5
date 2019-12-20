<?php
session_start();
require_once'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($koneksi,"select*from user where username='$username' and password='$password'");
$xxx=mysqli_num_rows($query);
if($xxx==TRUE){
$_SESSION['username']=$username;
echo "<script>alert('login sukses'); location = 'halamanutama.php';</script>";
//header("location:home.php");
}else 
{
	echo "<script>alert('login gagal atau inputan tidak lengkap'); location = 'login.php';</script>";}
?>