<?php
 include('linked.php');

if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}

$where = "";

if($_POST['disp_all']!="")
{
	$where = "";
}

if($_POST['tsearch']!="")
{
	$where = "where ".$_POST['category']." like '%".$_POST['tsearch']."%'";
}

if($_GET['DID']!="")
{
	$del = "delete from products where ID ='".$_GET['DID']."'";
	mysql_query($del) ;
}


$sel = "select * from products $where";
$exe  = mysql_query($sel) or die();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Product

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
    <h2> View Why IIP Academy </h2> 
    
    <form method="post" action="">
    <select name="category">
    <option> -------------Search by------------- </option>
    <option> title </option>
    </select>
    <input name="tsearch" type="text" value="">
    <input name="search" type="submit" value="Search">
    <input name="disp_all" type="submit" value="Display all">
   	</form>
    
    <div class="content">
    	<table border="1" class="table">
        <tr>
        	<td><b>Del</b></td>
        	<td><b>SNo.</b></td>
        	<td><b>Cat ID</b></td>
        	<td><b>Cat Name</b></td>
        	<td><b>Prod ID</b></td>
        	<td><b>Prod Name</b></td>
        	<td><b>Prod Desp</b></td>
        	<td><b>Product MRP</b></td>
        	<td><b>Prod Disc Price</b></td>
        	<td><b>Image #1</b></td>
        	<td><b>Image #2</b></td>
        	<td><b>Image #3</b></td>
        	<td><b>Image #4</b></td>
            <td><b>Delete</b></td>
            <td><b>Edit</b></td>
        </tr>
        	<?php
			$i=0;
			while($fetch = mysql_fetch_array($exe))
			{ $i++;
				
			?>
            <tr>
            	<td><input type="checkbox" name="chkb"></td>
            	<td><?php echo $i;?></td>
            	<td><?php echo $fetch['CatID'];?></td>
            	<td><?php echo $fetch['CatName'];?></td>
            	<td><?php echo $fetch['ProdID'];?></td>
            	<td><?php echo $fetch['ProdName'];?></td>
            	<td><?php echo $fetch['ProdDesp'];?></td>
            	<td><?php echo $fetch['ProdMRP'];?></td>
            	<td><?php echo $fetch['ProdDiscPrice'];?></td>
            	<td><img src="../productimages/<?php echo $fetch['Image1'];?>" height=80px width=80px></td>
            	<td><img src="../productimages/<?php echo $fetch['Image2'];?>" height=80px width=80px></td>
            	<td><img src="../productimages/<?php echo $fetch['Image3'];?>" height=80px width=80px></td>
            	<td><img src="../productimages/<?php echo $fetch['Image4'];?>" height=80px width=80px></td>
                <td><a href="viewproduct.php?DID=<?php echo $fetch['ID'];?>">delete</a></td>
            	<td><a href="addproduct.php?EID=<?php echo $fetch['ID'];?>"> Edit</a></td>
            </tr>
			<?php
			
			}
			
			?>
        </table>
    </div>
    
    <?php include('footer.php');?>
</div>

</body>
</html>