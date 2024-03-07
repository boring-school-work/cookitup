
<?php
include "./../settings/connection.php";

$email = $conn->real_escape_string($_POST['email']);
$passwd = $conn->real_escape_string($_POST['password']);

$query = "SELECT * FROM users WHERE email = '$email'";
$row = $conn->query($query);
$result = $row->fetch_assoc();

// check if there is a record matching the email or password is valid
if ($result == null || !password_verify($passwd, $result['password'])) {
  header("Location: ./../login?status=fail");
  exit();
}

// route to homepage
header("Location: ./../view/home/");
