<?php

include '../settings/connection.php';

$id = $conn->real_escape_string($_GET['recipe_id']);

mysqli_begin_transaction($conn);

try {
  $q1 = mysqli_prepare(
    $conn,
    "DELETE FROM ingredients WHERE recipe_id=?"
  );

  mysqli_stmt_bind_param($q1, "s", $id);
  mysqli_stmt_execute($q1);

  $q2 = mysqli_prepare(
    $conn,
    "DELETE FROM recipes WHERE recipe_id=?"
  );

  mysqli_stmt_bind_param($q2, "s", $id);
  mysqli_stmt_execute($q2);

  // commit the transaction
  mysqli_commit($conn);
} catch (mysqli_sql_exception $e) {
  mysqli_rollback($conn);
  die($e);
}

header('Location: ../view/home/');
exit();
