<?php
 include('linked.php');


$pname = $_FILES['categoryimage']['name'];
$tpath = $_FILES['categoryimage']['tmp_name'];
$path = "../categoryimages/".$pname;
move_uploaded_file($tpath, $path);

if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}

if($_POST['title']!="")
{
	$t1 = $_POST['title'];
	$cat = "#cat_".substr($t1,0,3)."_".substr($t1,-4,3);
	if($_GET['EID']!="")
	{	
		$upd = "update categories set Title = '".$_POST['title']."',Image = '".$pname."',CatID = '".$cat."' where ID ='".$_GET['EID']."' ";
		mysql_query($upd) or die();	
	}
	else
	{
		$ins = "insert into categories set Title = '".$_POST['title']."',Image = '".$pname."',CatID = '".$cat."'";
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
<title>Add Category

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
     <h2>Add Category</h2>
    
    <div class="content_courses">
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
            <div class="addboxtwo">
            	<div class="description">
                	IMAGE
                </div>
                <div class="descriptionbox">
               		 <input name="categoryimage" type="file">
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