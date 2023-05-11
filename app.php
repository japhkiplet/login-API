 <?php
$Businessname=$_POST["business name"];
$E-mail=$_POST["email"];
$Telephone=$_POST["usertel"];
$location=$_POST["location"];
$City=$_POST["city"];
$Nationality=$_POST["nationality"];
$KRApin=$_POST["pin"];
//create connection
$conn = new mysqli("localhost","root","","apparent");

if ($conn->connect_error) {
  die("connection failed: ".$conn->connect_error);

}
else {
  $stmt=$conn->prepare("insert into business (Businessname,E-mail , Telephone, location, City,Nationality,KRApin)
  values(?,?,?,?,?,?,?)");
}
//binding
$stmt->bind_param("ssss",$Bussinessname,$E-mail,$Telephone,$location,$City,$Nationality,$KRApin);

$stmt->execute();
echo '<script>alert("registration successfull...")</script>';
$stmt->close();
$conn->close();
 
 ?>
 