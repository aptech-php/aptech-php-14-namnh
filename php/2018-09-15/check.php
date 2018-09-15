<?php 
var_dump($_POST);
// $_POST['user'];
// if ($_POST['user'] === 'nam') {
//   echo 'dang nhap thanh cong';
// } else {
//   echo 'dang nhap that bai';
// }

$sql = "SELECT * FROM users WHERE email = " . $_POST['user'] . " and password = " . $_POST['password'];
var_dump($sql);
