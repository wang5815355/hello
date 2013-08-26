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
body{
	background: rgb(241,241,241);
}
.faceimg {
	width:180px;
	height:180px;
	margin: 110px auto 0;
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
	height:600px;
}
.slides{
	width:1880px;
}
.image{
    color:rgb(28,151,223);
	letter-spacing:-4px;
	font-size:53px;
	font-weight:800;
	text-shadow: 0px -1px 1px #1E2D4D;
	float:left;
	height:60px;
	margin-left:20px;
	margin-top:10px;
	line-height: 1;
}
.logo{
	height:90px;
}


#appendedInputButton{
	color: rgba(255, 255, 255, .8);
	background: rgba(0, 0, 0, .1);
	/*box-shadow: 0 1px 0 rgba(255, 255, 255, .15),0px 1px 3px rgba(0, 0, 0, .2) inset;*/
	color: #B7D4EC	9;
	border: 1px solid #147DCD;
	background: #0C6EBF	9;
	letter-spacing: 1px;
	font-family: 微软雅黑;
	font-size: 13px;
	font-weight: bold;
	line-height: 18px;
	padding: 9px 14px;
	width:460px;
}
input[type="text"],input[type="password"]{
	font-size: 12px;
}

input::-webkit-input-placeholder {
	color: rgba(255, 255, 255,.6);
}
input:-moz-placeholder {
	color: rgba(255, 255, 255,.6);
}
.inputbox{
	width:490px;
	margin:0px auto;
}
.uface{
	width:75px;
	height:60px;
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
		if(m == "1"){
			$(".slide1").animate({'margin-left':'-940px','opacity':'0.0',},1800);
		}else{
			alert('数据保存失败');
		}
	}
</script>
</head>

<body>
	<div class="logo">
		<div class="image">Hello</div>
	</div>
	<div class="container">
		<div class="slides">
			<?php if(($slide1) == "slide1"): ?><!-- 首次登陆页面   -->
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
			</div><?php endif; ?>
			
			<!-- 用户首页 -->
			<div class="silde2">
				<div class="inputbox">
					<input class="text" id="appendedInputButton" type="text">
				</div>
				<div class="uface">
					<a href="#" class="thumbnail"> 
							<img data-src="holder.js/160x160" alt="160x160" style="width: 66px; height: 61px;" src="__ROOT__/hello/Uploads/faceup.png">
					</a>
				</div>
				<div class="content"></div>
			</div>
		</div>
	</div>
	
</body>
</html>