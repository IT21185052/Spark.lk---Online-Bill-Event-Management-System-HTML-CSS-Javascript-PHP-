
<?php  

include_once 'include/connection.php';

$fName = $_POST['FullName'];
$email = $_POST['EmailAddress'];
$addressl1 = $_POST['AddressLine1'];
$addressl2 = $_POST['AddressLine2'];
$province = $_POST['Province'];
$city = $_POST['City'];
$district = $_POST['District'];
$postalcode = $_POST['PostalCode'];



$sql = "INSERT INTO delivery(FullName,EmailAddress,AddressLine1,AddressLine2,Province,City,District,PostalCode)
    VALUES('$fName','$email','$addressl1','$addressl2','$province','$city','$district','$postalcode');";

$result = mysqli_query($connection,$sql);

header("Location:delivery.php?=Registration Succsesfull");

?>