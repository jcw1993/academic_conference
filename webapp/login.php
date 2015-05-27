<?php include_once("header.php"); ?>

<body>
	<?php include_once("navi.php"); ?>
	<div class="container-body">
			<div class="col-xs-1"></div>
			<div class="col-xs-11">
				<h4 class="line-bottom">登录</h4>
				<div class="content">
		         <form id="login-form" class="form-horizontal" method="post" action="./request/login_process.php">

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
		 		        <div class="col-sm-4"></div>
	 		         	<div class="col-sm-2">
	 		         		<a href="#fakelink" id="login-btn" class="btn btn-block btn-lg btn-primary">登录</a>
	 		         	</div>
	 		         </div> 				         		                  
		         </form>

				</div>
			</div>
	</div>

<script type="text/javascript">

	var $loginBtn = $("#login-btn");
	var $loginForm = $("#login-form");

	var $mail = $("#mail");
	var $password = $("#password");

	$password.keyup(function(e) {
		if(e.keyCode == 13) {
	        $loginBtn.trigger("click"); 
		  }
	});

	$loginBtn.click(function(e) {
		var mail = $mail.val();
		var password = $password.val();
		if(checkParameters(mail, password)) {
			$loginForm.submit();
		}

	});

	function checkParameters(mail, password) {
		if(undefined == mail || mail.trim() == "" || !validateMailFormat(mail)) {
			alert("邮箱格式不正确");
			return false;
		}
		if(undefined == password || password.trim() == "") {
			alert("密码不能为空");
			return false;
		}
		return true;
	}

</script>	
</body>
</html>