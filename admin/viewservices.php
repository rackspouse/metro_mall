<?php
 include('linked.php');


if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}

$where = "";


if($_GET['DID']!="")
{
	$del = "delete from services where ID ='".$_GET['DID']."'";
	mysql_query($del) ;
}

$sel = "select * from services $where";
$exe  = mysql_query($sel) or die();	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Services

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
     <h2> View Services</h2>
    
    <div class="content">
    	<table border="1"  width="500" cellpadding="10" class="table">
        <tr>
        	<td><b>ID</b></td>
            <td><b>Title</b></td>
            <td><b>Description</b></td>
            <td><b>Image</b></td>
            <td><b>Delete</b></td>
            <td><b>Edit</b></td>
        </tr>
        	<?php
			$i=0;
			
			while($fetch = mysql_fetch_array($exe))
			{
				$i++;
				
			?>
            <tr>
            	<td><?php echo $i;?></td>
            	<td><?php echo $fetch['Title'];?></td>
            	<td><?php echo $fetch['Description'];?></td>
                <td><img src="../serviceimages/<?php echo $fetch['Image'];?>" width = 40 height = 40></td>
                <td><a href="viewservices.php?DID=<?php echo $fetch['ID'];?>">delete</a></td>
            	<td><a href="addservices.php?EID=<?php echo $fetch['ID'];?>"> Edit</a></td>
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