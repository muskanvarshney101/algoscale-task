<?php
$conn = mysqli_connect('localhost','root','','admin');
if($conn){
    echo "connection established";
}
else{
    echo" connection failed";
}
?>