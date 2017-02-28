<?php 
include 'connect.php';
error_reporting(0);
session_start();


$c_ID=$_SESSION['CustID'];
$_Fname=$_POST['F_name'];
$_Lname=$_POST['L_name'];
$_email1=$_POST['email'];
$_pwd1=$_POST['passwd'];
$_phoneNo1=$_POST['cont'];
$_state=$_POST['state'];
$_addr=$_POST['addr'];
$_update1="update customer set `Fname`='$_Fname',`Lname`='$_Lname',`email`='$_email1',`phoneNO`='$_phoneNo1',`state`='$_state',`billAddress`='$_addr',`password`='$_pwd1' where `CustID`='$c_ID'";
$result1=mysqli_query($connect,$_update1);
if($result)
	header('location: myaccount.php');




	$_typ=$_SESSION['type'];
	$_em=$_SESSION['emaila'];
	$_email2=$_POST['email'];
$_pwd2=$_POST['passwd'];
$_update2="update admin set `Email`='$_email2',`password`='$_pwd2' where `Email`='$_em' AND `type`='$_typ'";
$result2=mysqli_query($connect,$_update2);
	if($result2)
		header('location: myaccount.php');
if(!isset($_SESSION['name']) && !isset($_SESSION['email'])){
header("Location:Login.php");
}
?>
