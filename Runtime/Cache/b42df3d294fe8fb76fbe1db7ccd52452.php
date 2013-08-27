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
	font-family: 微软雅黑;
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
	margin:0 auto;
}
.silde2{
	height:600px;
}
.slides{
	width:1880px;
}
.image{
    color:rgb(28,151,223);
	letter-spacing:-1px;
	font-size:33px;
	font-weight:800;
	text-shadow: 0px -1px 1px #1E2D4D;
	float:left;
	height:30px;
	line-height: 1;
}
.logo{
	padding:11px 0 0 18px;
	height:41px;
	background:rgb(247,247,247);
	-webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
	border-radius: 3px;
}


#appendedInputButton{
	color: rgba(90, 90, 90, .8);
	background: rgba(0, 0, 0, .1);
	/*box-shadow: 0 1px 0 rgba(255, 255, 255, .15),0px 1px 3px rgba(0, 0, 0, .2) inset;*/
	color: #B7D4EC	9;
	/*border: 1px solid rgb(196,200,202);*/
	background: #0C6EBF	9;
	letter-spacing: 1px;
	font-family: 微软雅黑;
	font-size: 13px;
	font-weight: bold;
	line-height: 18px;
	padding: 11px 14px;
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
	width:578px;
	height:70px;
	margin:30px auto 0px;
}
.sanjiao,.text{
	float:left;
}
.sanjiao{
	width:10px;
}
.uface{
	width:75px;
	height:60px;
}
.talkbox-title-left-user {
	width: 0;
	height: 0;
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 10px solid rgb(180,180,180);
	position: relative;
	top: 12px;
	left: 0px;
}
.talkbox-title-left-2-user {
	width: 0;
	height: 0;
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 10px solid rgb(217, 217, 217);
	position: relative;
	top: -8px;
	left: -1px;
}
.uface2{
	float:left;
	margin-left:18px;
}
.img-polaroid{
	height:60px;
    width:60px;
    padding:0;
    border:1px;
    -webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px ;
}

.content{
	margin-top:15px;
}
.toolbar{
	width:50px;
	height:300px;
	float:left;
}
.context{
	width:810px;
	height:300px;
	float:right;
	padding:20px;
}
.friend{
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	border:4px solid rgb(245, 245, 245);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	width:130px;
	height:149px;
	background:rgb(247,247,247);
	overflow: hidden;
	line-height:0.7;
}
.f-face-img{
	width:120px;
	font-size:13px;
}
.f-face{
	margin:5px auto 0;
	width:120px;
	background:black;
	overflow: hidden;
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.muted{
	color: rgb(190,190,190);
	font-size:12px;
	text-align: left;
	letter-spacing:0px;
	left:-2px;
	position: relative;
}
.f-bottom{
	margin-top:1px;
	border-top: 1px solid rgb(255,255,255);
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
					<div class="text">
						<input class="text" id="appendedInputButton" type="text">
					</div>
					<div class="sanjiao">
						<div class="talkbox-title-left-user"></div>
						<div class="talkbox-title-left-2-user"></div>
					</div>
					
					<div class="uface2">
						<img src="/hello/Uploads/4.jpg" class="img-polaroid">
					</div>
				</div>
				
				<div class="content">
					<div class="toolbar"></div>
					<div class="context">
						<div class="friend">
							<div class="f-face">
								<img src="/hello/Uploads/1.jpg" class="f-face-img">
							</div>
							<div class="f-bottom">
								<p class="muted">王凯&nbsp&nbsp15820781327</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>