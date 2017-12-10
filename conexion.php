

<?php

function  conectar(){
  $server="localhost";
  $user="root";
  $pass="";
  $bd="hotel_version10";
$conec = new mysqli($server,$user,$pass,$bd);
   if($conec->connect_errno){

     echo "no conectado";
   }
  // else {
    // echo "conectado";
   //}
  return $conec;
}
 ?>
