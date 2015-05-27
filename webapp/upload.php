<?php include_once("header.php"); ?>

<body>
	<?php include_once("navi.php"); ?>
	<div class="container-body">
		<div class="col-xs-1"></div>
		<div class="col-xs-11">
			<h4 class="line-bottom">在线投稿</h4>
			<div class="content">
	         <form id="upload-form" class="form-horizontal" method="post" action="./request/upload_process.php" enctype="multipart/form-data">
  		         <div class="form-group">
 			        <label for="title" class="col-sm-2 control-label">论文题目</label>
 			        <div class="col-sm-10">
 			            <input id="title" type="text" class="form-control" id="title" placeholder="论文题目" />
 			        </div>
 		         </div>

  		         <div class="form-group">
 			        <label for="keyword" class="col-sm-2 control-label">关键词</label>
 			        <div class="col-sm-10">
 			            <input id="keyword" type="text" class="form-control" id="keyword" placeholder="多个关键词请以“、”分隔" />
 			        </div>
 		         </div>

  		         <div class="form-group">
 			        <label for="summary" class="col-sm-2 control-label">论文摘要</label>
 			        <div class="col-sm-10">
	         			<textarea id="summary" rows="3" cols="20"></textarea>
 			        </div>
 		         </div>

  		         <div class="form-group">
 			        <label for="author" class="col-sm-2 control-label">作者</label>
 			        <div class="col-sm-10">
 			            <input id="author" type="text" class="form-control" placeholder="多位作者请以“、”分隔" />
 			        </div>
 		         </div>   

  		         <div class="form-group">
 			        <label class="col-sm-2 control-label">报告类型</label>
 			        <div class="col-sm-2">
			            <input type="radio" name="reportType" value="0" checked="checked" /> 海报
 			        </div>
 			        <div class="col-sm-2">
			            <input type="radio" name="reportType" value="1" /> 口头报告
 			        </div>
 		         </div>         		           		         

  		         <div class="form-group">
 			        <label for="organization" class="col-sm-2 control-label">单位名称</label>
 			        <div class="col-sm-10">
 			            <input id="organization" type="text" class="form-control" placeholder="单位名称" />
 			        </div>
 		         </div>

  		         <div class="form-group">
 			        <label for="title" class="col-sm-2 control-label">联系电话</label>
 			        <div class="col-sm-10">
 			            <input id="phone" type="text" class="form-control" placeholder="联系电话" />
 			        </div>
 		         </div>     		

  		         <div class="form-group">
 			        <label for="mail" class="col-sm-2 control-label">邮箱</label>
 			        <div class="col-sm-10">
 			            <input type="text" class="form-control" id="mail" placeholder="exmaple@abc.com" />
 			        </div>
 		         </div>     

  		         <div class="form-group">
 			        <label for="address" class="col-sm-2 control-label">邮寄地址</label>
 			        <div class="col-sm-10">
 			            <input id="address" type="text" class="form-control" placeholder="邮寄地址" />
 			        </div>
 		         </div>     

  		         <div class="form-group">
 			        <label class="col-sm-2 control-label">邮政编码</label>
 			        <div class="col-sm-10">
 			            <input id="zipCode" type="text" class="form-control" placeholder="邮政编码" />
 			        </div>
 		         </div>     

  		         <div class="form-group">
 			        <label class="col-sm-2 control-label">上传附件</label>
 			        <div class="col-sm-10">
 			            <input id="userFile" type="file" name="userFile" size="15" enctype="multipart/form-data" maxlength="100" />
 			        </div>
 		         </div>     

 		         <div class="form-group">
 		        	<div class="col-sm-2"></div>
 		         	<div class="col-sm-2">
 		         		<a id="submitBtn" href="#fakelink" class="btn btn-block btn-lg btn-primary">提交论文</a>
 		         	</div>
 		         	<!-- <div id="submitRecord" class="col-sm-2 padding-top-little"><a href="#">提交记录</a></div> -->
 		         </div> 		              		              		              		                       		              		              		     
	         </form>

			</div>
		</div>
	</div>

<script type="text/javascript">
	var $title = $("#title");
	var $keyword = $("#keyword");
	var $summary = $("#summary");
	var $author = $("#author");
	var $reportType = $('input[name=reportType]:checked', '#upload-form');
	var $organization = $("#organization");
	var $phone = $("#phone");
	var $mail = $("#mail");
	var $address = $("#address");
	var $zipCode = $("#zipCode");

	var $submitBtn = $("#submitBtn");
	var $submitRecord = $("#submitRecord");

	var $uploadForm = $("#upload-form");

	$submitBtn.click(function(e) {
		var title = $title.val();
		var keyword = $keyword.val();
		var summary = $summary.val();
		var author = $author.val();
		var reportType = $reportType.val();
		var organization = $organization.val();
		var phone = $phone.val();
		var mail = $mail.val();
		var address = $address.val();
		var zipCode = $zipCode.val();

		if(checkParameters(title, keyword, summary, author, reportType, organization, phone, mail, address, zipCode)) {
			$uploadForm.submit();
		}
	});

	$submitRecord.click(function(e) {
		console.log("提交记录");
	});

	function checkParameters(title, keyword, summary, author, reportType, organization, phone, mail, address, zipCode) {
		if(undefined == title || title.trim() == "") {
			alert("论文题目不能为空");
			return false;
		}
		if(undefined == keyword || keyword.trim() == "") {
			alert("关键词不能为空");
			return false;
		}
		if(undefined == summary || summary.trim() == "") {
			alert("论文摘要不能为空");
			return false;
		}
		if(undefined == author || author.trim() == "") {
			alert("论文作者不能为空");
			return false;
		}
		if(undefined == reportType || (reportType != 0 && reportType != 1)) {
			alert("报告类型不能为空");
			return false;
		}
		if(undefined == organization | organization.trim() == "") {
			alert("单位名称不能为空");
			return false;
		}
		if(undefined == phone || !isNumber(phone) || !checkLength(phone, 7, 13)) {
			alert("联系电话格式不正确");
			return false;
		}
		if(undefined == mail || mail.trim() == "" || !validateMailFormat(mail)) {
			alert("邮箱格式不正确");
			return false;
		}
		if(undefined == address || address.trim() == "") {
			alert("邮寄地址不能为空");
			return false;
		}
		if(undefined == zipCode || zipCode.trim() == "" || !isNumber(zipCode) || !checkLength(zipCode, 2, 10)) {
			alert("邮政编码格式不正确");
			return false;
		}
		return true;
	}
</script>
</body>
</html>