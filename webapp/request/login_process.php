<?php 
	session_start();

	header("Content-Type: text/html; charset=utf-8");

	/*  import required files */
	require("../entity/member.php");
	require("../util/db_helper.php");

	/* get request parameters */
	$mail = $_POST["mail"];
	$password = $_POST["password"];

	$mail = trim($mail);

	$memberId = checkIdentity($mail, $password);

	/* redirect */
	$url = null;
	if($memberId) {
		$url = "../index.php";  
		$_SESSION["memberId"] = $memberId;
	}else {
		$url = "../login.php";
	}
	session_write_close();
	
	echo "<script language='javascript' type='text/javascript'>";  
	echo "window.location.href='$url';";  
	echo "</script>"; 

	/* functions */
	function checkIdentity($mail, $password) {
		$dbHelper = DbHelperInstance();
		$sql = "select * from member where mail = '".$mail."' and password = '".$password."'";
		$result = $dbHelper->execute_query($sql);
		$dbHelper->close_connection();
		$row = mysql_fetch_array($result); 
		$memberId = $row["id"];
		return $memberId;
	}

	// function checkResultEmpty($result) {
	// 	$row = mysql_fetch_array($result); 
	// 	if(empty($row)){ 
	// 		return true;
	// 	} 
	// 	else { 
	// 		return false;
	// 	} 
	// }

?>