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
	width:420px;
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
	left: -1px;
}
.talkbox-title-left-2-user {
	width: 0;
	height: 0;
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 10px solid rgb(217, 217, 217);
	position: relative;
	top: -8px;
	left: -2px;
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

.toolbar{
	width:190px;
	height:300px;
	float:right;
	margin-top:30px;
}
.context,.context-captain,.context-cirman{
	width:720px;
	height:300px;
	float:left;
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
	float:left;
	margin-left:42px;
	margin-top:30px;
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
.group{
	background: rgb(248, 248, 248);
	text-align: left;
	padding: 10px 15px 8px;
	/*-webkit-box-shadow: 1px 1px 0px rgba(0,0,0,.2);
	-moz-box-shadow: 1px 1px 0px rgba(0,0,0,.2);*/
	box-shadow: 0 0 2px rgba(0,0,0,.2);
	border-radius: 2px;
	word-wrap:break-word;
	color: rgb(182, 182, 182);
	letter-spacing: 1px;
	font-weight:bold;
	font-size:12px;	
	width:150px;
	margin:4px;
}
.group-top{
	background:rgb(28,151,223);
	color: rgba(250,250,250,.8);
}
.finfo{
	background: rgba(252, 252, 252, 0.9);
	padding: 2px 7px 2px;
	box-shadow: 0 0 2px rgba(0,0,0,.2);
	border-radius: 2px;
	word-wrap: break-word;
	color: rgb(97, 179, 255);
	letter-spacing: 1px;
	font-weight: bold;
	float:right;
	margin-left:4px;
	margin-top:-3px;
	cursor: pointer;
}
.finfo:HOVER{
	background: rgba(252, 252, 252, 0.5);
	color: rgba(250,250,250,.8);
}
.talkbox-title-left{
			width: 0;
			height: 0;
			border-top: 10px solid transparent;
			border-bottom: 10px solid transparent;
			border-right: 10px solid #d9d9d9;
			position:relative; 
			top:15px; 
			left:-11px;
}
.talkbox-title-left-2{
			width: 0;
			height: 0;
			border-top: 10px solid transparent;
			border-bottom: 10px solid transparent;
			border-right: 10px solid rgb(250,250,250);
			position:relative ; 
			top:-5px; 
			left:-10px;
}

.talkbox,.talkbox-user{
			background-color: rgb(250,250,250);
			border: 1px solid #d9d9d9;
			text-align: left;
			padding: 15px 20px 13px;
			margin-left:-72px;
			border-radius: 3px;
			-webkit-box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
			-moz-box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
			box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
			word-wrap:break-word;
			max-width:370px;
			min-width:50px;
			position:relative;
			left:-76px;
			color:rgb(28,151,223);
			letter-spacing: 1px;
			font-weight:bold;
			font-size:15px;
}
.captain-talk {
	position: relative;
	left: -48px;
	z-index: 2;
}

.context-captain,.context-cirman{
	padding:40px 0 0 9px;
	background: ;
}

.user{
	margin-left:19px;
	display:none;
}

.talkbox-title-left-user-i {
	width: 0;
	height: 0;
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 10px solid #147DCD;
	position: relative;
	top: 16px;
	left: 2px;
}

.talkbox-title-left-2-user-i {
	width: 0;
	height: 0;
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 10px solid rgb(30, 149, 229);
	position: relative;
	top: -4px;
	left: 1px;
}

.talkbox-user{
	background: rgb(30, 149, 229);
	border: 1px solid #147DCD;
	position:relative; 
	left:63px;
	color:#ffffff;	
}

.talkbox{
	left:-58px;
}
.captain,.captain-cirman{
	margin-top:25px;
}
.cface{
	position:relative;
	left:23px;
}

.context-join{
	width:720px;
	float:left;
	margin-top:32px;
}

#circle-join-btn{
	padding:2px 3px 3px;
}
h5{
	margin:0;
}
.dl-horizontal dt{
	text-align:right;
	width:60px;
	font-size: 12px;
}
.dl-horizontal dd{
	margin-left:2px;
	font-size: 11px;
}

.first-li{
	margin-left:0px;
}

input::-webkit-input-placeholder {
    color:#999;
}
input:-moz-placeholder {
    color:#999;
}

.alert-info-uppass{
	width: 198px;
	padding: 3px 10px;
	font-size: 11px;
	float: left;
	color: #3a87ad;
	background-color: #d9edf7;
	border-color: #bce8f1;
}
.btn-upcirpass{
	background: rgb(30, 149, 229);
	letter-spacing: 2px;
	color: rgba(0, 59, 126, .8);
	box-shadow: 0 1px 0 rgba(0, 0, 0, .05),0 1px 0 rgba(255, 255, 255, .15) inset;
	border: 1px solid #147DCD;
	cursor: pointer;
	display: inline-block;
	font-size: 14px;
	font-weight: bold;
	font-family: 微软雅黑;
	line-height: 18px;
	text-shadow: 1px 1px 1px rgba(255, 255, 255, .2);
	padding: 10px 26px 10px;
	text-align: center;
	vertical-align: middle;
	border-radius: 5px;
	padding: 4px 14px 4px 15px;
	font-size: 11px;
	border-radius: 3px;
	margin-left: 21px;
}
.btn-upcirpass:HOVER {
	background: rgb(35,152,217);
	color: rgba(0, 59, 126, .8);
}
.lable-info-register:HOVER {
	cursor: pointer;
	background: rgba(38, 165, 235,.6);
}

.lable-info-register, .lable-info-password {
	margin-top:1px;
	margin-left:8px;
	float: right;
	background: rgb(38, 165, 235);
}
tr{
	font-size:12px;font-family:微软雅黑;
	font-weight: normal;
	color:#999;
}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$("li:eq(4)").css('marginLeft','0');
		
		$('.thumbnail').click(function(){
			$('.fileSelect').click();
		});
		
		$('.fileSelect').change(function(){
			$('.submit').click();
		});
		
		//点击创建圈子之后 将现有context界面隐藏 然后吸纳实处captain对话框
		$('.create-circle').click(function(){
			$('#appendedInputButton').attr('placeholder','输入你要创建的圈子名称');
			$('.hidden-input').attr('value','hidden-circle');
			
			$('.context-all').fadeOut(0);
			$('.context-captain').fadeIn(200);
		});
		
		//当用户在创建圈子界面 输入圈子姓名时 获取隐藏input的value值 为hidden-circle
		
		//点击加入圈子按钮
		$('.join-circle').click(function(){
			$('#appendedInputButton').attr('placeholder','输入圈子名称或圈子号可以查找你要加入的圈子');
			$('.hidden-input').attr('value','joinCircleInput');
			$('.context-all').fadeOut(0);
			$('.context-join').fadeIn(150);
		});
		
		//计数器 当计数器大于零时说明为第二次输入值并且点击
		var count = 0;
		//点击用户头像发送输入框数据
		$("#button-face").click(function(){
			//获取当前输入框的值
			var appendVal = $("#appendedInputButton").val().trim();
			
			if(appendVal != ''){
				//判断隐藏input的值
				var hiddenInput = $(".hidden-input").val();
				var bfid = $(".button-face").attr("id");
				
				//创建圈子页面的点击头像按钮操作
				if(hiddenInput == 'hidden-circle' && bfid != 'boff'){
					$("#button-face").animate({opacity:'0.4'},100);
					$(".button-face").attr('id','boff');
					//获取当前用户输入框的值
					var circleName = $("#appendedInputButton").val().trim();
					
					if(count>0){
						$('#user').fadeOut(10,function(){
							$('#user').remove();
							$('.captain').fadeOut(10,function(){
								$('.captain').remove();
								//在船长对话框之前添加 用户本人对话框
								$(".context-captain").append("<div class='row user' id='user'><div class='span5 offset2'><div class='talkbox-user'>"+circleName+"</div></div><div class='span1'><div class='talkbox-title-left-user-i'></div><div class='talkbox-title-left-2-user-i'></div></div></div>");
								$(".user").fadeIn(200,function(){
									//将圈子名称异步提交至action处理程序
									$.post('__URL__/doCircle',{circlename:circleName},function(data,status){
										$(".context-captain").append("<div class='row captain' style='display:none'><div class='span2 offset1'><div class='cface'><img src='__ROOT__/hello/Uploads/4.jpg' class='img-polaroid'></div></div><div class='span1 captain-talk'><div class='talkbox-title-left'></div><div class='talkbox-title-left-2'></div></div><div class='span5'><div class='talkbox'>"+data['info']+"</div></div></div>");
										$(".captain").fadeIn(200,function(){
											$(".button-face").animate({opacity:'1'},10,function(){
												$(".button-face").attr('id','button-face');
											});
										});
									});
								});
							});
						});
					}else{
						count = count + 1;
						//移除船长对话框
						$(".captain").fadeOut(10,function(){
							$(".captain").remove();
							//在船长对话框之前添加 用户本人对话框
							$(".context-captain").append("<div class='row user' id='user'><div class='span5 offset2'><div class='talkbox-user'>"+circleName+"</div></div><div class='span1'><div class='talkbox-title-left-user-i'></div><div class='talkbox-title-left-2-user-i'></div></div></div>");
							$(".user").fadeIn(300,function(){
								//将圈子名称异步提交至action处理程序
								$.post('__URL__/doCircle',{circlename:circleName},function(data,status){
									$(".context-captain").append("<div class='row captain' style='display:none'><div class='span2 offset1'><div class='cface'><img src='__ROOT__/hello/Uploads/4.jpg' class='img-polaroid'></div></div><div class='span1 captain-talk'><div class='talkbox-title-left'></div><div class='talkbox-title-left-2'></div></div><div class='span5'><div class='talkbox'>"+data['info']+"</div></div></div>");
									$(".captain").fadeIn(200,function(){
										$(".button-face").animate({opacity:'1'},10,function(){
											$(".button-face").attr('id','button-face');
										});
									});
								});
							});
						});
					}
				}
				
				//搜索圈子页面的操作
				if(hiddenInput == 'joinCircleInput' && bfid != 'boff'){
					$("#button-face").animate({opacity:'0.4'},100);
					$(".button-face").attr('id','boff');
					
					//获取输入框的查询条件如圈子id和圈子名称  post到后台 
					$('.thumbnails-hi').fadeOut(100,function(){
						$('.thumbnails-ser').html("<input name='circleMark' type='hidden' class='repend-cl'/>");
						$('.thumbnails-ser').fadeIn(200,function(){
							$('.thumbnails-ser').html("<p style='text-align:center;'><img src='__ROOT__/hello/Public/img/ajax-loader.gif' class='loader-gif'></p>");
							$.post('__URL__/serchCircle',{circleName:appendVal},function(data,status){
								if(data == null){
									$('.thumbnails-ser').html("<p style='text-align:center; font-size:15px; font-weight:bold;'>不存在你要找的圈子..</p>");
									$(".button-face").animate({opacity:'1'},10,function(){
										$(".button-face").attr('id','button-face');
									});
								}else{
									$('.thumbnails-ser').html("<ul class='thumbnails-ser-ui' style='margin-bottom:0px;'></ul>");
									var ei = 0; 
									$.each(data,function(index,content){
										$("li").css('marginBottom','20px');
										var liStyle = '';
										if(ei==4){
											var liStyle = 'margin-left:0px';
										}
										//是否已经加入该圈子
										if(content.isJo == 1){
											var isJo = "<div style='text-align:right;font-size:13px; font-weight:bold;'>已加入</div>";
										}else{
											var isJo = "<button id='<?php echo ($vo["id"]); ?>' style='font-size:12px;' type='button' class='btn btn-info' onclick='$.doJoin("+content.id+",this)'>加入圈子</button>";
										}
										$('.thumbnails-ser-ui').append("<li class='span3 first-li' style='"+liStyle+"'><div class='thumbnail'><div class='caption'><h5 style='color:#666'>"+content.name+"</h5><dl class='dl-horizontal'><dt>圈子编号：</dt><dd>"+content.id+"</dd><dt>成员数量：</dt><dd>"+content.count+"</dd><dt>创建人：</dt><dd>"+content.createuser+"</dd><dt>创建日期：</dt><dd>"+content.time+"</dd></dl><p class='join_btn' style='text-align:right;margin:0px;'>"+isJo+"</p></div></div></li>");
										ei = ei+1;
									});
									$(".button-face").animate({opacity:'1'},10,function(){
										$(".button-face").attr('id','button-face');
									});
								}
							});
							
						});
					});
				}
				
			}
			
		});
		
		$.doCirMngOver = function circleMngMouseover(tagThis){
			$(tagThis).attr('class','icon-wrench');
		}
		$.doCirMngOut = function circleMngMouseout(tagThis){
			$(tagThis).attr('class','icon-wrench icon-white');
		}
		$.doCirMng = function circleMng(circleid,count,time,tagThis){
			$('.context-all').fadeOut(0);
			$('.context-cirman').fadeIn(200);
			$('.captain-cirman').fadeIn(200);
			$('#td-circleid').html(circleid);
			$('#td-count').html(count);
			$('#td-time').html(""+time);
			$('.label-info-cirinfoshow').css('opacity','0.6');
			$('.label-info-uppass').css('opacity','1');
			$('.register').css('display','none');
			$('.cirmman-info').css('display','block');
			$('.circleid-hidden').val(circleid);
		}
		
		//查看圈子信息
		$('.label-info-cirinfoshow').click(function(){
			$('.label-info-cirinfoshow').css('opacity','0.6');
			$('.label-info-uppass').css('opacity','1');
			$('.register').fadeOut(100,function(){
				$('.cirmman-info').fadeIn(200);
			});
		});
		
		//设置圈子密码界面
		$('.label-info-uppass').click(function(){
			$('.label-info-uppass').css('opacity','0.6');
			$('.label-info-cirinfoshow').css('opacity','1');
			$('.cirmman-info').fadeOut(100,function(){
				$('.register').fadeIn(200);
			});
		});
		
		//新密码提交
		$('.btn-upcirpass').click(function(){
			var circleid = $('.circleid-hidden').val();
			var password = $('rPassword').val();
			
			$.post('__URL__/upcirpass',{circleid:circleid,password:password},function(data){
				alert(data['info']);
			});
		});
		
		//搜索当前登录用户已加入的圈子
		$('.s-mycircle').click(function(){
			$.post('__URL__/myCircle',{},function(data){
				$('.group-center').remove();
				$.each(data,function(index,content){
					if(content.isCreater=='1'){
						$('.toolbar').append("<div class='group group-center' style='background:rgba(28,151,223,0.6); color:rgba(250,250,250,0.8);'>"+content.circlename+"<i class='icon-wrench icon-white' style='float:right; cursor:pointer; margin-top:3px;' onmouseout='$.doCirMngOut(this)' onmouseover='$.doCirMngOver(this)' onclick=\"$.doCirMng("+content.circleid+","+content.count+",'"+content.time+"',this)\"></i></div>");
					}else{
						$('.toolbar').append("<div class='group group-center'>"+content.circlename+"</div>");
					}
					
				});
			});
		});
		$('.s-mycircle').click();
		
		
		//加入根据圈子id号加入圈子
		$.doJoin = function(circleId,tagThis){
			$(tagThis).html("<img src='__ROOT__/hello/Public/img/ajax-loader.gif' class='loader-gif'>");
			$.post('__URL__/doJoinCircle',{circleId:circleId},function(data){
				//若异步返回值为1 则加入圈子成功
				if(data['info']==1){
					$(tagThis).parent().html("<div style='text-align:right;font-size:13px; font-weight:bold; padding:5px 0 5px;'>已加入</div>");
				}else{
					alert(data['info']);
				}
			});
		}
		
		//圈子管理对话框
		
		
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
						<!-- 隐藏input确认当前文本框状态 -->
						<input type="hidden"  class="hidden-input" value="normal"/>
					</div>
					<div class="sanjiao">
						<div class="talkbox-title-left-user"></div>
						<div class="talkbox-title-left-2-user"></div>
					</div>
					
					<div class="uface2 button-face" id='button-face'>
						<img src="/hello/Uploads/4.jpg" class="img-polaroid">
					</div>
				</div>
				
				<div class="content">
					<div class="context context-all">
						<?php if(is_array($friendMsgList)): $i = 0; $__LIST__ = $friendMsgList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="friend">
								<div class="f-face">
									<img src="/hello/Uploads/1.jpg" class="f-face-img">
								</div>
								<div class="f-bottom">
									<p class="muted"><?php echo ($vo["uname"]); ?>&nbsp&nbsp<?php echo ($vo["phonenumber"]); ?></p>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						<div class="friend">
								<div class="f-face">
									<img src="/hello/Uploads/1.jpg" class="f-face-img">
								</div>
								<div class="f-bottom">
									<p class="muted">王凯&nbsp&nbsp123123123</p>
								</div>
						</div>
						<div class="friend">
								<div class="f-face">
									<img src="/hello/Uploads/1.jpg" class="f-face-img">
								</div>
								<div class="f-bottom">
									<p class="muted">王凯&nbsp&nbsp123123123</p>
								</div>
						</div>
						<div class="friend">
								<div class="f-face">
									<img src="/hello/Uploads/1.jpg" class="f-face-img">
								</div>
								<div class="f-bottom">
									<p class="muted">王凯&nbsp&nbsp123123123</p>
								</div>
						</div>
						<div class="friend">
								<div class="f-face">
									<img src="/hello/Uploads/1.jpg" class="f-face-img">
								</div>
								<div class="f-bottom">
									<p class="muted">王凯&nbsp&nbsp123123123</p>
								</div>
						</div>
					</div>
					
					<!-- captain context 创建圈子页面 -->
					<div class="context-captain context-all" style="display:none">
						
						<!-- usertalkinput -->
						<!-- <div class='row user' id='user'><div class='span5 offset2'><div class='talkbox-user'>asd</div></div><div class='span1'><div class='talkbox-title-left-user-i'></div><div class='talkbox-title-left-2-user-i'></div></div></div>-->
						
							<!--  用户发言框头像
								<div class="cface">
									<img src="__ROOT__/hello/Uploads/4.jpg" class="img-polaroid">
								</div>
							-->
						
						<!-- captaintalkinput -->
						<div class="row captain"><div class="span2 offset1"><div class="cface"><img src="__ROOT__/hello/Uploads/4.jpg" class="img-polaroid"></div></div><div class="span1 captain-talk"><div class="talkbox-title-left"></div><div class="talkbox-title-left-2"></div></div><div class="span5"><div class="talkbox">告诉我你要创建的圈子名称</div></div></div>
						
						<input name="circle-value" type="hidden"/>
					</div>
					
					<!-- 加入圈子页面  根据圈子id号搜索 或者名称 或者创始人名称-->
					<div class="context-join context-all" style="display:none">
						<div class="row-fluid">
				            
				            <div class="thumbnails-hi">
					            <ul class="thumbnails">
					              <?php if(is_array($circlelist)): $i = 0; $__LIST__ = $circlelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="span3">
					                <div class="thumbnail">
					                  <div class="caption">
					                    <h5 style="color:#666"><?php echo ($vo["name"]); ?></h5>
					                     <dl class="dl-horizontal">
								            <dt>圈子编号：</dt>
								            <dd><?php echo ($vo["id"]); ?></dd>
								            <dt>成员数量：</dt>
								            <dd><?php echo ($vo["count"]); ?></dd>
								            <dt>创建人：</dt>
								            <dd><?php echo ($vo["createuser"]); ?></dd>
								            <dt>创建日期：</dt>
								            <dd><?php echo ($vo["time"]); ?></dd>
								          </dl>
					                    <p class="join_btn" style="text-align:right;margin:0px; font-size:13px; font-weight:bold">
					                    	<?php if($vo["isJo"] == 1 ): ?><div style="text-align:right;font-size:13px; font-weight:bold;">已加入</div><?php else: ?> <button id='<?php echo ($vo["id"]); ?>' style='font-size:12px;' type="button" class="btn btn-info" onclick="$.doJoin(<?php echo ($vo["id"]); ?>,this)">加入圈子</button><?php endif; ?>
					                    </p>
					                  </div>
					                </div>
					              </li><?php endforeach; endif; else: echo "" ;endif; ?>
					            </ul>
				            </div>
				            
				            <div class='thumbnails-ser' style='display:none;' >
				            		
				            </div>
				            
				          </div>
					</div>
					
					<div class="context-all context-cirman" style="display:none">
						<!-- captaintalkinput -->
						<div class="row captain-cirman" style="display:none"><div class="span2 offset1"><div class="cface"><img src="__ROOT__/hello/Uploads/4.jpg" class="img-polaroid"></div></div><div class="span1 captain-talk"><div class="talkbox-title-left"></div><div class="talkbox-title-left-2"></div></div><div class="span5"><div class="talkbox">管理你的圈子 
							<span class="label label-info lable-info-register label-info-uppass">设置密码</span>
							<span class="label label-info lable-info-register label-info-cirinfoshow">圈子信息</span>  
							
							<div class="cirmman-info" style="margin-top:28px;">
								<table class="table table-bordered table-striped">
						            <colgroup>
						              <col class="span1">
						              <col class="span7">
						            </colgroup>
						            <tbody>
						              <tr>
						                <td >
						                  	圈子编号:
						                </td>
						                <td id="td-circleid">
						                  	
						                </td>
						              </tr>
						              <tr>
						                <td >
						                	成员数量:
						                </td>
						                <td id="td-count">
						                
						                </td>
						              </tr>
						              <tr>
						                <td >
						                	创建日期:
						                </td>
						                <td id="td-time">
						                	
						                </td>
						              </tr>
						            </tbody>
						          </table>
							</div>
							
							<div class="register" style="display:none; margin-left: 35px;margin-top: 25px;">
									<div class="controls controls-row">
								      <input class="span4 rtext rPassword" type="password" placeholder="圈子密码">
								      <input type="hidden" class="circleid-hidden" value="">
								    </div>
								    <div class="controls controls-row">
								      <button type="button" class="btn btn-primary btn-upcirpass" id="registerBtn">提交</button>
								      <div class="alert alert-info alert-info-uppass">若想取消密码，提交空密码即可</div>
								    </div>
							</div>
						</div></div></div>
					</div>
					
				</div>
				<div class="toolbar">
					<div class="group group-top">
						<div class="group-word">我的组织
							<span class="finfo create-circle">创建</span>
							<span class="finfo join-circle">加入</span>
						</div>
						<button class="s-mycircle" style="display:none;"></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>