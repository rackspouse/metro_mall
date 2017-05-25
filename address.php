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
        	<div class="center_index_right_one">

            	<?php
                $sel = "select * from users where ID = '".$_SESSION['ADMINID']."'";
            $exe  = mysql_query($sel) or die();
            $fetch=mysql_fetch_array($exe);
             echo $fetch['Image'];?>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>
</body>
</html>