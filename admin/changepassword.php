<?php
 include('linked.php');


$mes = "";
if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}

if(isset($_POST['save']))
{
	$sel = "select * from admin where adminupass = '".$_POST['oldpass']."'";
	$exe=mysql_query($sel);
	$tot=mysql_num_rows($exe);
	if($tot == 1)
	{
		$upd = "update admin set adminupass = '".$_POST['newpass']."' where ID ='".$_SESSION['ADMINID']."'";
		mysql_query($upd) or die();	
	}
	else
	{
		$mes = "OLD PASSWORD NOT CORRECT!!";
	}
}



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
    <h2> Change Password </h2> 
    
    <div class="content">
    	<form action="" method="post">
    	<div class = "addbox">
        	<div class="addboxone">
            	<div class="title">
                	OLD PASSWORD
                </div>
                <div class="titlebox">
                	<input name="oldpass" type="text" value="">
                </div>
            </div>
            <div class="addboxtwo">
            	<div class="description">
                	NEW PASSWORD
                </div>
                <div class="descriptionbox">
               		 <input name="newpass" type="text" value="">
                </div>
            </div>
            <div class="addboxthree">
            	<div >
                	<input type="submit" value="Save" class="button" name="save">
                </div>
            </div>
        </div>
        <?php echo $mes;?>
        </form>
    </div>
    
   <?php include('footer.php');?>
</div>

</body>
</html>