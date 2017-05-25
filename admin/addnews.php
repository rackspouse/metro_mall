<?php
 include('linked.php');
if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}

if($_POST['title']!="")
{
	if($_GET['EID']!="")
	{	
		$upd = "update news set Title = '".$_POST['title']."',Description = '".$_POST['description']."' where ID ='".$_GET['EID']."'";
		mysql_query($upd) or die();	
	}
	else
	{
		$ins = "insert into news set Title = '".$_POST['title']."',Description = '".$_POST['description']."' ";
		mysql_query($ins) or die();	
	}
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Add News

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
    <h2>Add News</h2>
    
    <div class="content">
    <form action="" method="post">
    	<div class = "addbox">
        	<div class="addboxone">
            	<div class="title">
                	TITLE
                </div>
                <div class="titlebox">
                	<input name="title" type="text" value="" class="titletextbox">
                </div>
            </div>
            <div class="addboxone">
            	<div class="title">
                	DESCRIPTION
                </div>
                <div class="titlebox">
               		 <input name="description" type="text" value="" class="titletextbox">
                </div>
            </div>
            <div class="addboxthree">
            	<div >
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