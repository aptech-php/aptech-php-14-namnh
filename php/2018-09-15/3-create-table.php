<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db = 'aptech_php_14_session_4';

$connect = mysqli_connect($server_name, $user_name, $password, $db);
if (!$connect) {
  die('connect failed' . mysqli_connect_error());
}

$sql = 'CREATE TABLE users (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    email varchar(255) UNIQUE,
    password varchar(255),
    created_date timestamp
)';

if (mysqli_query($connect, $sql)) {
  echo $sql . ' successfully';
} else {
  echo 'some thing went wrong ' . mysqli_error($connect);
}
