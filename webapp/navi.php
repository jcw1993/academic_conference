<?php 
	session_start();
?>

<nav class="navbar navbar-default navbar-fixed-top" style="">
	<div class="container-fluid nav-container">
		<div class="row line-bottom">
			<div class="col-xs-1"></div>
			<div class="col-xs-2">
				<div class="navbar-header">
					<a class="navbar-brand" href="http://www.cs-re.org.cn"> <img
						alt="中国稀土学会" class="logo"
						src="/resources/images/cs_re_logo.png">
					</a>					
					<a class="navbar-brand" href="http://www.nju.edu.cn"> <img
						alt="南京大学" class="logo"
						src="/resources/images/nju_logo.png">
					</a>
				</div>
			</div>
			<div class="col-xs-5 padding-top-little">
				<p class="nav-title">第二十届全国稀土催化学术会议</p>
				<!-- <p class="nav-sub-title">Educational Equipment City Form for Cooperation and Development</p> -->
				<p class="nav-sub-title">2015年8月7-9日 南京</p>
			</div>
			<div class="col-xs-4">
				<div class="row nav-top-right">
					<div class="col-sm-3">
						<a href="register.php">参会注册</a>
					</div>
					<div class="col-sm-3">
						<?php 
							if($_SESSION["memberId"] == null) {
								echo '<a href="login.php">登录</a>';
							}else {
								echo '<a href="logout.php">退出</a>';
							}
						?>
						
					</div>
				</div>
			</div>			
		</div>
		<div class="row">
			<div class="col-xs-1"></div>
			<div class="col-xs-11">
				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav" style="width: 100%">
						<li><a href="index.php">首页</a></li>
						<li><a href="summary.php">会议概况</a></li>
						<li><a href="organization.php">组织机构</a></li>
						<li><a href="academic_committee.php">学术委员会</a></li>
						<li><a href="organizing_committee.php">组织委员会</a></li>
						<li><a href="schedule.php">会议日程</a></li>
						<?php 
						if($_SESSION["memberId"] != null) {
							echo '<li><a href="upload.php">在线投稿</a></li>';
						} 
						?>
						<li><a href="download.php">相关下载</a></li>
						<li><a href="guide.php">参会指南</a></li>
						<li><a href="contact.php">联系我们</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<?php 
	session_write_close();
?>

