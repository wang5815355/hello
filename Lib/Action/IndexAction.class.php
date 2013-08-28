<?php
class IndexAction extends GlobalAction {
    
	/**
	 * 首页显示方法
	 * @author wangkai2013820
	 */
	public function index(){
    	//如果cookie中存在邮件账号则直接显示首页
    	if(cookie('username')!=null){
    		//查询当前用户的账号验证状态
    		$userModel = M('user');
    		$map['email'] = cookie('username');
    		$listRow = $userModel->where($map)->find();
    		$faceimage = $listRow['faceimage'];
    		$auth = $listRow['auth'];
    		
    		if($auth == '1' || $auth == '0'){ //0:邮箱未认证首次登陆 1：已邮箱认证，且首次登陆
    			//当首次登录时 才显示slide1
    			$this->assign('slide1','slide1');
    		}else{//非首次登陆
    			$friendModel = M('friend');
    			$friendList = $friendModel->where($map)->getField('femail',true);//查询用户的所有好友
    			//根据用户的好友email查询这些好友的具体信息
    			$map['email'] = array('in',$friendList);
    			$friendMsgList = $userModel->where($map)->select();
    			$this->assign('friendMsgList',$friendMsgList);
    		}
    		$this->display();
    	}else{//如果cookie中不存在用户账号则跳转到登录页面上
    		redirect('../Public/login');
    		$this->display();
    	}
    }
    
    /**
     * 上传用户头像图片
     * @author wangkai
     */
    public function doImageUp(){
    	//获取当前登录用户email账号
    	$email = $this->getUserName();
    	 
    	//获取分页类
    	import('ORG.Net.UploadFile');
    	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
    	$upload->thumb = true;
    	$upload->thumbMaxWidth = '50,220';
    	$upload->thumbMaxHeight = '50,200';
    	$upload->thumbRemoveOrigin = true;
    	 
    	if(!$upload->upload()) {// 上传错误提示错误信息
    		$infoMsg = $upload->getErrorMsg();
    	}else{// 上传成功 获取上传文件信息
    		$info =  $upload->getUploadFileInfo();
    		
    		//图片保存成功之后  将用户登录状态auth改成 非首次登陆 若原来为0则改成3 原来为 1 则改成2
    		$uInfo = $this->getUinfo();//获取当前登录用户信息
    		$auth = $uInfo['auth'];
    		if($auth == '1'){
    			$data['auth'] = '2';
    		}else if($auth == '0'){
    			$data['auth'] = '3';
    		}
    	}
    	 
    	// 保存表单数据 包括附件数据
    	$userModel = M('User'); // 实例化User对象
    	$userModel->create(); // 创建数据对象
    	$map['email'] = $email;
    	$data['faceimage'] = 'thumb_'.$info[0]['savename'];//缩略图文件名
    	$result = $userModel->where($map)->save($data); // 写入用户数据到数据库
    	 
    	if($result != false){
    		$infoMsg = '1';//数据保存成功
    		echo "<script> parent.notice("."'".$infoMsg."'".");</script>";//执行提交页面的回调函数
    	}else{
    		$infoMsg = '2';//数据保存失败
    		echo "<script> parent.notice("."'".$infoMsg."'".");</script>";
    	}
    }
    
}