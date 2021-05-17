<?php

function connection(){

$host = "localhost";
$user = "root";
$pass = "";
$database = "systempos";

$con = mysqli_connect($host, $user, $pass, $database);

if($con->connect_error){
    echo $con->connect_error;
} else{
    return $con;
}

}
?>
