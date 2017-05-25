<?php
session_start();
mysql_connect("localhost","root","") or die();
mysql_select_db("wscube03admin") or die();

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
	$del = "delete from addinterviewquestion where ID ='".$_GET['DID']."'";
	mysql_query($del) ;
}

$sel = "select * from addinterviewquestion $where";
$exe  = mysql_query($sel) or die();	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View News

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
     <h2> View News</h2>
    
    <form method="post" action="">
    <select name="category">
    <option> -------------Search by------------- </option>
    <option> ID </option>
    <option> question </option>
    <option> answer </option>
    </select>
    <input name="tsearch" type="text" value="">
    <input name="search" type="submit" value="Search">
    <input name="disp_all" type="submit" value="Display all">
    
   	</form>
    
   
    
    
 	<div class="content">
    	<table border="1"  width="500" cellpadding="10" class="table">
        <tr>
        	<td><b>Del</b></td>
            <td><b>S.No.</b></td>
        	<td><b>Question</b></td>
            <td><b>Answer</b></td>
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
            	<td><?php echo $fetch['question'];?></td>
                <td><?php echo $fetch['answer'];?></td>
                <td><a href="viewinterviewquestion.php?DID=<?php echo $fetch['ID'];?>">delete</a></td>
            	<td><a href="addinterviewquestion.php?EID=<?php echo $fetch['ID'];?>"> Edit</a></td>
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