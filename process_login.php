<?php
session_start();
$valid_users=['abc'=>'1111','abc1'=>'1234'];
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($valid_users[$username])&& $valid_users[$username]===$password){
    $_SESSION['username']=$username;
    $_SESSION['logged_in']==true;
    echo "Login successfull!!!!!";
    header('refresh:2 url=dashboard.php');
}
else{
    echo "Invalid Credentials";
}
?>