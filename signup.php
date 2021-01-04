<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<head>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">What Keeps Me Going</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="music.php">Music</a></li>
      <li><a href="travel.php">Travel</a></li>
      <li><a href="fitness.php">Fitness</a></li>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </ul>
  </div>
</nav>

<?php

$output = null;

if(isset($_POST['submit'])) {
  $mysqli = NEW MySQLi('localhost', 'root', '', 'mywebsite');

  $fname = $mysqli->real_escape_string($_POST['fname']);
  $lname = $mysqli->real_escape_string($_POST['lname']);
  $email = $mysqli->real_sescape_string($_POST['email']);
  $username = $mysqli->real_escape_string($_POST['username']);
  $password = $mysqli->real_escape_string($_POST['password']);
  $rpassword = $mysqli->real_escape_string($_POST['rpassword']);

  $query = $mysqli->query("SELECT * FROM user WHERE username = '$username'");

  if(empty($fname) OR empty($lname) OR empty($email) OR empty($username) OR empty($password) OR empty($rpassword)) {
    $output = "Please Fill In All Fields";
  }
  else if($query->num_rows !=0) {
    $output = "That Username Is Taken";
  }
  else if($rpassword != $password) {
    $output = "Your Passwords Dont Match";
  }
  else if(strlen($password) < 6) {
    $output = "Password Must Be 6 Characters Or More";
  }
  else {
    $password = md5($password);

    $insert = $mysqli->query("INSERT INTO user (fname, lname, email, username, password, rpassword) VALUES ('$fname', '$lname', '$email', '$username', $password', $rpassword')");
        if($insert != TRUE) {
          $output = "There Was A Problem <br />";
          $output .=$mysqli->error;
        }
        else {
          $output = "You Have Been Registered";
        }
  }
}

?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
  <form method="POST">
    <ul><input type="text" name="fname" placeholder="First name"></ul>
    <ul><input type="text" name="lname" placeholder="Last name"></ul>
    <ul><input type="text" name="email" placeholder="Email"></ul>
    <ul><input type="text" name="username" placeholder="Username"></ul>
    <ul><input type="password" name="password" placeholder="Password"></ul>
    <ul><input type="password" name="rpassword" placeholder="Repeat Password"></ul>
  <button type="submit">Sign Up</button>
  </form>
</div>

</body>
</html>