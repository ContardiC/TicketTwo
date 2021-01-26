<?php
include '../db/connect.php';

$email=$_POST['email'];

$sql="UPDATE users SET active=0 WHERE email='$email'";

if($conn->query($sql)===TRUE){
  echo "Utente aggiornato correttamente";
}else{
  echo "Errori: ".$conn->error;
}



 ?>
