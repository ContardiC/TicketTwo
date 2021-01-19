<?php
include '../db/connect.php';

$firstname='Mimmo';             // $_POST['firstname'];
$lastname="Mimmi";              // $_POST['lastname'];
$email='mimmo.mimmi@gmail.com'; // $_POST['email'];

$query="INSERT INTO users(firstname, lastname, email) 
          VALUES('$firstname','$lastname','$email')";

// controllo della email

if($conn->query($query)===TRUE){
    echo 'Nuovo utente registrato';
}else{
    echo "Problemi nell'inserimento del nuovo utente";
}