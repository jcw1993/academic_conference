<?php include_once("header.php"); ?>

<body>
	<?php include_once("navi.php"); ?>
	<div class="container-body">
			<div class="col-xs-1"></div>
			<div class="col-xs-11">
				<h4 class="line-bottom">参会注册</h4>
				<div class="content">
		         <form id="register-form" class="form-horizontal" method="post" action="./request/register_process.php">

	 		         <div class="form-group">
				        <label for="name" class="col-sm-2 control-label">姓名</label>
				        <div class="col-sm-10">
				            <input id="name" type="text" class="form-control" name="name" placeholder="姓名" />
				        </div>
			         </div>

 	 		         <div class="form-group">
				        <label for="gender" class="col-sm-2 control-label">性别</label>
				        <div class="col-sm-1">
				            <input type="radio" name="gender" value="0" checked="checked" /> 男
				        </div>
				        <div class="col-sm-1">
				            <input type="radio" name="gender" value="1" /> 女				        	
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">职务</label>
				        <div class="col-sm-10">
				            <input id="position" type="text" class="form-control" name="position" placeholder="职务" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">座机</label>
				        <div class="col-sm-10">
				            <input id="telephone" type="text" class="form-control" name="telephone" placeholder="办公室电话" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">手机</label>
				        <div class="col-sm-10">
				            <input id="mobile" type="text" class="form-control" name="mobile" placeholder="手机" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">电子邮箱</label>
				        <div class="col-sm-10">
				            <input id="mail" type="text" class="form-control" name="mail" placeholder="example@abc.com" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">密码</label>
				        <div class="col-sm-10">
				            <input id="password" type="password" class="form-control" name="password" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">确认密码</label>
				        <div class="col-sm-10">
				            <input id="passwordConfirm" type="password" class="form-control" name="passwordConfirm" />
				        </div>
			         </div>			         			         

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">住宿方式</label>
				        <div class="col-sm-10">
					        <div class="row">
					        	<div class="col-sm-4">
					        		<input type="radio" name="accommodation" value="0" checked="checked" /> 单人间 
					        	</div>
					        	<div class="col-sm-4">
					        		约￥350 独住				        	
					        	</div>
				        	</div>
     			            <div class="row">
     			            	<div class="col-sm-4">
     			            		<input type="radio" name="accommodation" value="1" /> 双人间（整间）
     			            	</div>
     			            	<div class="col-sm-4">
     			            		约￥350 独住
     			            	</div>
     			            </div>
	     		            <div class="row">
	     		            	<div class="col-sm-4">
	     		            		<input type="radio" name="accommodation" value="2" /> 双人间（拼房）
	     		            	</div>
	     		            	<div class="col-sm-4">
	     		            		约￥175 合住
	     		            	</div>
	     		            </div>
	     		            <div class="row">
		     		            <div class="col-xs-4">
		     		            	<input type="radio" name="accommodation" value="3" /> 不住宿
		     		            </div>
	     		            </div>
				        </div>
			         </div>			         

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">入住时间</label>
				        <div class="col-sm-5">
					        <input id="startDate"  class="form-control" name="startDate" type="text"
								placeholder="yyyy-MM-dd" />
				        </div>
				        <div class="col-sm-5">
							<input id="startTime"  class="form-control" name="startTime" type="text"
								placeholder="HH:mm:ss" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">退房时间</label>
				        <div class="col-sm-5">
					        <input id="endDate"  class="form-control" name="endDate" type="text"
								placeholder="yyyy-MM-dd" />
				        </div>
				        <div class="col-sm-5">
				        	<input id="endTime"  class="form-control" name="endTime" type="text"
								placeholder="HH:mm:ss" />
				        </div>
			         </div>

			         <div class="col-sm-12">
			         	<p>会务发票信息填写</p>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">发票抬头</label>
				        <div class="col-sm-10">
				            <input id="title" type="text" class="form-control" name="title" placeholder="开票单位名称" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">发票项目</label>
				        <div class="col-sm-2"><input type="radio" name="projectType" value="0" checked="checked" /> 会务费</div>
				        <div class="col-sm-2"><input type="radio" name="projectType" value="1" /> 会议费</div>
				        <div class="col-sm-2"><input type="radio" name="projectType" value="2" /> 培训费</div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">发票金额</label>
				        <div class="col-sm-10">
     	         			<input type="radio" name="feeType" value="0" checked="checked" /> ￥850.00（银行汇款）
     	         			<input type="radio" name="feeType" value="1" /> ￥900.00（现场缴纳）
				        </div>
			         </div>		

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">备注信息</label>
				        <div class="col-sm-10">
     	         			<textarea rows="3" cols="20" name="remark"></textarea>
				        </div>
			         </div>			

	 		         <div class="form-group">
		 		        <div class="col-sm-4"></div>
	 		         	<div class="col-sm-2">
	 		         		<a href="#fakelink" id="register-btn" class="btn btn-block btn-lg btn-primary">注册</a>
	 		         	</div>
	 		         </div> 				         		                  
		         </form>

				</div>
			</div>
	</div>

<script type="text/javascript">
	var $startDatePicker = $("#startDate");
	var $startTimePicker = $("#startTime");
	var $endDatePicker = $("#endDate");
	var $endTimePicker = $("#endTime");

	var $registerBtn = $("#register-btn");
	var $registerForm = $("#register-form");

	var $name = $("#name");
	var $gender = $('input[name=gender]:checked', '#register-form');
	var $position = $("#position");
	var $mobile = $("#mobile");
	var $mail = $("#mail");
	var $password = $("#password");
	var $passwordConfirm = $("#passwordConfirm");
	var $accommodation = $('input[name=accommodation]:checked', '#register-form');
	var $title = $("#title");
	var $projectType = $('input[name=projectType]:checked', '#register-form');
	var $feeType = $('input[name=feeType]:checked', '#register-form');


	// $startDatePicker.datepicker();
	$startDatePicker.datepicker({ dateFormat: 'yy-mm-dd' });
	// $startTimePicker.timepicker({ "timeFormat": "H:i:s" });
	// $endDatePicker.datepicker();
	$endDatePicker.datepicker({ dateFormat: 'yy-mm-dd' });
	// $endTimePicker.timepicker({ "timeFormat": "H:i:s" });	

	$registerBtn.click(function(e) {
		var name = $name.val();
		var gender = $gender.val();
		var position = $position.val();
		var mobile = $mobile.val();
		var mail = $mail.val();
		var password = $password.val();
		var passwordConfirm = $passwordConfirm.val();
		var accommodation = $accommodation.val();
		var startDate = $startDatePicker.val();
		var startTime = $startTimePicker.val();
		var endDate = $endDatePicker.val();
		var endTime = $endTimePicker.val();
		var title = $title.val();
		var projectType = $projectType.val();
		var feeType = $feeType.val();

		console.log("startDate: " + startDate);
		console.log("endDate: "  + endDate);

		if(checkParameters(name, gender, position, mobile, mail, password, passwordConfirm, accommodation, startDate, startTime, endDate, endTime, title, projectType, feeType)) {
			$registerForm.submit();
		}else {
			console.log("输入格式不合法");
		}
		
	});


	function checkParameters(name, gender, position, mobile, mail, password, passwordConfirm, accommodation, startDate, startTime, endDate, endTime, title, projectType, feeType) {
		// check parameters for member
		if(undefined == name || name.trim() == "") {
			alert("姓名不能为空");
			return false;
		}
		if(undefined == gender || (gender != 0 && gender != 1)) {
			alert("请选择性别");
			return false;
		}
		if(undefined == position || position.trim() == "") {
			alert("职务不能为空");
			return false;
		}
		if(undefined == mobile || !isNumber(mobile) || !checkLength(mobile, 10, 13)) {
			alert("手机号格式不正确");
			return false;
		}
		if(undefined == mail || mail.trim() == "" || !validateMailFormat(mail)) {
			alert("邮箱格式不正确");
			return false;
		}
		if(undefined == password || password.trim() == "") {
			alert("密码不能为空");
			return false;
		}
		if(password !== passwordConfirm) {
			alert("两次密码输入不一致");
			return false;
		}
		if(undefined == accommodation || (accommodation != 0 && accommodation != 1 && accommodation != 2 && accommodation != 3)) {
		 	alert("请选择住宿方式");
		 	return false;
	 	}	
	 	if(undefined == startDate || !validateDateFormat(startDate)) {
	 		alert("入住日期格式不正确");
	 		return false;
	 	}
	 	if(undefined == startTime || !validateTimeFormat(startTime)) {
	 		alert("入住时间格式不正确");
	 		return false;
	 	}
	 	if(undefined == endDate || !validateDateFormat(endDate)) {
	 		alert("离开日期格式不正确");
	 		return false;
	 	}
	 	if(undefined == endTime || !validateTimeFormat(startTime)) {
	 		alert("离开时间格式不正确");
	 		return false;
	 	}

	 	if(!compareDate(startDate, startTime, endDate, endTime)) {
	 		alert("离开时间不能早于入住时间");
	 		return false;
	 	}

	 	// check parameters for invoice
	 	if(undefined == title || title.trim() == "") {
	 		alert("发票抬头不能为空");
	 		return false;
	 	}
	 	if(undefined == projectType || (projectType != 0 && projectType != 1 && projectType != 2)) {
	 		alert("请选择发票项目");
	 		return false;
	 	}
	 	if(undefined == feeType || (feeType != 0 && feeType != 1)) {
	 		alert("请选择发票金额");
	 		return false;
	 	}

	 	return true;

	 }


</script>	
</body>
</html>