<?php 
	session_start();
	$_SESSION["memberId"] = null;
	session_write_close();
	
	$url = "index.php"; 
	echo "<script language='javascript' type='text/javascript'>";  
	echo "window.location.href='$url';";  
	echo "</script>"; 

?>