<?php
mysql_connect("localhost","root","") or die();
mysql_select_db("wscube03admin") or die();

if($_POST['name']!="")
{
	if($_GET['EID']!="")
	{
		$upd = "update register set gender = '".$_POST['gender']."',name = '".$_POST['name']."',contactno = '".$_POST['contact_no']."',country = '".$_POST['country']."',state = '".$_POST['state']."',city = '".$_POST['city']."',address = '".$_POST['address']."',email = '".$_POST['email']."' where ID = '".$_GET['EID']."' ";
		mysql_query($upd) or die();	
	}
	else
	{
		$ins = "insert into register set gender = '".$_POST['gender']."',name = '".$_POST['name']."',contactno = '".$_POST['contact_no']."',country = '".$_POST['country']."',state = '".$_POST['state']."',city = '".$_POST['city']."',address = '".$_POST['address']."',email = '".$_POST['email']."' ";
		mysql_query($ins) or die();	
	}
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>

<link href="css/style.css" rel="stylesheet">

</head>

<body bgcolor="#000000">

<div class="outer">

	<?php include('header.php');?>
       
    <div class="three_register">
	   <?php include('stack.php');?>
            <div class="right_register">
            
            <h2><u>REGISTER</u></h2>
           <form action="" method="post">
            	<div class="form">
                    
                    <div>
                    	<div class="gender">Gender
                        </div>
                        <div class="gender_button">
                        <input name="gender" value="Mr" type="radio">Mr 
                        <input name="gender" value="Miss" type="radio">Miss
                        <input name="gender" value="Mrs" type="radio">Mrs
                        </div>
                    </div>
                    
                    <div>
                    	<div class="name">
                        	Name
                        </div>
                        
                        <div class="name_box">
                        	<input name="name" type="text" value="" class="name_box_in">
                        </div>
                    </div>
                    
                    <div>
                    	<div class="contact_no">Contact no
                        </div>
                        
                        <div class="contact_no_box">
                        <input name="contact_no" type="tel" value="" class="contact_no_box_in">
                        </div>
                    </div>
                    
                    <div>
                    	<div class="country">
                        	Country
                        </div>
                        
                        <div class="country_select">
                        	<select name="country" class="country_in">
                            	<option> -------------Select------------- </option>
                            	<option> India </option>
                                <option> Australia </option>
                                <option> Pakistan </option>
                                <option> Saudi Arabia </option>
                                <option> Iraq </option>
                             </select>
                        </div>
                    </div>
                    
                     <div>
                    	<div class="state">
                        	State
                        </div>
                        
                        <div class="state_select">
                        	<select name="state" class="state_in">
                            	<option> -------------Select------------- </option>
                            	<option> Rajasthan </option>
                                <option> Kerela </option>
                                <option> Maharashtra </option>
                                <option> Dubai </option>
                                <option> Assam </option>
                             </select>
                        </div>
                    </div>
                    
                    <div>
                    	<div class="city">
                        	City
                        </div>
                        
                        <div class="city_select">
                        	<select name="city" class="city_in">
                            	<option> -------------Select--------------- </option>
                            	<option> Mumbai </option>
                                <option> Delhi </option>
                                <option> Bikaner </option>
                                <option> Kolkata </option>
                                <option> Dehradun </option>
                             </select>
                        </div>
                    </div>
                    
                     <div>
                    	<div class="address">
                        	Address
                        </div>
                        
                        <div class="address_box">
                        	<textarea name="address" class="address_in"></textarea>
                        </div>
                    </div>
                    
                    <div>
                    	<div class="email">
                        	Email
                        </div>
                        
                        <div class="email_box">
                        	<input name="email" type="text" value="" class="email_box_in">
                        </div>
                    </div>
              
                    <div class="button">
                    	<input name="send" type="submit" value="Save">
                    </div>
                    
                </div>
                </form>
            </div>
	</div>
    
    <?php include('footer.php');?>

    
</div>

</body>
</html>
