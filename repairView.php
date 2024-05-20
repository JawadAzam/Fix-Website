

$sql = "SELECT * FROM req";
$result = mysqli_query($conn,$sql);

if(!$result) { echo "there is an error"; }
echo "number of rows resulted is ".mysqli_num_rows($result);

if(mysqli_num_rows($result) >0) {
  echo "<table border=3><tr><th>PhoneType</th><th>PhoneService</th>Description<th>FullName</th>StreetName<th>Num</th>City<th>AddressType</th><th>CardNumber</th>CardName<th>ExpirationDate</th></tr>";
while($row=mysqli_fetch_assoc($result)){
     echo "<tr><td>".$row['PhoneType']."</td><td>".$row['PhoneService']."</td><td>".$row['Description']."</td><td>".$row['FullName']."</td><td>".$row['StreetName']."</td><td>".$row['Num']."</td><td>".$row['City']."</td><td>".$row['AddressType']."</td><td>".$row['CardNumber']."</td><td>".$row['CardName']."</td><td>".$row['ExpirationDate']."</td></tr>";
}
echo "</table>"; 
}