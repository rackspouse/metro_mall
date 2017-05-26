<?php 
include('linking.php');

$where = "";
if($_GET['PID']!="")
{
    $pid = $_GET['PID'];
	$where = "where ProdName = '".$_GET['PID']."'";
}
if(isset($_POST['addtocart'])!='')
    {
        if($_SESSION['USERID']=='')
            {
            $mes = "Please login first!";
            }
        else
            {
                $sel = "select * from users where ID = '".$_SESSION['USERID']."'";
                $exe  = mysql_query($sel) or die();
                $fetch=mysql_fetch_array($exe);
                $cust_name = $fetch['Name'];
                $t1 = $cust_name;
                $cust_ID = "#cust_".substr($t1,0,3)."_".substr($t1,-4,3);

                $sel = "select * from products where ProdName = '".$_GET['PID']."'";
                $exe  = mysql_query($sel) or die(); 
                $fetch = mysql_fetch_array($exe);
                $cat_ID = $fetch['CatID'];
                $cat_name = $fetch['CatName'];
                $prod_ID = $fetch['ProdID'];
                $prod_name = $fetch['ProdName'];
                $prod_price = $fetch['ProdDiscPrice'];



            $ins = "insert into cart set customer_name = '".$cust_name."',customer_ID = '".$cust_ID."',category_ID = '".$cat_ID."',category_name = '".$cat_name."',product_ID = '".$prod_ID."',product_name = '".$prod_name."', price = '".$prod_price."',quantity = '".$_POST['prodquantity']."'";
                mysql_query($ins) or die(); 
            }
    }

?>
<html>
<head>

<script src="js/jquery-3.2.0.min.js"></script>
<script>
<?php $sel = "select * from products $where";
        $exe  = mysql_query($sel) or die(); 
        $fetch = mysql_fetch_array($exe) ?>
$(document).ready(function() {
     $("#pimg1").click(function(){
        $("#pmainimg").attr("src","productimages/<?php echo $fetch['Image1']; ?>")
    });
      $("#pimg2").click(function(){
        $("#pmainimg").attr("src","productimages/<?php echo $fetch['Image2']; ?>")
    });
       $("#pimg3").click(function(){
        $("#pmainimg").attr("src","productimages/<?php echo $fetch['Image3']; ?>")
    });
    $("#pimg4").click(function(){
        $("#pmainimg").attr("src","productimages/<?php echo $fetch['Image4']; ?>")
    });
});
</script>

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
                    <img src="productimages/<?php echo $fetch['Image1']; ?>" width=100% height=100% id="pmainimg"></div>
                <hr/>
                <div class="proddesp_imgarr">
                	<div class="proddesp_subimg">
                    <img src="productimages/<?php echo $fetch['Image1']; ?>" width=100% height=100% id="pimg1"></div>
                	<div class="proddesp_subimg">
                    <img src="productimages/<?php echo $fetch['Image2']; ?>" width=100% height=100% id="pimg2"></div>
                	<div class="proddesp_subimg">
                    <img src="productimages/<?php echo $fetch['Image3']; ?>" width=100% height=100% id="pimg3"></div>
                	<div class="proddesp_subimg">
                    <img src="productimages/<?php echo $fetch['Image4']; ?>" width=100% height=100% id="pimg4"></div>
                </div>
            </div>
            
            <div class="proddesp_block_right">
            	<div class="proddesp_heading"><?php echo $_GET['PID'];?></div>
            	<div class="proddesp_description"><?php echo $fetch['ProdDesp'];?></div>
            	<div class="proddesp_cost"><div class="mrp">MRP&nbsp; = </div><div class="strikecost"><?php echo $fetch['ProdMRP'];?></div></div>
            	<div class="proddesp_cost">Discounted Price = <?php echo $fetch['ProdDiscPrice'];?></div>
            	<div class="proddesp_buy">

                <form action="" method="post">
                Quantity = 
                <select name="prodquantity" class="titletextbox">
                    <?php for($l=1;$l<10;$l++)
                    {
                    ?>
                    <option>
                        <?php echo $l ?>
                    </option>
                    <?php } ?>
                </select><br/><br/><br/>
                	<input type="submit" name="buynow" value="BUY NOW" class="signup_button"/>
<input type="submit" name="addtocart" value="ADD TO CART" class="signup_button"/>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php 
                        echo $mes;
                    ?>
                </form></div>
            </div>
        </div>
    </div>
    </div>
    
    
<?php include('footer.php');?>
</div>

</body>
</html>