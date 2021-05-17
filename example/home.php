

<!DOCTYPE html>
<html lang = "en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>POS</title>
</head>

<style>

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


<a href="products.php?products='<?php echo $name ?>'"><button type="submit" name="logout">Products</button>
<br>

<a href="login.php?logout='<?php echo $name ?>'"><button type="submit" name="logout">Logout</button>

<?php

if(isset($_GET['logout'])){
    session_destroy();
    header("location:login.php");
}

?>



</body>
</html>
