<?php 
	session_start();

	header("Content-Type: text/html; charset=utf-8");

	/*  import required files */
	require("../entity/member.php");
	require("../entity/invoice.php");

	require("../util/db_helper.php");

	/* get request parameters */
	$name = $_POST["name"];
	$gender = $_POST["gender"];
	$position = $_POST["position"];
	$telephone = $_POST["telephone"];
	$mobile = $_POST["mobile"];
	$mail = $_POST["mail"];
	$password = $_POST["password"];
	$accommodation = $_POST["accommodation"];
	$startDate = $_POST["startDate"];
	$startTime = $_POST["startTime"];
	$endDate = $_POST["endDate"];
	$endTime = $_POST["endTime"];
	
	$title = $_POST["title"];
	$projectType = $_POST["projectType"];
	$feeType = $_POST["feeType"];
	$remark = $_POST["remark"];

	/* write to db */
	$enterDate = parseDate($startDate, $startTime);
	$leaveDate = parseDate($endDate, $endTime);

	$member = new Member(null, $name, $gender, $position, $telephone, $mobile, $mail, $password, $accommodation, $enterDate, $leaveDate);
	$memberId = saveMember($member);
	$invoice = new Invoice(null, $memberId, $title, $projectType, $feeType, $remark);
	$result = saveInvoice($invoice);

	session_write_close();
	
	/* redirect */
	if($result) {
		$url = "../login.php";  
		echo "<script language='javascript' type='text/javascript'>";  
		echo "alert('注册成功');";
		echo "window.location.href='$url';";  
		echo "</script>";  
	}


	/* functions */
	function saveInvoice($invoice) {
		$dbHelper = DBHelperInstance();
		$sql = "insert into invoice(member_id, title, project_type, fee_type, remark) values ('"
			.$invoice->memberId."','"
			.$invoice->title."','"
			.$invoice->projectType."','"
			.$invoice->feeType."','"
			.$invoice->remark."')";
		$result = $dbHelper->execute_query($sql);
		$insertId = mysql_insert_id();
		$dbHelper->close_connection();
		return $insertId;
	}

	function saveMember($member) {
		$dbHelper = DbHelperInstance();
		$sql = "insert into member(name, gender, position, telephone, mobile, mail, password, accommodation, enter_time, leave_time) values ('"
			.$member->name."','"
			.$member->gender."','"
			.$member->position."','"
			.$member->telephone."','"
			.$member->mobile."','"
			.$member->mail."','"
			.$member->password."','"
			.$member->accommodation."','"
			.$member->enterTime."','"
			.$member->leaveTime."')";
		$result = $dbHelper->execute_query($sql);

		$memberId = mysql_insert_id();
		
		$dbHelper->close_connection();
		return $memberId;
	}

	function parseDate($date, $time) {
		// $dateArr = explode("/", $date);
		// $date = implode("-", array($dateArr[2], $dateArr[0], $dateArr[1]));
		return $date." ".$time;
	}

?>