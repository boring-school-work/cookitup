<?php
include '../settings/connection.php';

// sanitize inputs
$fname = $conn->real_escape_string($_POST['fname']);
$lname = $conn->real_escape_string($_POST['lname']);
$email = $conn->real_escape_string($_POST['email']);

// hash the password & sanitize it
$passwd = $_POST['passwd'];
$passwd = password_hash($passwd, PASSWORD_DEFAULT);
$passwd = $conn->real_escape_string($passwd);

// start transaction
mysqli_begin_transaction($conn);

// insert values into People table
try {
  // prepare the query
  $query = mysqli_prepare(
    $conn,
    "INSERT INTO users(fname, lname, email, password) VALUES(?, ?, ?, ?)"
  );

  // bind the parameters
  mysqli_stmt_bind_param($query, "ssss", $fname, $lname, $email, $passwd);

  // execute the query
  mysqli_stmt_execute($query);

  // commit the transaction
  mysqli_commit($conn);
} catch (mysqli_sql_exception $e) {
  mysqli_rollback($conn);
  /* echo "Error: " . $e->getMessage(); */
  exit();
}

// redirect to login page after registration
echo "Registration successful!" . "<br>";
echo "Redirecting to login page in 3 seconds...";
header("refresh:3; url=../login/");
