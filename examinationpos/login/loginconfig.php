<?php

require_once("../connectiondata/connect.php");

$con = connection();



session_start();

if(isset($_POST['login']))

$user = $_POST['user'];
$pass = $_POST['pass'];

$login = "SELECT * FROM loginsystem WHERE username = '$user' AND userpassword = '$pass'";
$execute = mysqli_query($con, $login);
if(mysqli_num_rows($execute) > 0){

$_SESSION['name'] = $user;
header("location: ../home.php");


}
else {

echo"
<script>
alert('LOGIN FAILD')
</script>
";

}