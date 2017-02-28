<?php
include 'connect.php';
error_reporting(0);
session_start();
//if(!isset($_SESSION['name']) && !isset($_SESSION['email'])){
//header("Location:Login.php");
//}

if($_SESSION['wctype']=='WC')
	
	{
		$fbn=$_POST['bname'];
		$dof=$_POST['Dpname'];
		$fgn=$_POST['gname'];
		$sof=$_POST['Gpname'];
		$req=$_POST['req'];
		$wd=$_POST['wdate'];
		$wt=$_POST['evt'];
		$wv=$_POST['venue'];
		$adt=$_POST['ad'];
		$bbn=$_POST['Bname'];
		$bgn=$_POST['Gname'];
		$pi=$_SESSION['cardID'];
		$cid=$_SESSION['CustID'];
	
		$str2="INSERT INTO `wcustom`(`pID`, `CustID`, `F_bride`, `D_of`, `F_groom`, `S_of`, `Req`, `Wdate`, `Wtime`, `Wvenue`, `add_det`, `B_bride`, `B_groom`) 
		VALUES ('$pi','$cid','$fbn','$dof','$fgn','$sof','$req','$wd','$wt','$wv','$adt','$bbn','$bgn')";
		$wstore=mysqli_query($connect,$str2);
	}
	
	else  if($_SESSION['vctype']=='VC')
{$comp=$_POST['frs'];
$name=$_POST['fn'];
$designation=$_POST['des'];
$cont=$_POST['ct'];
$addr=$_POST['ad'];
$mailID=$_POST['eid'];
$pi=$_POST['Vid'];
$cid=$_SESSION['CustID'];
$str="INSERT INTO `vcustom`VALUES ('$pi','$cid','$comp','$name','$designation','$cont','$addr','$mailID')";
$vstore=mysqli_query($connect,$str);

}

// if($_SESSION['tctype']=='TC')
else
{$msg=$_POST['msg'];
$sal=$_POST['sal'];
$yname=$_POST['nm'];
$pi=$_SESSION['cardID'];
$cid=$_SESSION['CustID'];
$str1="INSERT INTO `tcustom`(`pID`, `CustID`, `s_mesg`, `salutation`, `s_name`)
VALUES ('$pi','$cid','$msg','$sal','$yname')";
$tstore=mysqli_query($connect,$str1);
}

header("Location:Add_To_Cart.php"); 
?>
