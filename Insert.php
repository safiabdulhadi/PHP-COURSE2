<?php
include('db.php');

if($conn){
$query = "INSERT INTO `names`( `name`) VALUES ('karim') ";

$result = mysqli_query($conn, $query);
if($result){
    echo "Insert data successful";
}else{
    echo "Data is not insert successful";
}
}
?>