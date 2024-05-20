<?php

include_once('config.php'); 


if (isset($_POST['submit'])) {

  $PhoneType = ($_POST['PhoneType']);
  $PhoneService = ($_POST['PhoneService']);
  $Description = ($_POST['Description']);
  $FullName = ($_POST['FullName']);
  $KeyPhone = ($_POST['KeyPhone']);
  $PhoneNumber = ($_POST['PhoneNumber']);
  $StreetName = ($_POST['StreetName']);
  $Num = ($_POST['Num']);
  $City = ($_POST['City']);
  $AddressType = ($_POST['AddressType']);
  $CardNumber = ($_POST['CardNumber']);
  $CardName = ($_POST['CardName']);
  $ExpirationMonth = ($_POST['ExpirationMonth']);
  $ExpirationYear = ($_POST['ExpirationYear']);

$sql = mysqli_query($conn, "INSERT INTO req(PhoneType,PhoneService,Description,FullName,KeyPhone,PhoneNumber,StreetName,Num,City,AddressType,CardNumber,CardName,ExpirationMonth,ExpirationYear) values ('$PhoneType','$PhoneService','$Description','$FullName','$KeyPhone','$PhoneNumber','$StreetName','$Num','$City','$AddressType','$CardNumber','$CardName','$ExpirationMonth','$ExpirationYear') ");

if ($sql == 1) {
        echo'<script>alert("Request Submitted Successfully"); window.location="index.php"</script>';
    } else {
        echo'<script>alert("Failed To Submit your Request"); window.location="repair request.html"</script>';
    }

}

else{echo 'Problem Occured';}

?> 