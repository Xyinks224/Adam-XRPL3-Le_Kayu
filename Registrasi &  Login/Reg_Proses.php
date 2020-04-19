<?php 

include '../Koneksi.php';

$Nama 	  = $_POST["Nama"];
$Alamat   = $_POST["Alamat"];
$Telp     = $_POST["Telp"];
$TTL      = $_POST["TTL"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$query 	  = "INSERT into data_user (id,Nama,Alamat,Telp,TTL,Username,Password)
			 values (null,'$Nama', '$Alamat', '$Telp', '$TTL', '$Username', '$Password')";
$result   = mysqli_query($connect, $query);
$num	  = mysqli_affected_rows($connect);

if($num > 0)
{
	header('location:Login.php');
}
 
else
{	
	header('location:Registrasi.php');
}

?>