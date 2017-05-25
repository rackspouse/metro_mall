<div class="footer">
	<div class="footer_tabs">
	<?php
        if($_SESSION['ADMINID']!="")
        {
          ?>&nbsp;&nbsp;
          <a href="profile.php">Profile</a> &nbsp;&nbsp;|&nbsp;&nbsp;  
          <?php 
            
        }
      ?>
    	<a href="index.php" onClick="">Home Page</a>&nbsp;&nbsp;|&nbsp;&nbsp;  
    	<a href="aboutus.php">About Us</a> &nbsp;&nbsp;|&nbsp;&nbsp;  
      	<a href="products.php">Products</a> &nbsp;&nbsp;|&nbsp;&nbsp;  
        <a href="services.php">Services</a>&nbsp;&nbsp;|&nbsp;&nbsp;   
		<a href="contactus.php">Contact Us</a>&nbsp;&nbsp; 
		<?php
        if($_SESSION['ADMINID']!="")
        {
          ?>|&nbsp;&nbsp;
          <a href="logout.php">Log Out</a> &nbsp;&nbsp;
          <?php 
            
        }
      ?>
    </div>
</div>