<?php

include_once('config.php'); 


if (isset($_POST['submit'])) {

  $experience = ($_POST['experience']);
  $comment = ($_POST['comment']);
  $name = ($_POST['name']);
  $email = ($_POST['email']);

$sql = mysqli_query($conn, "INSERT INTO feedback(experience,comment,name,email) values ('$experience','$comment','$name','$email')");

if ($sql == 1) {
        echo'<script>alert("Feedback Submitted Successfully"); window.location="index.php"</script>';
    } else {
        echo'<script>alert("Failed To Submit your Feedback"); window.location="feedback.html"</script>';
    }

}

else{echo 'Problem Occured';}

?> 