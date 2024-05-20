<?php

include_once('config.php'); 

if (isset($_POST['submit'])) {
    $firstName = ($_POST['FirstName']);
    $lastName = ($_POST['LastName']);
    $email = ($_POST['email']);
    $password = md5($_POST['password']);
    
    $sql = mysqli_query($conn, "insert into fixdb(firstname,lastname,email,password) values('$firstName','$lastName','$email','$password')");

    if ($sql == 1) {
        echo'<script>alert("Congratulation Your are Now Registered"); window.location="Test1.html"</script>';
    } else {
        echo'<script>alert("Failed To Insert"); window.location="Test1.html"</script>';
    }
} else {
    echo"whatever";
}

?>

