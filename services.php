<?php 
include('linking.php');
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
        	<h2>Services</h2>
            
            <?php
			$sel = "select * from services $where";
			$exe  = mysql_query($sel) or die();	 
			while($fetch = mysql_fetch_array($exe))
			{
			?>
            <a href="servicesdescription.php?SID=<?php echo $fetch['ID'];?>"><div class="services_block">
            	<div class="services_blockimg">
                	<img src="serviceimages/<?php echo $fetch['Image'];?>" height = 150px width = 100%>
                </div>
                <div class="services_blockdata">
                	<?php echo $fetch['Title'];?>
                </div>
            </div>
            </a>
            <?php }?>
        </div>
    </div>
</div>

<?php include('footer.php');?>
</body>
</html>