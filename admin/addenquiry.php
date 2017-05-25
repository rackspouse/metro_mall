<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Interview Question

</title>

<link href="css/style1.css" rel="stylesheet">
</head>

<body bgcolor="#BDE278">
<div class = "outer">
	<?php include('header.php');?>
    
    <h2> Add INterview Question </h2> 
    
    <div class="content">
    	<div class = "addbox">
        	<div class="addboxone">
            	<div class="title">
                		QUESTION
                </div>
                <div class="titlebox">
                	<textarea name="description" class = "descriptiontextarea"></textarea>
                </div>
            </div>
            <div class="addboxtwo">
            	<div class="description">
                	ANSWER
                </div>
                <div class="descriptionbox">
               		<textarea name="description" class = "descriptiontextarea"></textarea>
                </div>
            </div>
            <div class="addboxthree">
            	<div class="button">
                	UPDATE
                </div>
            </div>
        </div>
    </div>
    
   <?php include('footer.php');?>

</div>

</body>
</html>