<?php
include('db.php');
if($conn){
    $query = "CREATE DATABASE users";
   $result =  mysqli_query($conn,$query);
   if($result){
    echo "databas e created successfully";
   }else{
    "database not created successfully";
   }

echo "The connection is established";

}else{
    "The connection is not established";
}

?>