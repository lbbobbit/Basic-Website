<?php

return $conn = mysqli_connect('localhost', 'root', '', 'mywebsite');

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}