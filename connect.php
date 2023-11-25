<?php
$localhost = "localhost";
$username = "root";
$passward = "";
$database = "website";
$conn = mysqli_connect($localhost,$username,$passward,$database);
if(!$conn){
    echo "mysqli_error($conn)";
}
else{
    echo "MYSQL";
}
