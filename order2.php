<?php
include "connect.php";
error_reporting(0);
session_start();

$cid=$_SESSION['CustID'];
$cdate=date("Y/m/d");
$c=mysqli_query($connect,"SELECT  * FROM `shoppingcart` WHERE `custID`=".$_SESSION['CustID']."AND `CartID`=".$_SESSION['rno']['cartID']);



while($row=mysqli_fetch_array($c) ){
	$crt=$row['CartID'];
	$qty=$row['quantity'];
	$ptype=$row['pprType'];
	$ttl=$row['total'];
    $d_addr=$_SESSION['ad'].",".$_SESSION['state'];
	
$save="INSERT INTO `custorder`(`orderID`, `CustID`, `CartID`, `pID`, `pprType`, `qty`, `delAddr`, `amount`, `status`, `orderDate`) 
VALUES ('','$cid','$crt','$pi','$ptype','$qty','$d_addr','$ttl','pending','$cdate')";

$s=mysqli_query('$connect','$save');
}
if($_SESSION['setFlag']=='1')
{
	 $d_addr=$_POST['ad'].",".$_POST['state'];
	 $c=mysqli_query($connect,"SELECT  * FROM `shoppingcart` WHERE `custID`=".$_SESSION['CustID']."AND `CartID`=".$_SESSION['rno']['cartID']);
	 
while($row=mysqli_fetch_array($c) )
{

	$save1="UPDATE `custorder` SET `delAddr`=[' $d_addr'] WHERE `custID`=".$_SESSION['CustID']."AND `CartID`=".$_SESSION['rno']['cartID'];
$s1=mysqli_query('$connect','$save1');}
	unset($_SESSION['setFlag']);
	
}	

 header("Location:thanks.php");
?>
