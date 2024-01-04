<?php
include_once 'include/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delivery Information Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
        <div class="left-menu">
            <div class ="logo">
                <img src ="sparkl.png" width="180" hight="150" alt ="logo">
                
            </div>
            <div class="links">
                <a href="#">
                    <span>
                            HOME
                    </span>
                </a>
                <a href="#">
                    <span>
                            TRENDING
                    </span>
                </a>

                <a href="#">
                    <span>
                            ABOUT US
                    </span>
                </a>
                <a href="#">
                    <span>
                           FAQ
                    </span>
                </a>

            </div>
            </div>

            <div class="right-menu">
                <div class="join">
                    <a href="#">JOIN</a>
                </div>
            <div class ="dash">
            </div>

            
                <div class="LOGIN">
                    <a href="#">LOGIN</a>
				</div>

            </div>
    </header>
    <!-- ------------------------------------------------------------Header END ------------------------------------------------------------------->
    



</div>
	<div class="container">
		<div class ="logo">
			<img src ="sparkl.png" width="180" hight="150" alt ="logo">
		</div>
		<h2 class="label">Delivery Information</h2>
		<form  action="info.php" method="POST" class="login_form" name="form"onsubmit="return validated()">
			<div class="form-group">

			<div class="font">Full Name</div>
			<input autocomplete="off" class="shape" type="text" name="FullName" required="required">

			<div class="font">Email Address</div>
			<input autocomplete="off" class="shape" type="text" name="EmailAddress" required="required">
			<div class="error" id="email_error">Please fill up your Email</div>

			<div class="font">Address Line 1</div>
			<input autocomplete="off" class="shape" type="text" name="AddressLine1" required="required">

			<div class="font">Address Line 2</div>
			<input autocomplete="off" class="shape" type="text" name="AddressLine2">

			<div class="font">Province</div>
			<input autocomplete="off" class="shape" type="text" name="Province" required="required">

			<div class="font">City</div>
			<input autocomplete="off" class="shape" type="text" name="City">

			<div class="font">District</div>
			<input autocomplete="off" class="shape" type="text" name="District" required="required">

			<div class="font">Postal Code</div>
			<input autocomplete="off" class="shape" type="number" name="PostalCode" required="required">
			<div class="error" id="passcode_error">Please fill up your Postal code</div>

			<button type="submit" class="submitbtn" id="submitbtn" value="submit">submit</button>
		</form>
	</div>	
	<script src="deliver.js"></script>
	<footer>
		<div class="main">
			<a href="#" class="t&c"><span>TERMS AND CONDITION </span></a>
			<span class="dash">|</span>
	
			<a href="#" class="pp"><span>PRIVACY POLICY</span></a>
			<span class="dash">|</span>
	
			<a href="#" class="au"><span>ABOUT US </span></a>
			<span class="dash">|</span>
	
			<a href="#" class="fb"><span>FEEDBACK</span></a>
			<span class="dash">|</span>
	
			<a href="#" class="cu"><span>CONTACT US</span></a>
			<span class="dash">|</span>
		</div>
	
		<center>
		<div class="cpoy">
			<span class="c_text">
				copyright &copy; 2022 <br> SPARK.LK Allright Reserved
			</span>
		</div>
		</center>
	</footer>
</body>
</html>
<!--<?php
    $fullname = $_POST['FullName'];
    $email = $_POST['EmailAddress'];
    $address1 = $_POST['AddressLine1'];
    $address2 = $_POST['AddressLine2'];
    $province = $_POST['Province'];
    $city = $_POST['City'];
    $district = $_POST['District'];
    $postalcode = $_POST['PostalCode'];
    
    
 
    $conn = new mysqli('localhost', 'root', '', 'delivery information');
    if($conn->connect_error){
        die('Connection Failed :' .$conn->connection_error);
    }else{
        
        $stmt = $conn->prepare("insert into delivery(Full Name,Email Address,Address Line 1,Address Line 2,Province,City,District,Postal Code) values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $fullname, $email, $address1, $address2, $province, $city, $district, $postalcode);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("location:delivery.html");
    
    
}
?>-->