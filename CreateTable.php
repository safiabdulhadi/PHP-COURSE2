<?php
include('db.php');

if($conn){
$query = "CREATE TABLE names ( id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY , name VARCHAR(255) NOT NULL)";

$result = mysqli_query($conn, $query);
if($result){
    echo "tabel created is successful";
}else{
    echo "tabel created is not successful";
}
}
?>