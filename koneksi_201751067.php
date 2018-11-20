<?php

   ob_start();
   $koneksi;
   $namaserver=	"localhost";
   $username	=	"root";
   $password	=	"";
   $namadb		=	"db201751067";

   $koneksi	=	mysqli_connect($namaserver,$username,$password,$namadb);
   if(!$koneksi) {
      die("Maaf, Koneksi Gagal:".mysqli_connect_error());
   }

?>
