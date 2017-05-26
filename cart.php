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
        
        <div class="center_index_right">
        	<div class="center_profile_right_one">
			Cart of
        	<?php
                    $sel = "select * from users where ID = '".$_SESSION['USERID']."'";
                    $exe  = mysql_query($sel) or die();
                    $fetch=mysql_fetch_array($exe);
                    $cust_name = $fetch['Name'];
                    echo $cust_name;
			?>
			</div>
			<div class="center_profile_right_two">
					<?php 
                 	$sel = "select * from cart where customer_name = '".$cust_name."'";
                 	$exe = mysql_query($sel) or die();
                 	?>
                     <table border="2"  width=98%  cellpadding="10" class="table">
                 	 <tr>
                 	 	<td>Product Name</td>
                 	 	<td>Product ID</td>
						<td>Category Name</td>
						<td>Category ID</td>
						<td>Product Price</td>
						<td>Product Quantity</td>
                 	 </tr>
                 	 <?php while($fetch = mysql_fetch_array($exe))
						{ 
					  ?>    
                 	 <tr>
                 	           	
                 	 	<td><?php echo $fetch['product_name'] ?></td>
                 	 	<td><?php echo $fetch['product_ID'] ?></td>
						<td><?php echo $fetch['category_name'] ?></td>
						<td><?php echo $fetch['category_ID'] ?></td>
						<td><?php echo $fetch['price'] ?></td>
						<td><?php echo $fetch['quantity'] ?></td>
                 	 </tr>
                 	 <?php } ?>
                    </table>
            
			</div>
        </div>
    </div>
</div>

<?php include('footer.php');?>
</body>
</html>