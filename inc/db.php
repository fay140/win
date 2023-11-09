<?php  
$conn = mysqli_connect('localhost','root','root','wwin');
if(!$conn){
    echo 'Error: '. mysqli_connect_error();
}

include './inc/db.php';