<?php
          if(isset($_POST['login']))
            {
            $sel ="select * from users where Email ='".$_POST['username']."' and Password = '".$_POST['password']."'";
            $exe=mysql_query($sel);
            $tot=mysql_num_rows($exe);

            if($tot==1)
              {
                $fetch=mysql_fetch_array($exe);
                $_SESSION['USERID']=$fetch['ID'];
              }
            else
              {
                $mes = "INVALID USERNAME OR PASSWORD!!";  
              }
            }
            ?>
<div class="header">
	<div class="top_heading">
    Metro Mall&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="inside_heading"><img src="images/carticon_yellow.png" height="40px" width="40px">
    <?php 
      $sel = "select * from users where ID = '".$_SESSION['USERID']."'";
      $exe  = mysql_query($sel) or die();
      $fetch=mysql_fetch_array($exe);
      $cust_name = $fetch['Name'];

      $sel = "select * from cart where customer_name = '".$cust_name."'";
      $exe  = mysql_query($sel) or die();
      $num = 0;
      while($fetch = mysql_fetch_array($exe))
            { $num++;}
      echo $num
      ?></div>
    </div>
    
    <div class="top_tabs">
    <div class="top_tabs_right">
    </div>
    <div class="top_tabs_center">
    &nbsp;&nbsp;
        <?php
        if($_SESSION['USERID']!="")
        {
          ?>
          <a href="profile.php">Profile</a> &nbsp;&nbsp;|&nbsp;&nbsp;  
          <?php 
            
        }
      ?>
        <a href="index.php" onClick="">Home Page</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
    	<a href="aboutus.php">About Us</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
      	<a href="products.php">Products</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
        <a href="services.php">Services</a> &nbsp;&nbsp;|&nbsp;&nbsp;  
		<a href="contactus.php">Contact Us</a> &nbsp;&nbsp;
        <?php
        if($_SESSION['USERID']!="")
        {
          ?>|&nbsp;&nbsp;
          <a href="logout.php">Log Out</a> &nbsp;&nbsp;
          <?php 
            
        }
      ?>
     </div>
    <div class="top_tabs_left">
    </div>
    </div>
</div>
    
