<?php
session_start();
mysql_connect("localhost","root","") or die();
mysql_select_db("wscube03admin") or die();

if($_SESSION['ADMINID']=="")
	{
		echo "<script>window.location='index.php'</script>";	
	}

if($_POST['question']!="")
{
	if($_GET['EID']!="")
	{	
		$upd = "update addinterviewquestion set question = '".$_POST['question']."',answer = '".$_POST['answer']."' where ID ='".$_GET['EID']."'";
		mysql_query($upd) or die();	
	}
	else
	{
		$ins = "insert into addinterviewquestion set question = '".$_POST['question']."',answer = '".$_POST['answer']."' ";
		mysql_query($ins) or die();	
	}
}
?>

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
    
    <h2> Add Interview Question </h2> 
    
    <div class="content">
    	<div class = "addbox">
        <form action="" method="post">
        	<div class="addboxone">
            	<div class="title">
                		QUESTION
                </div>
                <div class="titlebox">
                	<textarea name="question" class = "descriptiontextarea"></textarea>
                </div>
            </div>
            <div class="addboxtwo">
            	<div class="description">
                	ANSWER
                </div>
                <div class="descriptionbox">
               		<textarea name="answer" class = "descriptiontextarea"></textarea>
                </div>
            </div>
            <div class="addboxthree">
            	<div >
                	<input type="submit" name="update" value="Save" class="button"/>
                </div>
            </div>
            </form>
        </div>
    </div>
    
   <?php include('footer.php');?>

</div>

</body>
</html>