<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db = 'aptech_php_14_session_4';

$connect = mysqli_connect($server_name, $user_name, $password, $db);
if (!$connect) {
  die('connect failed' . mysqli_connect_error());
}

$sql = "INSERT INTO users (name, email,password, created_date)
VALUE ('hi','a@gmail.com','1111',now())";

if (mysqli_query($connect, $sql)) {
  echo $sql . ' successfully';
} else {
  echo 'some thing went wrong ' . mysqli_error($connect);
}
