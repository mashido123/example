<?php

include_once("connectiondata/connect.php");

$con = connection();

if($con->connect_error){
    echo $con->connect_error;
}

$sql ="SELECT * FROM possupplier";
$supplier = $con->query($sql) or die ($con->erorr);
$row = $supplier->fetch_assoc();

do{
    echo $row['sup_ID']." ".$row['store']." ".$row['supname']." ".$row['contnumber']."<br/>";
}
while($row = $supplier->fetch_assoc());


?>

