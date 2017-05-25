<?php include('linking.php');

$pname = $_FILES['uphoto']['name'];
$tpath = $_FILES['uphoto']['tmp_name'];
$path = "profileimages/".$pname;
move_uploaded_file($tpath, $path);
	$ins = "insert into users set Gender = '".$_POST['gender']."',Name = '".$_POST['ufullname']."',Contact_no = '".$_POST['ucontactno']."',Email = '".$_POST['uemail']."',Password = '".$_POST['upassword']."',Image = '".$pname."',Address = '".$_POST['uaddress']."'  ";
	mysql_query($ins) or die();	
    ?>

<html>
<head>
<title>Metro Mall</title>
<link href="css/style.css" rel="stylesheet">
</head>

<body>

<?php include('header.php');?>
<div class="main">
	<div class="center_index">
    	
        <?php include('stack.php');?>
        
        <div class="center_signup_right">	
        	<form action="" method="post" enctype="multipart/form-data">
        		<div class="center_signup_form">
        			<div class="signup_form_feild_1">
        				<div class="signup_form_feild_left">GENDER</div>
        				<div class="signup_form_feild_right">:
        					<input type="radio" name="gender" value="Mr" required="">Mr
        					<input type="radio" name="gender" value="Miss" required="">Miss
        					<input type="radio" name="gender" value="Mrs" required="">Mrs
        				</div>
        			</div>
        			<div class="signup_form_feild_2">
        				<div class="signup_form_feild_left">NAME</div>
        				<div class="signup_form_feild_right">:
        					<input type="text" name="ufullname" value=""  required="" class="signup_text_field_box">
        				</div>
        			</div>
        			<div class="signup_form_feild_1">
        				<div class="signup_form_feild_left">CONTACT NO</div>
        				<div class="signup_form_feild_right">:
        					<input type="text" name="ucontactno" value="" required="" class="signup_text_field_box"></div>
        			</div>
        			<div class="signup_form_feild_2">
        				<div class="signup_form_feild_left">E-MAIL</div>
        				<div class="signup_form_feild_right">:
        					<input type="text" name="uemail" value="" required="" class="signup_text_field_box"></div>
        			</div>
        			<div class="signup_form_feild_1">
        				<div class="signup_form_feild_left">PASSWORD</div>
        				<div class="signup_form_feild_right">:
        					<input type="password" name="upassword" value="" required="" class="signup_text_field_box"></div>
        			</div>
        			<div class="signup_form_feild_2">
        				<div class="signup_form_feild_left">IMAGE</div>
        				<div class="signup_form_feild_right">:
        					<input type="file" name="uphoto" value=""  required=""></div>
        			</div>
        			<div class="signup_form_feild_31">
        				<div class="signup_form_feild_left">ADDRESS</div>
        				<div class="signup_form_feild_right">:
        					<textarea class="signup_text_area" required="" name="uaddress"></textarea>
        				</div>
        			</div>
        			<div class="signup_form_button_field">
        				<input type="submit" name="signup" value="Sign Up" class="signup_button">
        			</div>
        		</div>
        	</form>
        </div>
    </div>
</div>

<?php include('footer.php');?>
</body>
</html>