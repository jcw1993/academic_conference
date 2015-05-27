<?php include_once("header.php"); ?>

<body>
	<?php include_once("navi.php"); ?>
	<div class="container-body">
		<div class="col-xs-1"></div>
		<div class="col-xs-11">
			<h4 class="line-bottom">相关下载</h4>
			<div class="content">
			<?php 
				require("./util/db_helper.php");
				getDownloads();
			?>
<!-- 	        	<div class="download-item"><a href="#">论文文件1</a></div>
	        	<div class="download-item"><a href="#">论文文件2</a></div>
	        	<div class="download-item"><a href="#">论文文件3</a></div>
	        	<div class="download-item"><a href="#">论文文件4</a></div>
	        	<div class="download-item"><a href="#">论文文件5</a></div>
	        	<div class="download-item"><a href="#">论文文件6</a></div>
	        	<div class="download-item"><a href="#">论文文件7</a></div>
	        	<div class="download-item"><a href="#">论文文件8</a></div> -->
			</div>
		</div>
	</div>

<?php 
	function getDownloads() {
		$dbHelper = DBHelperInstance();
		$sql = "select * from material";
		$result = $dbHelper->execute_query($sql);
		$dbHelper->close_connection();
		while($row = mysql_fetch_array($result)) {
		  	echo '<div class="download-item"><a href="./request/download_process.php?materialId='.$row['id'].'"">'.$row['file_name'].'</a></div>';
		}
	}
?>	
</body>
</html>