<?php

require_once("config/connect.php");

if($connect) {

}

?>
<!DOCTYPE html>
<html lang = "en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scal=0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Point of system</title>
</head>
<br/>
<br/>
<br/>
<div>
    <img src="p.o.s.jpg"  style="display: block; margin-left: auto; margin-right: auto; width: 200px; height: 200px;">
</div>

</style>
<body>
<center>

<form action="login/config.php" method="POST">

<h1>Login Page</h1>
<br/>
<br/>
<br/>

<label>Username</label>
<input type="text" name="user">
<br/><br/>
<label>password</label>
<input type="password" name="pass">
<br/>
<br/>
<button type="submit" name="login">login</button>
</form>

</body>
</html>
