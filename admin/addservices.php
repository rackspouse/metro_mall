<?php
 include('linked.php');


$pname = $_FILES['serviceimage']['name'];
$ptpath = $_FILES['serviceimage']['tmp_name'];
$path = "../serviceimages/".$pname;
move_uploaded_file($ptpath, $path);

if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}

if($_POST['title']!="")
{
	if($_GET['EID'] != "")
	{
		$upd = "update services set Title = '".$_POST['title']."',Description = '".$_POST['description']."',Image = '".$_POST['image']."' where ID = '".$_GET['EID']."'";
		mysql_query($upd) or die();
	}
	else
	{
	$ins = "insert into services set Title = '".$_POST['title']."',Description = '".$_POST['description']."',Image = '". $pname ."' ";
	mysql_query($ins) or die();	
	}
}
if($pname != '')
{
    
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Services

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
     <h2>Add Services</h2>
    
    <div class="content">
    <form method="post" action="" enctype="multipart/form-data">
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
            <div class="addboxtwo">
            	<div class="description">
                	IMAGE
                </div>
                <div class="descriptionbox">
               		 <input type="file" name="serviceimage">
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