<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact</title>

<link href="css/style.css" rel="stylesheet">

</head>

<body bgcolor="#000000">

<div class="outer">

	<?php include('header.php');?>
       
    <div class="three_login">
	   <?php include('stack.php');?>
            <div class="right_login">
            
            <h2><u>LOG IN</u></h2>
            <form method="post" action="">
            <div class="loginbox">
            	<div class="loginboxupper">
                	<div class="loginboxupperleft">
                    	Username
                    </div>
                    <div class="loginboxupperright">
                    	<input type="text" name="username" value="">
                    </div>
                </div>
                
                <div class="loginboxmiddle">
                	<div class="loginboxmiddleleft">
                    	Password
                    </div>
                    <div class="loginboxmiddleright">
                    	<input type="password" name="password" value="">
                    </div>
                </div>
                
                <div class="loginboxlower">
                	<div>
                    	<input type="submit" value="Log in" name="logbutton">
                    </div>
                </div>
            </div>
            </form>           
            </div>
	</div>
    
    <?php include('footer.php');?>

    
</div>

</body>
</html>
