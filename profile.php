<?php include('linking.php');

if($_POST['update']!='')
{
     $upd = "update users set Gender = '".$_POST['gender']."',Name = '".$_POST['name']."',Contact_no = '".$_POST['contactno']."',Email = '".$_POST['email']."',Password = '".$_POST['password']."',Address = '".$_POST['address']."' where ID ='".$_SESSION['USERID']."'";
        mysql_query($upd) or die(); 
}

?>
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
        	<div class="center_profile_right_one">

            	<?php
                    $sel = "select * from users where ID = '".$_SESSION['USERID']."'";
                    $exe  = mysql_query($sel) or die();
                    $fetch=mysql_fetch_array($exe);
                     echo $fetch['Gender'];?>&nbsp;<?php echo $fetch['Name'];
                ?>
            </div>
            <div class="center_profile_right_two">

                <?php
                    $sel = "select * from users where ID = '".$_SESSION['USERID']."'";
                    $exe  = mysql_query($sel) or die();
                    $fetch=mysql_fetch_array($exe);
                    if(isset($_POST['edituser'])=='')
                    {
                ?>
                <table border="2"  width=98%  cellpadding="10" class="table">
                 
                <tr>
                    <td><b>E-MAIL</b></td>     <td><b><?php  echo $fetch['Email']; ?></b></td>
                </tr>
                <tr>
                    <td><b>Contact No</b></td>     <td><b><?php  echo $fetch['Contact_no']; ?></b></td>
                </tr><tr>
                    <td><b>Password</b></td>     <td><b><?php  echo $fetch['Password']; ?></b></td>
                </tr><tr>
                    <td><b>Address</b></td>     <td><b><?php  echo $fetch['Address']; ?></b></td>
                </tr>   
                </table><form method="post" action="">
                <input type="submit" value="EDIT" name="edituser" class="signup_button">
                </form>
                <?php 
                }
                    else
                {
                ?> <form method="post" action="">               
                <table border="2"  width=98%  cellpadding="10" class="table">
                <tr>
                    <td><b>GENDER</b></td>     <td>
                    <input type="radio" name="gender" value="Mr" required="">Mr
                    <input type="radio" name="gender" value="Miss" required="">Miss
                    <input type="radio" name="gender" value="Mrs" required="">Mrs</td>
                </tr>
                <tr>
                    <td><b>NAME</b></td>     <td><input name="name" type="text" value="<?php echo $fetch['Name']; ?>" class="signup_text_field_box"></td>
                </tr>
                <tr>
                    <td><b>E-MAIL</b></td>     
                    <td><input name="email" type="text" value="<?php  echo $fetch['Email']; ?>" class="signup_text_field_box"></td>
                </tr>
                <tr>
                    <td><b>Contact No</b></td> 
                    <td><input name="contactno" type="text" value="<?php  echo $fetch['Contact_no']; ?>" class="signup_text_field_box"></td>   
                </tr><tr>
                    <td><b>Password</b></td>     
                    <td><input name="password" type="text" value="<?php  echo $fetch['Password']; ?>" class="signup_text_field_box"></td>   
                </tr><tr>
                    <td><b>Address</b></td>      
                    <td><input name="address" type="text" value="<?php  echo $fetch['Address']; ?>" class="signup_text_field_box"></td>     
                </tr>   
                </table>
                <form method="post" action="">
                <input type="submit" value="SAVE" name="update" class="signup_button">
                </form>
                 <?php 
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>
</body>
</html>