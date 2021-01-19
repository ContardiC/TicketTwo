<?php
include '../db/connect.php';
$query="SELECT * FROM users";
$res=$conn->query($query);
if($res->num_rows>0){
    while($row=$res->fetch_assoc()){
        echo $row['firstname']." ".
            $row['lastname']."<br/>";
    }
}else{
    echo "non sono presenti utenti";
}
