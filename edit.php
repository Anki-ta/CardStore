<?php 
include 'connect.php';
session_start();
if((!isset($_SESSION['name']) && !isset($_SESSION['email'])))
{
header("Location:/CardStore/Login.php");
}
$F_name=$_SESSION['name'];
$c_ID=$_SESSION['CustID'];
$sql_user="select * from customer where CustID='$c_ID'";
$account=mysqli_query($connect,$sql_user);
$detail=mysqli_fetch_array($account);
?>
<html>
<head>
<title>Edit Profile</title>
<meta name="viewport" content="width=device-width,initial scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<title>
CardStore---Homepage
</title>
<style>
#wrapper
{width:900px;
 margin:60 auto;
}




a:hover
{color:black;
}
.p
{position:absolute;
 bottom:80px;
 left:600px;
}
#t1{
font-size:20px;
font-weight:bold;
color:#769250;
}

li
{float:left;
}
li a:hover,.drop:hover,.nav1:hover
{background-color:#8B9DC3;
}


.content
{display:block;
width:100%;
height:auto;
background-color:white;
background: rgba(255,255,255,0.8);

}

.steps
{list-style-type:circle;
 list-style-position:inside;
font-family:Comic Sans MS;
font-size:20px;
display: block;
border-style:inset;
color:	#a0333a;
background-color:#DDE26A;
}
.o_steps
{padding:10px;
text-align:center;

}
.under_footer
{
   color:white;

list-style-type:none;
float:left;
}
 .lnk  .lnk_foot:hover 
{color: black;
background-color:#00468C;
text-decoration :none;}
.lnk a
{color:white;
background-color:#00468C;
text-decoration :none;
}
.LinkColor 
{text-decoration:none;
color:#b4bcc0;

}
a.LinkColor:hover
{color:black;
}

  .about
{ 
    width: 800px;
    height:auto;

text-align:left;


margin:0 auto;
}
</style>
<script type=text/javascript>

</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="\CardStore\images\grey-back.jpg" style="background-size:cover" >
<div id="wrapper" >

<div class="content">


<center style="background-color:white;">
<a href="Homepage.php" class="LinkColor"><font face=Comic Sans MS >Home</font></a>
<font color=#b4bcc0>&nbsp > &nbsp</font>
<a href="myaccount.php" class="LinkColor"><font face=Comic Sans MS >My Account</font></a>
<font color=#b4bcc0>&nbsp > &nbsp</font>
<font face=Comic Sans MS color=#F7468A>Edit Profile</font></a></center><hr><br/>

<br>
								<center>Welcome<font style="font-family:Lucida Calligraphy;"><?php echo "  ".$detail[1]; ?></font>
								
		
		
			<p>
				
		
							
						MY PROFILE</center>
								
							
						
								 <div class="about">
									<form action="edit_profile.php" method="POST">
									First Name:<input type="text" name="F_name" value="<?php echo $detail[1]; ?>" class="form-control">
									Last Name:<input type="text" name="L_name" value="<?php echo $detail[2]; ?>" class="form-control">
									E-mail Address:<input type="text" name="email" value="<?php echo $detail[3]; ?>" class="form-control">
									Password:<input type="password" name="passwd" value="<?php echo $detail[5];?>" class="form-control">
									Contact No.:<input type="text" name="cont" value="<?php echo $detail[4];?>" class="form-control">
									State:<input type="text" name="state" value="<?php echo $detail[7];?>" class="form-control">
									Address:<textarea rows=3 cols=50 class="form-control" name="addr"><?php echo $detail[6];?></textarea><br />
									<center><input class="btn btn-primary " type="submit" value="  save  ">
									<input class="btn btn-primary " type="reset" value="  Reset  "></center>
									</form>
									<br>
<br>
								</div>
				
				</p>
				
</div>



</div>

</body>
</html>
