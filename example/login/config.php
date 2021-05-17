<?php

require_once("../config/connect.php");

session_start();

if(isset($_POST['login'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $login= "SELECT * FROM login_tbl WHERE username = '$user' AND password = '$pass'";
    $execute = mysqli_query($connect, $login);

    if(mysqli_num_rows($execute) > 0){
        $_SESSION['name'] = $user;
        header("location: ../home.php");
    }
    else {
        echo "
        <script>
        alert('login Failed');
        </script>
        ";
    }
}



?>
