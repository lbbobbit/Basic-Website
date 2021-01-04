<!DOCTYPE html>
<html>
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
      <a class="navbar-brand" href="index.php">Just Gotta Keep On L-I-V-I-N</a>
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

<section>
<a href="music.php">
  <img class="mySlides" src="http://i.imgur.com/Ywf7LKQ.jpg"
  style="width: 100%; height: auto;">
</a>
<a href="travel.php">
  <img class="mySlides" src="http://i.imgur.com/RLSqmTj.jpg"
  style="width:100%; height: auto;">
</a>
<a href="fitness.php">
  <img class="mySlides" src="http://i.imgur.com/dWAltNe.jpg"
  style="width:100%; height: auto;">
</a>
</section>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>

</body>
</html>