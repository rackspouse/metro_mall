<?php
include('linking.php');
$where = "";
if($_GET['CID']!="")
{
	$where = "where CatName = '".$_GET['CID']."'";
}

?><html>
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
        	<h2><?php echo $_GET['CID'];?></h2>
            <?php
            $sel = "select * from products $where";
			$exe  = mysql_query($sel) or die();	
				while($fetch = mysql_fetch_array($exe))
				{
			?>
            <a href="proddesp.php?PID=<?php echo $fetch['ProdName'];?>">
            <div class="services_block">
            	<div class="services_blockimg">
                	<img src="productimages/<?php echo $fetch['Image1'];?>" height=100% width=100%>
                </div>
                <div class="services_blockdata">
                	<?php echo $fetch['ProdName']; ?>
                   Rs <?php echo $fetch['ProdDiscPrice'];?>
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