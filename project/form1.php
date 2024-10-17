<?php
 $firstName = $_POST['f_name'];echo "<br>";
 $lastName = $_POST['l_name'];echo "<br>";
 $fatherName = $_POST['fr_name'];echo "<br>";
 $motherName = $_POST['mr_name'];echo "<br>";
 $Age = $_POST['age'];echo "<br>";
 $address = $_POST['Address'];echo "<br>";
 $gender = $_POST['gender'];echo "<br>";
 $mail = $_POST['email'];echo "<br>";
 $houseno = $_POST['house_no'];echo "<br>";

$con = mysqli_connect('localhost','root','','information1')  or die('connection Failed : ');
// $sql = "INSERT INTO `Records` (`f_name`, `l_name`, `fr_name`,`mr_name`, `age`, `Address`,`gender`, `email`, `house_no`) 
$sql = "INSERT INTO `students` (`f_name`, `l_name`, `fr_name`,`mr_name`, `age`, `Address`,`gender`, `email`, `house_no`) 
VALUES('$firstName','$lastName','$fatherName','$motherName','$Age','$address','$gender','$mail','$houseno')";
$result=mysqli_query($con,$sql) or die("query not execute");
// $result=mysqli_query($con,$sql) or die("query not ok");
echo "registratation SuccessFully....";
mysqli_close($con);
?>
