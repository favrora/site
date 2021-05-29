<?php

require_once('db-connect.php');

// Получаем данные
$userEmail = $_POST['userEmail'];
$refLink = $_POST['refLink'];

$sql_user = "SELECT * FROM partnership WHERE userEmail='$userEmail'";
$sql_url = "SELECT * FROM partnership WHERE url='$refLink'";
$res_user = mysqli_query($conn, $sql_user);
$res_url = mysqli_query($conn, $sql_url);

if (mysqli_num_rows($res_user) > 0) {
  $name_error = "Sorry... email already taken";
} else if(mysqli_num_rows($res_url) > 0) {
  $email_error = "Sorry... url already taken";
} else {
  $query = "INSERT INTO partnership (email, url) VALUES ('$userEmail', '$refLink')";
  $results = mysqli_query($conn, $query);
  mysqli_close($conn);
}