<?php
include('db.php');

if($conn){
$query = "SELECT * FROM `names`";

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['name'] . '<br>';
    }
}else{
    echo "select is not insert successful";
}
}
?>