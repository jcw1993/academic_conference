<?php
header("Content-type:text/html;charset=utf-8");

require("../entity/material.php");
require("../util/db_helper.php");

$uploadFolder = getUploadFolder();

$parameterName = "userFile";
$originName = $_FILES[$parameterName]["name"];
$name = $originName;

/* javascript */
$url = "../index.php";  

if ($_FILES[$parameterName]["error"] > 0) {
	echo "<script language='javascript' type='text/javascript'>";  
	$url = "../upload.php";  
	echo "alert('上传失败');";
} else {

	if (file_exists($uploadFolder.$_FILES[$parameterName]["name"])) {
		echo "<script language='javascript' type='text/javascript'>";  
		$url = "../upload.php";
		echo "alert('上传失败,文件已存在');";
	} else {
		echo "<script language='javascript' type='text/javascript'>";  
		move_uploaded_file($_FILES[$parameterName]["tmp_name"], $uploadFolder.$_FILES[$parameterName]["name"]);

		$material = new Material(null, $originName, $name, $uploadFolder, null, null);
		$dbHelper = DbHelperInstance();
		$sql = "insert into material(origin_name, file_name, path) values ('"
			.$material->originName."', '"
			.$material->name."', '"
			.$material->path."')";

		$dbHelper->execute_query($sql);
		$materialId = mysql_insert_id();
		$dbHelper->close_connection();

		if($materialId) {
			echo "alert('上传成功');";
		}else {
			echo "alert('上传失败,未知错误');";
		}
	}
}

echo "window.location.href='$url';";  
echo "</script>";  


function getUploadFolder() {
	$upload_config = parse_ini_file("../config/download_config.ini");
	return $upload_config["uploadFolder"];
} 
?>