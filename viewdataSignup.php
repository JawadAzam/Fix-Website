<?php
include_once('config.php'); 

$sql = "SELECT * FROM fixdb"; 
$result = mysqli_query($conn,$sql);

if(!$result) {echo "there is an error"; }
echo "number of rows resulted is ".mysqli_num_rows($result);

if(mysqli_num_rows($result) > 0 ) {
   echo "<table border=3><tr><th>ID</th><th>FirstName</th><th>LastName</th><th>gender</th><th>email</th><th>password</th><th>confirmpassword</th></tr>";
   while($row=mysqli_fetch_assoc($result)){
     echo "<tr><td>".$row['ID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['gender']."</td><td>".$row['email']."</td><td>".$row['password']."</td></tr>";
}
echo "</table>"; 
}

?>