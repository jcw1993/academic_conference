<?php include_once("header.php"); ?>

<body>
	<?php include_once("navi.php"); ?>
	<div class="container-body">
		<div class="row"></div>
			<div class="col-xs-2"></div>
			<div class="col-xs-10">
				<h4 class="line-bottom">在线投稿</h4>
				<div class="content">
		         <form id="upload-form" class="form-horizontal">
      		         <div class="form-group">
     			        <label for="title" class="col-sm-2 control-label">论文题目</label>
     			        <div class="col-sm-10">
     			            <input type="text" class="form-control" id="title" placeholder="论文题目" />
     			        </div>
     		         </div>

      		         <div class="form-group">
     			        <label for="keyword" class="col-sm-2 control-label">关键词</label>
     			        <div class="col-sm-10">
     			            <input type="text" class="form-control" id="keyword" placeholder="关键词" />
     			        </div>
     		         </div>

      		         <div class="form-group">
     			        <label for="summary" class="col-sm-2 control-label">论文摘要</label>
     			        <div class="col-sm-10">
		         			<textarea id="summary" rows="3" cols="20">
		         			</textarea>
     			        </div>
     		         </div>

      		         <div class="form-group">
     			        <label for="organization" class="col-sm-2 control-label">单位名称</label>
     			        <div class="col-sm-10">
     			            <input type="text" class="form-control" id="organization" placeholder="单位名称" />
     			        </div>
     		         </div>

      		         <div class="form-group">
     			        <label for="title" class="col-sm-2 control-label">联系电话</label>
     			        <div class="col-sm-10">
     			            <input type="text" class="form-control" id="phone" placeholder="联系电话" />
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
     			            <input type="text" class="form-control" id="address" placeholder="邮寄地址" />
     			        </div>
     		         </div>     

      		         <div class="form-group">
     			        <label class="col-sm-2 control-label">邮政编码</label>
     			        <div class="col-sm-10">
     			            <input type="text" class="form-control" placeholder="邮政编码" />
     			        </div>
     		         </div>     

     		         <div class="form-group">
     		        	<div class="col-sm-2"></div>
     		         	<div class="col-sm-2">
     		         		<a href="#fakelink" class="btn btn-block btn-lg btn-primary">提交论文</a>
     		         	</div>
     		         	<a href="#">提交记录</a>
     		         </div> 		              		              		              		                       		              		              		     
		         </form>

				</div>
			</div>
	</div>
</body>
</html>