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
        	<h2>Categories</h2>
            <?php
				$sel = "select * from categories $where";
				$exe  = mysql_query($sel) or die();	
				while($fetch = mysql_fetch_array($exe))
				{
			?>
            <a href="prodincat.php?CID=<?php echo $fetch['Title'];?>">
            <div class="services_block">
            	<div class="services_blockimg">
                	<img src="categoryimages/<?php echo $fetch['Image']; ?>" height=100% width=100%>
                </div>
                <div class="services_blockdata">
                	<?php echo $fetch['Title']; ?>
                </div>
            </div>
            </a>
            <?php
				}
			?>
        </div>
    </div>
</div>

<?php include('footer.php');?>
</body>
</html>