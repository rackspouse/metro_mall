<?php
 include('linked.php');


if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}

if($_POST['companyname']!="")
{
	if($_GET['EID']!="")
	{
		$upd = "update addcontactus set CompanyName = '".$_POST['companyname']."',Address = '".$_POST['address']."',PhoneNo = '".$_POST['phoneno']."',MobileNo = '".$_POST['mobileno']."',Email = '".$_POST['email']."' where ID = '".$_GET['EID']."'";
		mysql_query($upd) or die();
	}
	else
	{
		$ins = "insert into addcontactus set CompanyName = '".$_POST['companyname']."',Address = '".$_POST['address']."',PhoneNo = '".$_POST['phoneno']."',MobileNo = '".$_POST['mobileno']."',Email = '".$_POST['email']."' ";
		mysql_query($ins) or die();	
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Contact Us

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
    <h2> Add Contact Us </h2> 
    
   <div class="content_contactus">
   <form method="post" action="">
    	<div class = "addbox">
        	<div class="addboxone">
            	<div class="title">
                	COMPANY NAME
                </div>
                <div class="titlebox">
                	<input name="companyname" type="text" value="">
                </div>
            </div>
            <div class="addboxtwo">
            	<div class="description">
                	ADDRESS
                </div>
                <div class="descriptionbox">
               		 <input name="address" type="text" value="">
                </div>
            </div>
            
            <div class="addboxtwo">
            	<div class="description">
                	PHONE NO
                </div>
                <div class="descriptionbox">
               		 <input name="phoneno" type="text" value="">
                </div>
            </div>
            
            <div class="addboxtwo">
            	<div class="description">
                	MOBILE NO
                </div>
                <div class="descriptionbox">
               		 <input name="mobileno" type="text" value="">
                </div>
            </div>
            
             <div class="addboxtwo">
            	<div class="description">
                	EMAIL
                </div>
                <div class="descriptionbox">
               		 <input name="email" type="text" value="">
                </div>
            </div>
            
            <div class="addboxthree">
            	<div>
                	<input type="submit" value="Save" class="button">
                </div>
            </div>
        </div>
        </form>
    </div>
    
   <?php include('footer.php');?>

</div>

</body>
</html>