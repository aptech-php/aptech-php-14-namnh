<?php
$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db = 'aptech_php_14_session_4';

$connect = mysqli_connect($server_name, $user_name, $password, $db);
if (!$connect) {
  die('connect failed' . mysqli_connect_error());
}

$sql = "SELECT email, password FROM users";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo
      "<tr>
        <td>" . $row["email"] . "</td>
        <td>" . $row["password"] . "</td>
        </tr> ";
  }
} else {
  echo "0 results";
}
mysqli_close($connect);

