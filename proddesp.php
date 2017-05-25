<?php 
include('linking.php');

$where = "";
if($_GET['PID']!="")
{
	$where = "where ProdName = '".$_GET['PID']."'";
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
        
        <div class="proddesp_center_right">
		<?php $sel = "select * from products $where";
		$exe  = mysql_query($sel) or die();	
		$fetch = mysql_fetch_array($exe) ?>
            <div class="proddesp_block_left">
            	<div class="proddesp_mainimg">
                    <img src="productimages/<?php echo $fetch['Image1']; ?>" width=100% height=100%></div>
                <hr/>
                <div class="proddesp_imgarr">
                	<div class="proddesp_subimg">
                    <img src="productimages/<?php echo $fetch['Image1']; ?>" width=100% height=100%></div>
                	<div class="proddesp_subimg">
                    <img src="productimages/<?php echo $fetch['Image2']; ?>" width=100% height=100%></div>
                	<div class="proddesp_subimg">
                    <img src="productimages/<?php echo $fetch['Image3']; ?>" width=100% height=100%></div>
                	<div class="proddesp_subimg">
                    <img src="productimages/<?php echo $fetch['Image4']; ?>" width=100% height=100%></div>
                </div>
            </div>
            
            <div class="proddesp_block_right">
            	<div class="proddesp_heading"><?php echo $_GET['PID'];?></div>
            	<div class="proddesp_description"><?php echo $fetch['ProdDesp'];?></div>
            	<div class="proddesp_cost"><div class="mrp">MRP&nbsp; = </div><div class="strikecost"><?php echo $fetch['ProdMRP'];?></div></div>
            	<div class="proddesp_cost">Discounted Price = <?php echo $fetch['ProdDiscPrice'];?></div>
            	<div class="proddesp_buy"><form>
                	<input type="submit" name="buynow" value="BUY NOW" class="buynowbutton"/>
                	<input type="submit" name="addtocart" value="ADD TO CART" class="buynowbutton"/>
                </form></div>
            </div>
        </div>
    </div>
    </div>
    
    
<?php include('footer.php');?>
</div>

</body>
</html>