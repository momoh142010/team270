<?php
$username = $_POST['username']
$db = mysql_connect('localhost', 'root', '');
mysql_select_db('refuge_me', $db);

$req = $db->prepare('SELECT * FROM user WHERE username = '$username' AND );
$req->execute()


 ?>
