<?php
 include('linked.php');


if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}
if($_POST['update']!='')
{
	$upd = "update aboutus set Title = '".$_POST['title']."',Description = '".$_POST['description']."'";
	$exe  = mysql_query($upd) or die();	
}
	
$sel = "select * from aboutus";
$exe  = mysql_query($sel) or die();	
$fetch = mysql_fetch_array($exe);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
    <h2> About Us </h2> 
    
    <div class="content">
    <?php
		if(isset($_POST['updateaboutus'])=='')
		{
	?>
    <div class="aboutus_tb">
    	<div class="aboutus_tb_title"><?php echo $fetch['Title']; ?></div>
        <div class="aboutus_tb_desc"><?php echo $fetch['Description'];?></div>
        <div class="aboutus_tb_button"><form method="post" action=""><input type="submit" name="updateaboutus" value="Edit"></form></div>
    </div>
    <?php 
		}
		else
		{
	?>
    
    <form method="post" action="">
    	<div class = "aboutus_addbx">
        	<div class="aboutus_addbx1">
            	<div class="aboutus_ttl">
                	TITLE
                </div>
                <div class="aboutus_ttlbx">
                	<input name="title" type="text" value="<?php echo $fetch['Title']; ?>" class="aboutus_ttltxtbx">
                </div>
            </div>
            <div class="aboutus_addbx2">
            	<div class="aboutus_ttl">
                	DESCRIPTION
                </div>
                <div class="aboutus_descbx">
               		 <textarea name="description" class = "aboutus_desctxtarea"><?php echo $fetch['Description'];?></textarea>
                </div>
            </div>
            <div class="addboxthree">
            	<div>
                	<input type="submit" value="Update" name="update" >
                </div>
            </div>
        </div>
        </form>
    <?php } ?>
    </div>
    
   <?php include('footer.php');?>
</div>

</body>
</html>