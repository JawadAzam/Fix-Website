<?php
session_start();
include_once('config.php');

if (isset($_POST['submit'])) {
    $username = ($_POST["username"]);
    $password = md5($_POST["password"]);

    $sql = mysqli_query($conn, "select * from fixdb where email='$username' and password='$password'");

    if (mysqli_num_rows($sql) == 1) {
$fetch = mysqli_fetch_array($sql);
	$_SESSION['Your Username'] = $fetch['firstname'];
        echo '<script>window.location="index.php"</script>';
    } else {
        echo'<script>alert("Failed To Login"); window.location="Test1.html"</script>';
    }
} else {
    echo "whatever";
}
?>