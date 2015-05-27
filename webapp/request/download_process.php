<?php

require("../util/db_helper.php");
$materialId = $_GET["materialId"];
$filePath = getMaterialPath($materialId);

header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=".basename($filePath));
header("Content-Transfer-Encoding: binary");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: public");
header("Content-Length: ".filesize($filePath));
readfile($filePath);


function getMaterialPath($materialId) {
	$dbHelper = DBHelperInstance();
	$sql = "select * from material where id = '".$materialId."'";
	$result = $dbHelper->execute_query($sql);
	$dbHelper->close_connection();
	$row = mysql_fetch_array($result);
	return $row["path"].$row["file_name"];
}
?>