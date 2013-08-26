<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
<title>Hello</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
<link type="text/css" href="__ROOT__/hello/Public/css/bootstrap-responsive.css" rel="stylesheet">
<link type="text/css" href="__ROOT__/hello/Public/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="__ROOT__/hello/Public/js/jquery.js"></script>
<script type="text/javascript" src="__ROOT__/hello/Public/js/bootstrap.min.js"></script>
<style type="text/css">
.faceimg {
	width:180px;
	height:180px;
	margin: 190px auto 0;
}

p {
	margin: 10px;
	text-align: center;
}

#lable {
	padding: 4px 10px 4px;
	background: rgba(235, 235, 235, .5);
	color: rgba(175, 175, 175, 0.9);
	font-weight: 600;
	text-shadow: 0 0px 0 rgba(0, 0, 0, 0);
}
.ifram{
	visibility:hidden;
}
.fileSelect{
	visibility:hidden;
}
.submit{
	visibility:hidden;
}
.container{
	overflow: hidden;
	width:940px;
}
.slide1,.silde2{
	width:940px;
	height:500px;
	float:left;
}
.silde2{
	background: red;
	height:700px;
}
.slides{
	width:1880px;
}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$('.thumbnail').click(function(){
			$('.fileSelect').click();
		});
		
		$('.fileSelect').change(function(){
			$('.submit').click();
		});
		
	});
	
	function notice(msg){
		var m = msg;
		if(m =="1"){
			$(".slide1").animate({'opacity':'0.0'},200);
			$(".slide1").animate({'margin-left':'-940px','opacity':'0.0',},2000);
		}else{
			alert('数据保存失败');
		}
	}
</script>
</head>

<body style="">
	<div class="container">
		<div class="slides">
			<!-- 首次登陆页面   -->
			<div class="slide1">
				<div class="faceimg">
					<form enctype="multipart/form-data" 
						action="__URL__/doImageUp" method="post"
						target="ifram" id="formif">
						<a href="#" class="thumbnail"> 
							<img data-src="holder.js/160x160" alt="160x160" style="width: 176px; height: 160px;" src="__ROOT__/hello/Uploads/faceup.png">
						</a>
						<p>
							<span class="label label-info" id="lable">点击图片上传真实头像</span>
						</p>
						<input type="file" name="photo" class="fileSelect"> 
						<input type="submit" class="submit">
					</form>
					<iframe width="0px" height="0px" name="ifram" class="ifram"></iframe>
				</div>
			</div>
	
			<!-- 用户首页 -->
			<div class="silde2"></div>
		</div>
	</div>
	
</body>
</html>