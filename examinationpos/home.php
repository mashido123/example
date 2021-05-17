<?php 





?>

<!DOCTYPE html>
<html lang = "en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scal=0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>POS</title>
</head>

<style>

.bar{height: 1000px;
width: 300px;
background-color:#c6f2f7;
 min-width: 300px;
 min-height: 1000px;
  Border: 1px transparent black; 
  position: fixed;
  bottom: -10px;
  z-index: -1;}

body{
    background-image: url(p.o.s.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: medium;
}
</style>

<body>
<?php 


session_start();
$name = $_SESSION['name'];

?>


 <h1>Point Of Sales System</h1>



<a href="home.php?logout='<?php echo $name ?>'"><button type="submit" name="logout">logout</button>



<div class=bar>
</div>
<?php

if(isset($_GET['logout'])){
    session_destroy();
    header("location:login.php");
}

?>

</body>
</html>
