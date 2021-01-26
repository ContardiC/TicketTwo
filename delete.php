<?php

/*
DELETE FROM table
WHERE column=value


*/
include '../db/connect.php';
$email=$_POST['email']; // dato da cancellare

// controllare se la email è esistente

$sql="DELETE FROM users WHERE email='$email'";

if($conn->query($sql)===TRUE){
  echo "Utente eliminato correttamente";
}else{
  echo "Errori: ".$conn->error;
}
$conn->close();
?>
