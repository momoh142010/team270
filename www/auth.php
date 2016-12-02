<?php
session_start();
$encryptedPass = sha1($_POST['pass']);
$db = mysqli_connect('localhost', 'root', '', 'refuge_me');

$username = mysqli_real_escape_string($db, $_POST['username']);
$pass = mysqli_real_escape_string($db, $encryptedPass);

$sel_user = "select * from user where username='$username' AND password='$pass'";
$run_user = mysqli_query($db, $sel_user);
$check_user = mysql_fetch_array($run_user, MYSQLI_ASSOC);

if (mysqli_num_rows($run_user) == 1)
{
  $_SESSION['username']=$username;
  echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE";
}
else
{
  echo "$pass";
  echo "FAILLURE";
}


 ?>
