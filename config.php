<!DOCTYPE html>
<head>
<title>fix sql access</title>
</head>
<body>

<?php 

$servername="localhost";
$username="root";
$password="password";

$conn= new mysqli('localhost', 'root', '', 'fixdb');

if(mysqli_connect_error()) {
     die("Database connection failed: " . mysqli_connect_error());
}
?> 

</body>
</html>