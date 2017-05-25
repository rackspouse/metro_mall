<?php
 include('linked.php');


if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}

$category = "";
$where ="";

if($_POST['disp_all']!="")
{
	$where = "";
}

if($_POST['tsearch']!="" & $_POST['category']!="")
{
	$where = "where ".$_POST['category']." like '%".$_POST['tsearch']."%'";
}


if($_GET['DID']!="")
{
	$del = "delete from addcontactus where ID ='".$_GET['DID']."'";
	mysql_query($del) ;
}

$sel = "select * from addcontactus $where";
$exe  = mysql_query($sel) or die();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Contact Us

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
    <h2> View Contact Us </h2> 
    
    <form method="post" action="">
    <select name="category">
    <option> -------------Search by------------- </option>
    <option> ID </option>
    <option> companyname </option>
    <option> address </option>
    <option> phoneno </option>
    <option> mobileno </option>
    <option> email </option>
    </select>
    <input name="tsearch" type="text" value="">
    <input name="search" type="submit" value="Search">
    <input name="disp_all" type="submit" value="Display all">
   	</form>    
    
    <div class="content">
    	<table border="1"  width="1000" cellpadding="10" class="table">
        <tr>
        	<td><b>Del</b></td>
        	<td><b>ID</b></td>
            <td><b>Company Name</b></td>
            <td><b>Address</b></td>
            <td width="50"><b>Phone No.</b></td>
            <td width="50"><b>Mobile No.</b></td>
            <td width="90"><b>Email</b></td>
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
            	<td><?php echo $fetch['CompanyName'];?></td>
                <td><?php echo $fetch['Address'];?></td>
                <td><?php echo $fetch['PhoneNo'];?></td>
                <td><?php echo $fetch['MobileNo'];?></td>
                <td><?php echo $fetch['Email'];?></td>
                <td><a href="viewcontactus.php?DID=<?php echo $fetch['ID'];?>">delete</a></td>
            	<td><a href="addcontactus.php?EID=<?php echo $fetch['ID'];?>"> Edit</a></td>
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