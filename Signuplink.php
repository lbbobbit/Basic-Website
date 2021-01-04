<?php

include ('config.php');

if(isset($_POST['Register'])) {

  session_start();
  $FName = $_POST['fname'];
  $LName = $_POST['lname'];
  $Email = $_POST['email'];
  $Pass = $_POST['pass'];

  $sql = $con->query("INSERT INTO user (fname, lname, email, pass) Values ('{$FName}', '{$LName}', '{$Email}', '{$Pass}')");

  header('Location: login.php');
  