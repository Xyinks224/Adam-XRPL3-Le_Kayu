<?php  
session_start();
include '../Koneksi.php';

$Username = $_POST["Username"];
$Password = $_POST["Password"];

$query 	  = "SELECT * from data_user where Username = '$Username' and Password = '$Password' limit 1";
$result   = mysqli_query ($connect,$query);
$num	  = mysqli_num_rows ($result);

if ($num > 0) 
{
	$row  = mysqli_fetch_assoc($result);
	$_SESSION["Username"] = $row["Username"];
	$_SESSION["Password"] = $row["Password"];

	header("location:../Home\Home.php");
}

else
{
	echo '<script language="javascript">';
    echo 'alert("Username atau Password ANDA SALAH!!!!");';
    echo 'window.location = "Login.php"';
    echo '</script>';
}

?>