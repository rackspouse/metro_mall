<?php
 include('linked.php');

$mes = "";
if(isset($_POST['login']))
{
	$sel ="select * from admin where adminuname ='".$_POST['uname']."' and adminupass = '".$_POST['upass']."'";
	$exe=mysql_query($sel);
	$tot=mysql_num_rows($exe);
	
	if($tot==1)
		{
			$fetch=mysql_fetch_array($exe);
			$_SESSION['ADMINID']=$fetch['ID'];
			echo "<script>window.location='home.php'</script>";
		}
	else
		{
			$mes = "INVALID USERNAME OR PASSWORD!!";	
		}
}


?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link href="css/style.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">

<div class = "outer">

<div class = "firstdiv">
	Welcome to the Admin Panel
</div>


<div class = "seconddiv">
	<div class = "loginbox">
		<div class = "loginboxfirst">
 		   	<div class="username">
        		Username
        	</div>
            <form action="" method="post">
			<div class = "usernamebox">
        		<input name="uname" type="text" value=""/>
     	   </div>
    	</div>
   
  		<div class = "loginboxsecond">
    	<div class = "password">
       		 Password
        </div>
        <div class = "passwordbox">
        	<input name="upass" type="password" value=""/>
        </div>
    	</div>
        <?php echo $mes;  ?>
    	<div class = "lb3">
    		<div >
    			<input type="submit" name="login" value="LOGIN" class = "loginbutton"/>
        	</div>
            
   	 	</div>
       
        	</form>
    </div>
</div>

<div class = "thirddiv">
	www.iipacademy.com
</div>

</div>


</body>
</html>