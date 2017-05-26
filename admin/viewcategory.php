<?php
 include('linked.php');


if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}

$where ="";

if($_POST['disp_all']!="")
{
	$where = "";
}

if($_POST['tsearch']!="" && $_POST['category']!="")
{
	$where = "where ".$_POST['category']." like '%".$_POST['tsearch']."%'";
}

if($_GET['DID']!="")
{
	$del = "delete from categories where ID ='".$_GET['DID']."'";
	mysql_query($del) ;
}


$sel = "select * from categories order by ID desc $where";
$exe  = mysql_query($sel) or die();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Category

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
   
    <h2> View Category</h2>
    
    <form method="post" action="">
     <select name="category">
    <option> -------------Search by------------- </option>
    <option> Title </option>
    <option> Image </option>
    <option> CatID </option>
    </select>
    <input name="tsearch" type="text" value="">
    <input name="search" type="submit" value="Search">
    <input name="disp_all" type="submit" value="Display all">
   	</form>
    
    <div class="content">
    
    	<table border="2" bordercolor="#000000" width="" cellpadding="10" class="table">
        <tr>
        	<td><b>Del</b></td>
        	<td><b>SNo.</b></td>
            <td><b>Title</b></td>
            <td><b>Image</b></td>
            <td><b>Cat_ID</b></td>
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
            	<td><?php echo $fetch['Title'];?></td>
                <td><img src="../categoryimages/<?php echo $fetch['Image'];?>" width=80px height=80px></td>
                <td><?php echo $fetch['CatID'];?></td>
                <td><a href="viewcategory.php?DID=<?php echo $fetch['ID'];?>">delete</a></td>
            	<td><a href="addcategory.php?EID=<?php echo $fetch['ID'];?>"> Edit</a></td>
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