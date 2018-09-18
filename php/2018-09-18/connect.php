<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db = 'aptech_php_14_session_4';

$connect = mysqli_connect($server_name, $user_name, $password, $db);
if (!$connect) {
  die('connect failed' . mysqli_connect_error());
}
echo 'connect succesfully<br>';
?>



