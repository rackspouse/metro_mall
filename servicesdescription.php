<?php
 include('linking.php');


$where = "";

if($_GET['SID']!="")
{
	$where = "where ID = '". $_GET['SID']."' ";
}

?>
<html>
<head>
<title>
Metro Mall
</title>
<link href="css/style.css" rel="stylesheet">

</head>

<body>

<?php include('header.php');?>

<div class="main">
	<div class="center_index">
    	
        <?php include('stack.php');?>
        
        <div class="center_aboutus_right">
        <h2><?php
        $sel = "select * from services $where";
		$exe  = mysql_query($sel) or die();	
		$fetch = mysql_fetch_array($exe);
		 echo $fetch['Title'];?></h2>
        
        <?php echo $fetch['Description'];?>
           
        </div>
    </div>
</div>

<?php include('footer.php');?>
</body>
</html>