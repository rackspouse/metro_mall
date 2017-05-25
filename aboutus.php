<?php include('linking.php');?>
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
        
        <h1> About Us </h1>
        
        <?php
    	    $sel = "select * from aboutus";
			$exe  = mysql_query($sel) or die();
			while($fetch = mysql_fetch_array($exe))
			{
		?>
        	<div class="aboutus_block">
         	 <?php echo $fetch['Description'];?>
            </div>
        <?php
			}
		?>
        </div>
    </div>
</div>

<?php include('footer.php');?>
</body>
</html>