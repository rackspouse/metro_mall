<?php 
include('linking.php');

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
        	<div class="center_index_right_one">
            	<img src="images/banner.png" height="290" width="730">
            </div>
            <div class="yellow_bar"><div class="news_bar">
    <marquee>
	<?php
    $sel = "select * from news";
	$exe  = mysql_query($sel) or die();	
	$i=0;
	while($fetch = mysql_fetch_array($exe))
	{ $i++;
	?>
   &nbsp;&nbsp;
    <a href="news.php?DID=<?php echo $fetch['ID'];?>"> >> <?php echo $i;?> . <?php echo $fetch['Title'];?> <<</a>
    
	<?php
	}
    ?>
    </marquee>
</div></div>
            <div class="center_index_right_two">
            	<h4>Welcome To Metro Mall</h4>
					By downloading and using a free web template from Templatesrain.com you must agree to the following Terms of Use:</br></br>
					Unlike most free web templates providers you may use these free web templates for your own and/or your clients' websites, but you may 
                    not sell/offer for free our templates in any sort of collection, such as distributing to a third party via CD, diskette, print or 
                    storing and letting others to download them from your websites.</br></br>
					Templatesrain.com does not allow you to use the templates for websites or individuals that participate in warez, hacking, cracking, 
                    malicious computer crime or fraud, or any other material or activity that is marked illegal by law and society.
                    <div class="readmore"><a href="aboutus.php">Read more...</a></div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>
</body>
</html>