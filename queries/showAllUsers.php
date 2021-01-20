<?php
include '../db/connect.php';
$sql="SELECT * FROM users";
$res=$conn->query($sql);
if($res->num_rows>0){
    while($row=$res->fetch_assoc()){
        echo $row['firstname']." ".
             $row['lastname']."<br/>";
    }
}else{
    echo "non sono presenti utenti";
}
