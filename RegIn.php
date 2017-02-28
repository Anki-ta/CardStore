<?php
include 'connect.php';
$fname = $_POST['fnam'];
$lname = $_POST['lnam'];
$email=$_POST['eid'];
$phn=$_POST['phn'];
$password=$_POST['pwd'];
$addr=$_POST['add'];
$state=$_POST['state'];
$_SESSION['ad']=$addr;
$_SESSION['state']=$state;




$sql_users="insert into customer(FName,LName,email,phoneNo,password,billAddress,state) values ('$fname','$lname','$email','$phn','$password','$addr','$state')";

if(mysqli_query($connect,$sql_users))
{
	header('location: Login.php');
}
else
{
	echo "Registration unsuccessful,please try again";
}?>
