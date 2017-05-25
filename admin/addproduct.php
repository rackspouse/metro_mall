<?php
 include('linked.php');


$pname1 = $_FILES['productimage1']['name'];
$tpath1 = $_FILES['productimage1']['tmp_name'];
$path1 = "../productimages/".$pname1;
move_uploaded_file($tpath1, $path1);


$pname2 = $_FILES['productimage2']['name'];
$tpath2 = $_FILES['productimage2']['tmp_name'];
$path2 = "../productimages/".$pname2;
move_uploaded_file($tpath2, $path2);

$pname3 = $_FILES['productimage3']['name'];
$tpath3 = $_FILES['productimage3']['tmp_name'];
$path3 = "../productimages/".$pname3;
move_uploaded_file($tpath3, $path3);

$pname4 = $_FILES['productimage4']['name'];
$tpath4 = $_FILES['productimage4']['tmp_name'];
$path4 = "../productimages/".$pname4;
move_uploaded_file($tpath4, $path4);
if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}


if($_POST['catname']!="" && $_POST['prodname']!="")
{
	$t1 = $_POST['catname'];
	$cat = "#cat_".substr($t1,0,3)."_".substr($t1,-4,3);
	$t2 = $_POST['prodname'];
	$prod = "#prod_".substr($t2,0,3)."_".substr($t2,-4,3);
	
	if($_GET['EID']!="")
	{	
		$upd = "update products set CatID = '".$cat."',CatName = '".$_POST['catname']."',ProdID = '".$prod."',ProdName = '".$_POST['prodname']."',ProdDesp = '".$_POST['proddesp']."',ProdMRP = '".$_POST['prodmrp']."',ProdDiscPrice = '".$_POST['proddiscprice']."',Image1 = '".$pname1."',Image2 = '".$pname2."',Image3 = '".$pname3."',Image4 = '".$pname4."' where ID ='".$_GET['EID']."'";
		mysql_query($upd) or die();	
	}
	else
	{
		$ins = "insert into products set CatID = '".$cat."',CatName = '".$_POST['catname']."',ProdID = '".$prod."',ProdName = '".$_POST['prodname']."',ProdDesp = '".$_POST['proddesp']."',ProdMRP = '".$_POST['prodmrp']."',ProdDiscPrice = '".$_POST['proddiscprice']."',Image1 = '".$pname1."',Image2 = '".$pname2."',Image3 = '".$pname3."',Image4 = '".$pname4."' ";
		mysql_query($ins) or die();	
	}
}


$sel = "select * from categories order by Title asc";
$exe  = mysql_query($sel) or die();


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Product

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
   
    <h2> Add Product</h2> 
   
    <div class="content">
    <form method="post" action="" enctype="multipart/form-data">
    	<div class = "addbox">
        	<div class="addboxone">
            	<div class="title">
                	Category
                </div>
                <div class="titlebox">
                	<select name="catname" class="titletextbox">
					<?php
					
					while($fetch = mysql_fetch_array($exe))
					{
					?>
   					<option> <?php echo$fetch['Title'];?> </option>
					<?php
					}
					?>
    				</select>
                </div>
            </div>
        	<div class="addboxone">
            	<div class="title">
                	Product Name
                </div>
                <div class="titlebox">
                	<input name="prodname" type="text" value="" class="titletextbox">
                </div>
            </div>
            <div class="addboxone">
            	<div class="title">
                	Product Description
                </div>
                <div class="titlebox">
                	<textarea name="proddesp" class="titletextarea"></textarea>
                </div>
            </div>
            <div class="addboxone">
            	<div class="title">
                	Product MRP
                </div>
                <div class="titlebox">
                	<input name="prodmrp" type="number" value="" class="titletextbox">
                </div>
            </div>
            <div class="addboxone">
            	<div class="title">
                	Product Discount Price
                </div>
                <div class="titlebox">
                	<input name="proddiscprice" type="number" value="" class="titletextbox">
                </div>
            </div>
            <div class="addboxtwo">
            	<div class="description">
                	Image #1
                </div>
                <div class="descriptionbox">
               		 <input type="file" name="productimage1">
                 </div>
            </div>
            <div class="addboxtwo">
            	<div class="description">
                	Image #2
                </div>
                <div class="descriptionbox">
               		 <input type="file" name="productimage2">
                 </div>
            </div><div class="addboxtwo">
            	<div class="description">
                	Image #3
                </div>
                <div class="descriptionbox">
               		 <input type="file" name="productimage3">
                 </div>
            </div><div class="addboxtwo">
            	<div class="description">
                	Image #4
                </div>
                <div class="descriptionbox">
               		 <input type="file" name="productimage4">
                 </div>
            </div>
            <div class="addboxthree">
            	<div>
                	<input type="submit" value="Save" class="button">
                </div>
            </div>
        </div>
        </form>
    </div>
    
   <?php include('footer.php');?>
</div>

</body>
</html>