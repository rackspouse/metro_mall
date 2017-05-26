<?php session_start();
	
unset($_SESSION['USERID']);

echo "<script>window.location='index.php'</script>";

?>