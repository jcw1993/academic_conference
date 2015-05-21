<?php include_once("header.php"); ?>

<body>
	<?php include_once("navi.php"); ?>
	<div class="container-body">
		<div class="row"></div>
			<div class="col-xs-2"></div>
			<div class="col-xs-10">
				<h4 class="line-bottom">参会注册</h4>
				<div class="content">
		         <form id="register-form" class="form-horizontal">

	 		         <div class="form-group">
				        <label for="name" class="col-sm-2 control-label">姓名</label>
				        <div class="col-sm-10">
				            <input type="text" class="form-control" id="name" placeholder="姓名" />
				        </div>
			         </div>

 	 		         <div class="form-group">
				        <label for="gender" class="col-sm-2 control-label">性别</label>
				        <div class="col-sm-10">
				            男<input type="radio" name="gender" value="male" checked="checked" />
				            女<input type="radio" name="gender" value="female" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">职务</label>
				        <div class="col-sm-10">
				            <input type="text" class="form-control" placeholder="职务" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">座机</label>
				        <div class="col-sm-10">
				            <input type="text" class="form-control" placeholder="办公室电话" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">手机</label>
				        <div class="col-sm-10">
				            <input type="text" class="form-control" placeholder="手机" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">电子邮箱</label>
				        <div class="col-sm-10">
				            <input type="text" class="form-control" placeholder="example@abc.com" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">住宿方式</label>
				        <div class="col-sm-10">
     			            单人间<input type="radio" name="gender" value="0" checked="checked" />约￥350 独住<br/>
	     		            双人间（整间）<input type="radio" name="gender" value="1" />约￥350 独住<br/>
	     		            双人间（拼房）<input type="radio" name="gender" value="2" />约￥175 合住<br/>
	     		            不住宿<input type="radio" name="gender" value="3" />
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
				            <input type="text" class="form-control" placeholder="开票单位名称" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">发票项目</label>
				        <div class="col-sm-10">
				            会务费<input type="radio" name="fee" value="0" checked="checked" />
				            会议费<input type="radio" name="fee" value="1" />
				            培训费<input type="radio" name="fee" value="2" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">发票金额</label>
				        <div class="col-sm-10">
     	         			￥850.00（银行汇款）<input type="radio" name="fee" value="0" checked="checked" />
     	         			￥900.00（现场缴纳）<input type="radio" name="fee" value="1" />
				        </div>
			         </div>		

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">备注信息</label>
				        <div class="col-sm-10">
     	         			<textarea rows="3" cols="20">
     	         			</textarea>
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

	$startDatePicker.datepicker();
	$startTimePicker.timepicker({ "timeFormat": "H:i:s" });
	$endDatePicker.datepicker();
	$endTimePicker.timepicker({ "timeFormat": "H:i:s" });	

</script>	
</body>
</html>