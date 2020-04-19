<?php

   $host  = "localhost";
   $database  = "kayu";
   $username  = "root";
   $password  = "";   
   $connect = mysqli_connect($host, $username, $password, $database);

   if (!$connect) 
   {
   		echo "Koneksi Gagal: " . mysqli_connect_error();
   }

?>