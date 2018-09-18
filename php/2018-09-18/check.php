<?php
include './connect.php';
echo $_POST['email'];
echo "<br>";
echo $_POST['password'];
$email = $_POST['email'];
$password = $_POST['password'];
echo "<br>";
$sql = "SELECT * FROM users 
WHERE email = '" . $email . "' 
AND password = '" . $password . "';";

$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "Login successfully";
} else {
  echo "login failed";
}

