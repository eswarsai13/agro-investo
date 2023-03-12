<?php

	$Name = $_POST['Name'];
	$Gender = $_POST['gender'];
	$Phone = $_POST['Phone'];
	$ID_type = $_POST['ID_type'];
	$ID_Number = $_POST['ID_Number'];
	$Current_Address = $_POST['Current_Address'];
	$Pin_Code = $_POST['Pin_Code'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Re_type_Password = $_POST['Re_type_Password'];

	// Database connection


	
	$conn = mysqli_connect('localhost','root','','investreg');
	if(! $conn )  
{  
  die('Could not connect: ' . mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
$sql="INSERT INTO investreg values('$Name','$Gender','$Phone','$ID_type','$ID_Number','$Current_Address','$Pin_Code','$Email','$Password','$Re_type_Password');";
if(mysqli_query($conn,$sql))
{  
	echo "Record inserted successfully";  
   }else{  
   echo "Could not insert record: ". mysqli_error($conn);  
   }  
   mysqli_close($conn);  
?>