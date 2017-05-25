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


if($_GET['DID'])
{
	$del = "delete from users where ID ='".$_GET['DID']."'"; 
	mysql_query($del) or die();
}

$sel = "select * from users";
$exe  = mysql_query($sel) or die();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Users

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
    <h2> View Users </h2> 
    
    <form method="post" action="">
    <select name="category">
    <option> -------------Search by------------- </option>
    <option> ID </option>
    <option> Gender </option>
    <option> Name </option>
    <option> Contact_no </option>
    <option> Address </option>
    <option> Email </option>
    </select>
    <input name="tsearch" type="text" value="">
    <input name="search" type="submit" value="Search">
    <input name="disp_all" type="submit" value="Display all">
   	</form>
    
    <div class="content">
    	<table border="1"  width="1200" cellpadding="10" class="table">
        <tr>
     	    <td><b>Del</b></td>
        	<td><b>ID</b></td>
            <td width="40"><b>Gender</b></td>
            <td width="200"><b>Name</b></td>
            <td><b>Contact No.</b></td>
            <td width="150"><b>Address</b></td>
            <td width="250"><b>Email</b></td>
            <td width="250"><b>Image</b></td>
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
            	<td><?php echo $fetch['Gender']?></td>
                <td><?php echo $fetch['Name']?></td>
                <td><?php echo $fetch['Contact_no']?></td>
            	<td><?php echo $fetch['Address']?></td>
                <td><?php echo $fetch['Email']?></td>
                <td><img src="../profileimages/<?php echo $fetch['Image']?>" height=80px width=80px></td>
                <td><a href="viewusers.php?DID=<?php echo $fetch['ID'];?>">delete</a></td>
            	<td><a href="../register.php?EID=<?php echo $fetch['ID'];?>"> Edit</a></td>
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