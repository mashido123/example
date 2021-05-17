<?php

require_once("connectiondata/connect.php");

$con = connection();




    

    


?>


<!DOCTYPE html>
<html lang = "end">

<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device -with, initial-scale=0">
<meta http-equiv="X-UA Compatible" content="ie=edge">

<title>POINT OF SALES SYSTEM</title>
</head>

<div>
    <img src="p.o.s.jpg"  style="display: block; margin-left: auto; margin-right: auto; width: 200px; height: 200px;">
</div>

</style>


<body>
<center>

<form action = "login/loginconfig.php" method="POST">

<h1>LOGIN PAGE</h1>


<label>Username</labe>
<input type="text" name="user">
<br/><br/>
<label>password</label>
<input type="password" name="pass">
<br/>
<br/>
<button type="submit" name="login">login</button>

</body>
</html>

