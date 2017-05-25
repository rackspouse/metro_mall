

<div class="center_index_left">
      
      <?php
        if($_SESSION['ADMINID']!="")
        {
            $sel = "select * from users where ID = '".$_SESSION['ADMINID']."'";
            $exe  = mysql_query($sel) or die();
            $fetch=mysql_fetch_array($exe);
      ?>
      <div class="center_index_left_one">
      <div class="login_head">
          WELCOME
      </div>
            <div class="login_body">
                  <div class="login_body_img">
                  <img src="profileimages/<?php echo $fetch['Image'];?>" height=100% width=100%>
                  </div>   
            </div>    
      </div>

      <div class="center_index_left_middle">
          <a href="cart.php"><div class="cartbox">
          <img src="images/carticon.png" height=75% width=40%><p>My Cart</p> 
          </div></a> <hr>
          <a href="address.php"><div class="cartbox">
          <img src="images/addressicon2.png" height=75% width=40%><p>My <br> Address</p>
          </div> </a>         
      </div>

      <?php
        }
        else
          {
            
       ?>

      <div class="center_index_left_one">

        <div class="login_head">
                  User Login
            </div>
            <div class="login_body">
                  <form method="post" action="">
                      <input type="text" name="username" value="" placeholder="Email" class="username_box"/>
                        <input type="password" name="password" value="" placeholder="Password" class="password_box"/>
                        <input type="submit" name="login" value="Login" class="login_button"/>
                        OR
                        <a href="signup.php">Sign up</a>
                     </form>
            </div>
           	
      </div>
      <?php
        }
       ?>
            
      <div class="center_index_left_two">
          <div class="productbox_head">
                	Our Latest Products
                </div>
		  <div class="productbox_body">
          		<?php $sel = "select * from products order by ID limit 4";
						$exe  = mysql_query($sel) or die();
				?>
               <div class="productbox_disp">
                    	<div class="disp_img"><?php $fetch = mysql_fetch_array($exe);?>
                              <a href="proddesp.php?PID=<?php echo $fetch['ProdName'];?>"><img src="productimages/<?php echo $fetch['Image1']; ?>" height=100% weigth=100%></a>
                      </div>
                        <div class="disp_img"><?php $fetch = mysql_fetch_array($exe);?>
                        <a href="proddesp.php?PID=<?php echo $fetch['ProdName'];?>">
                              <img src="productimages/<?php echo $fetch['Image1']; ?>" height=100% weigth=100%></div></a>
			        </div>
               <div class="productbox_disp">
                    	<div class="disp_img"><?php $fetch = mysql_fetch_array($exe);?>
                      <a href="proddesp.php?PID=<?php echo $fetch['ProdName'];?>">
                              <img src="productimages/<?php echo $fetch['Image1']; ?>" height=100% weigth=100%></div></a>
                        <div class="disp_img"><?php $fetch = mysql_fetch_array($exe);?>
                        <a href="proddesp.php?PID=<?php echo $fetch['ProdName'];?>">
                              <img src="productimages/<?php echo $fetch['Image1']; ?>" height=100% weigth=100%></div></a>
               </div>
          </div>
      </div>
</div>