<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 require 'mysqli_connect.php';
 session_start();
 $errors = [];

 if (empty($_POST['name'])) {
  $errors[] = 'No name!';
  $name     = null;
 } else {
  $name = mysqli_real_escape_string($connection, trim($_POST['name']));
 }
 if (empty($_POST['email'])) {
  $errors[] = 'no email!';
  $email    = null;
 } else {
  $email = mysqli_real_escape_string($connection, trim($_POST['email']));
 }
 if (empty($_POST['message'])) {
  $errors[] = 'No message!';
  $message  = null;
 } else {
  $message = mysqli_real_escape_string($connection, trim($_POST['message']));
 }
 if (empty($errors)) {
  $to = 'dana@dana-hedrick.com';
  mail($to, $name, $email, $message);
  $formCheck = true;
 } else {
  $formCheck = false;
 }
 trim($formCheck);
 echo json_encode($formCheck);
 session_abort();
 mysqli_close($connection);
}
