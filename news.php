<?php 
include('linking.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Metro Mall</title>

<link href="css/style.css" rel="stylesheet">

</head>

<body>
	<?php include('header.php');?>

<div class="main">
	<div class="center_index">
    	<?php include('stack.php');?>
        
        <div class="center_aboutus_right">
        
        <h2> News </h2>
        
        <?php
            $sel = "select * from news where ID ='".$_GET['DID']."'"; 
            $exe  = mysql_query($sel) or die();
			$fetch = mysql_fetch_array($exe);
		?>
        	<div class="aboutus_block">
         	<u><?php echo $fetch['Title'];?></u><br/> <?php echo $fetch['Description'];?>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>
</body>
</html>