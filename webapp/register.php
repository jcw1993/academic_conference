<?php include_once("header.php"); ?>

<body>
	<?php include_once("navi.php"); ?>
	<div class="container-body">
		<div class="row"></div>
			<div class="col-xs-2"></div>
			<div class="col-xs-10">
				<h4 class="line-bottom">参会注册</h4>
				<div class="content">
		         <form id="register-form" class="form-horizontal" method="post">

	 		         <div class="form-group">
				        <label for="name" class="col-sm-2 control-label">姓名</label>
				        <div class="col-sm-10">
				            <input type="text" class="form-control" id="name" placeholder="姓名" />
				        </div>
			         </div>

 	 		         <div class="form-group">
				        <label for="gender" class="col-sm-2 control-label">性别</label>
				        <div class="col-sm-1">
				            <input type="radio" name="gender" value="male" checked="checked" /> 男
				        </div>
				        <div class="col-sm-1">
				            <input type="radio" name="gender" value="female" /> 女				        	
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
					        <div class="row">
					        	<div class="col-sm-4">
					        		<input type="radio" name="room_fee" value="0" checked="checked" /> 单人间 
					        	</div>
					        	<div class="col-sm-4">
					        		约￥350 独住				        	
					        	</div>
				        	</div>
     			            <div class="row">
     			            	<div class="col-sm-4">
     			            		<input type="radio" name="room_fee" value="1" /> 双人间（整间）
     			            	</div>
     			            	<div class="col-sm-4">
     			            		约￥350 独住
     			            	</div>
     			            </div>
	     		            <div class="row">
	     		            	<div class="col-sm-4">
	     		            		<input type="radio" name="room_fee" value="2" /> 双人间（拼房）
	     		            	</div>
	     		            	<div class="col-sm-4">
	     		            		约￥175 合住
	     		            	</div>
	     		            </div>
	     		            <div class="row">
		     		            <div class="col-xs-4">
		     		            	<input type="radio" name="room_fee" value="3" /> 不住宿
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
				            <input type="text" class="form-control" placeholder="开票单位名称" />
				        </div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">发票项目</label>
				        <div class="col-sm-2"><input type="radio" name="fee" value="0" checked="checked" /> 会务费</div>
				        <div class="col-sm-2"><input type="radio" name="fee" value="1" /> 会议费</div>
				        <div class="col-sm-2"><input type="radio" name="fee" value="2" /> 培训费</div>
			         </div>

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">发票金额</label>
				        <div class="col-sm-10">
     	         			<input type="radio" name="fee" value="0" checked="checked" /> ￥850.00（银行汇款）
     	         			<input type="radio" name="fee" value="1" /> ￥900.00（现场缴纳）
				        </div>
			         </div>		

	 		         <div class="form-group">
				        <label class="col-sm-2 control-label">备注信息</label>
				        <div class="col-sm-10">
     	         			<textarea rows="3" cols="20"></textarea>
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