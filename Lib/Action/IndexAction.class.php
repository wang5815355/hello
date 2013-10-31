<?php
class IndexAction extends GlobalAction {
    
	/**
	 * 首页显示方法
	 * @author wangkai
	 */
	public function index(){
    	//如果cookie中存在邮件账号则直接显示首页
    	if(cookie('username')!=null){
    		//查询当前用户的账号验证状态
    		$userModel = M('user');//用户表
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
    			
	    		//查询前面8条圈子记录
    			$circleModle = M('group');//圈子表
    			$grModel = M('grouprelationship');//圈子关系表
    			//获取当前用户登录email账号 
    			$uEmail = $this->getUserName();
	    		$circleList = $circleModle->order('id desc')->limit(7)->select();
	    		//查询当前圈子是否已经加入
	    		foreach($circleList as $k=>$v){
	    			$circleId = $circleList[$k]['id'];
	    			$mapGr['circleid'] = $circleId;
	    			$mapGr['uemail'] = $uEmail;
	    			$resultGr = $grModel->where($mapGr)->find();
		    		
		    		if($circleList[$k]['password'] != null){//将存在密码的圈子密码隐藏为000
	    				$circleList[$k]['password'] = '000';
	    			}
	    			
	    			if($resultGr != null){
	    				$circleList[$k]['isJo'] = 1;//是否已加入圈子标记 1代表已加入 0代表未加入
	    			}else{
	    				$circleList[$k]['isJo'] = 0;//是否已加入圈子标记0
	    			}
	    		}
	    		$this->assign('circlelist',$circleList); // 输出模板
    		}
    		$this->display();
    	}else{//如果cookie中不存在用户账号则跳转到登录页面上
    		redirect('../Public/login');
    		$this->display();
    	}
    }
    
    /**
     * 用户提交加好友申请
     * @author wangkai
     */
    public function applyFriend(){
    	$uemail1 = $this->getUserName();//登录用户email
    	$uemail2 = $_POST['uemail2'];//被申请好友
    	$circleId = $_POST['circleId']; //提交申请的圈子id
    	$matchCircleid = '/^[0-9]{1,50}$/';//ID号只能为1至50位纯数字
    	//圈子id正则表达式
    	
    	//获取当前登录用户姓名
    	$uInfo = $this->getUinfo();
    	$uname = $uInfo['uname'];
    	
    	if(preg_match($matchCircleid,$circleid) && $uname != null){//圈子id格式正确 且申请好友信息正确
    		//查询当前登录用户是否和被申请用户在同一个圈子
    		$grModel = M('grouprelathionship');
    		$mapGr['uemail'] = array('in',$uemail1+','+$uemail2);
    		$mapGr['circleid'] = $circleId;
    		$resultIsCount = $grModel->count()->where($mapGr)->find();
    		
    		if($resultIsCount == 2){//当存在两条记录说明申请人和被申请人在同一个圈子当中
    			
    			//查询是否存在相同的申请人和被申请人记录 若存在且申请处理情况且status为2（申请未通过） 时不必添加新纪录 直接将status改为0（未处理）
    			$faModel = M('friendrelationship');
    			$mapFa['uemail1'] = $uemail2;//被申请好友email
    			$resultIsFa = $faModel->where($mapFa)->find();
    			
    			if($resultIsFa != null && $resultIsFa['status'] == '2'){
    				$dataFa['status'] = '0';
    				$faModel->where($mapFa)->save($dataFa);
    			}else{//如果不存在则直接添加新纪录
    				$dataF['uemail1'] = $uemail2;
    				$dataF['uemail2'] = $uemail1;
    				$dataF['uname2'] = $uname;
    				$dataF['info'] = '';
    				$dataF['status'] = '0';
    				$dataF['circleid'] = $circleId;
    				$dataF['time'] = time();
    				$faModel->add($dataFa); 
    			}
    		}
    	}
    	
    }
    
	/**
	 * 查询当前用户点击自己所加入或者创建的圈子的所有成员
	 * @author wangkai
	 */
    public function serchCirclePersion(){
    	//根据用户email账号查询用户是否加入该圈子 若加入才可以查询
    	$uemail = $this->getUserName();
    	$circleid = $_POST['circleId'];//获取需要查询的圈子id号
    	$matchCircleid = '/^[0-9]{1,50}$/';//ID号只能为1至50位纯数字
		    	
    	if(preg_match($matchCircleid,$circleid)){//圈子id格式正确
    		$grModel = M('grouprelationship');
    		$map['uemail'] = $uemail;
    		$map['circleid'] = $circleid;
    		
    		$grResult = $grModel->where($map)->find();//验证所查询圈子是否为自己已加入的圈子
    		if($grResult != null){
    			//查询该圈子的成员
    			$mapCirid['circleid'] = $circleid;
   				$list = $grModel->limit(11)->where($mapCirid)->select();
   				
   				//查询该用户是否为你的好友
   				foreach($list as $k=>$v){
   					$mapAf['uemail1'] = $uemail;//当前登录用户
   					$mapAf['uemail2'] = $list[$k]['uemail'];//其他用户
   					$appInfoModel = M('friendapply');
   					$isFriend = $appInfoModel->where($mapAf)->getField('status');
   					if($isFriend == null){//1代表已成为好友
   						$list[$k]['appstatus'] = '-1';//还未提交好友申请
   					}
   				}
   				
    		}
    		
    	}
    	$dataInfo['data'] = $list;
    	$this->ajaxReturn($dataInfo,'JSON');
    }     
    
    /**
     * 查询圈子密码 
     * @author wangkai
     */
    public function upCirpass(){
    	$password = trim($_POST['cirpassword']);//用户设置的圈子密码
    	$circlrid =	trim($_POST['circleid']);
    	$matchPassword = '/^[A-Za-z0-9]{6,20}$/';//密码验证， 6至20位数字字母下划线正则表达式
    	$matchCircleid = '/^[0-9]{1,50}$/';//ID号只能为1至50位纯数字
    	$gModel = M('group');
    	$competence = false;
    	
    	if(preg_match($matchCircleid,$circlrid) && preg_match($matchPassword,$password)){
    		//检测当前圈子id是否当前登录用户创建的圈子 若是才可以修改密码
    		$map['id'] = $circlrid;
    		$map['createuser'] = $this->getUserName(); 
    		
    		if($password == '' || $password == null){
    			$password = null;
    		}
    		$data['password'] = $password;
    		$gModelUpRe = $gModel->where($map)->save($data);
    		
    		if($gModelUpRe != false){
    			if($password == null){
    				$dataInfo['info'] = '密码取消成功，他人不再需要密码加入';
    			}
    			$dataInfo['info'] = '密码设置成功，他人需要密码才可加入'; 
    		}else{
    			$dataInfo['info'] = "修改失败（新密码与原密码值不能相同）";
    		}
    	}else{
    		$dataInfo['info'] = '密码只能由6至20位数字字母下划线组成'.$password.$circlrid;
    	}
    	
    	$this->ajaxReturn($dataInfo,'JSON');
    }
        
    /**
     * 查询当前登录账号创建以及加入的圈子
     * @author wangkai
     */
    public function myCircle(){
    	//查询我已加入的圈子 
    	$grModel = M('grouprelationship');
    	$groupModel = M('group');
    	$userName = $this->getUserName();
    	$map['uemail'] = $userName;
    	$list = $grModel->order('isCreater desc ,id asc')->where($map)->select();
    	
    	//跟据圈子id查找圈子名称
    	if($list != null){
    		foreach ($list as $k => $v){
    			$circleid = $list[$k]['circleid'];
    			$mapG['id'] = $circleid;
    			$circleName = $groupModel->where($mapG)->find();
    			$list[$k]['circlename'] = $circleName['name'];
    			$list[$k]['count'] = $circleName['count'];
    			$list[$k]['time'] = date("Y年m月d日  H:i:s",$circleName['time']);
    			
    		}
    	}
    	
    	$data = $list;
    	$this->ajaxReturn($data,'JSON');
    }
    
    /**
     * 加入圈子
     * @author wangkai
     */
    public function doJoinCircle(){
    	 $circleId = trim($_POST['circleId']);//要加入的圈子id
    	 $passWord = trim($_POST['passWord']);
    	 $uEmail = $this->getUserName();//获取当前登录用户邮箱 
    	 $grModel = M('grouprelationship');
    	 $circleModel = M('group');
    	 $data['circleid'] = $circleId;
    	 $data['uemail'] = $uEmail;
    	 $data['time'] = time()."";
    	 
    	 //检测是否已加入该圈子 
    	 $map['circleid'] = $circleId;
    	 $map['uemail'] = $uEmail;
    	 $resultIsJo = $grModel->where($map)->find();
    	 
    	 //检测已加入多少个别人创建的圈子
    	 $resultJoCount = $grModel->where("uemail = '".$uEmail."'and isCreater is NULL")->count();//返回已加入的圈子数
    	 $resultJoCount = $resultJoCount['tp_count'];
    	 
    	 if($resultIsJo == null && $resultJoCount < 8){//未加入该圈子
    	 	//检测圈子是否需要密码才能加入
    	 	$mapPaVe['id'] = $circleId;
    	 	$resultIfPass = $circleModel->where($mapPaVe)->getField('password');
    	 	if($resultIfPass != null && $resultIfPass != ''){//如果该圈子设有密码 
    	 		
    	 		if($resultIfPass == $passWord){//用户提交密码与圈子密码相符合 则加入该圈子
    	 			$mapC['circleId'] = $circleId;
    	 			//统计当前圈子一共有多少人
    	 			$count = $grModel->where($mapC)->count();
    	 			//获取当前需要加入圈子的用户姓名
    	 			$userInfo = $this->getUinfo();
    	 			$data['uname'] = $userInfo['uname'];
    	 			$data['phonenumber'] = $userInfo['phonenumber'];
    	 			
    	 			$result = $grModel->add($data);
    	 			$dataInfo['info'] = '2';
    	 			 
    	 			if($result != false){
    	 				//创建圈子成功之后 将圈子总人数+1
    	 				$dataCir['id'] = $circleId;
    	 				$dataCir['count'] = $count+1;//统计当前 圈子人数 加1
    	 				$circleModel->save($dataCir);
    	 				$dataInfo['info'] = '1'.$resultJoCount;//创建圈子成功返回1
    	 				
    	 			}else{
    	 				$dataInfo['info'] = '-1';//创建圈子失败返回-1
    	 			}
    	 		}else{
    	 			$dataInfo['info'] = '3';//圈子密码不正确
    	 		}
    	 	}else{
    	 		$mapC['circleId'] = $circleId;
    	 		//统计当前圈子一共有多少人
    	 		$count = $grModel->where($mapC)->count();
    	 		$userInfo = $this->getUinfo();
    	 		$data['uname'] = $userInfo['uname'];
    	 		$data['phonenumber'] = $userInfo['phonenumber'];
    	 		
    	 		$result = $grModel->add($data);
    	 		$dataInfo['info'] = '2';
    	 		
    	 		if($result != false){
    	 			//创建圈子成功之后 将圈子总人数+1
    	 			$dataCir['id'] = $circleId;
    	 			$dataCir['count'] = $count+1;//统计当前 圈子人数 加1
    	 			$circleModel->save($dataCir);
    	 			$dataInfo['info'] = '1';//创建圈子成功返回1
    	 		}else{
    	 			$dataInfo['info'] = '-1';//创建圈子失败返回-1
    	 		}
    	 	}
    	 }else if($resultIsJo == null && $resultJoCount >= 8){
    	 	$dataInfo['info'] = '-200';//加入圈子数量暂时不能超过8个
    	 }else {
    	 	$dataInfo['info'] = '-100';//该圈子已加入不能重复加入 返回-100
    	 }
    	 
    	 $this->ajaxReturn($dataInfo,'JSON');  
    }
    
    /**
     * 异步查询圈子
     * @author wangkai
     */
    public function serchCircle(){
    	//根据用户提交的查询条件异步查询圈子
    	$circleModle = M('group');//圈子表
    	$circleName = trim($_POST['circleName']);//id 或者 名字
//     	$circleId = trim($_POST['circleId']);
//     	$map['id'] = $circleId;
    	
    	if($circleName != ''){//若提交条件不为空
    		//查询前面8条圈子记录
    		$map['name|id'] =  array('like',"%".$circleName."%");
    		$circleList = $circleModle->limit(7)->where($map)->select();
    		//查询当前圈子是否已经加入
    		foreach($circleList as $k=>$v){
    			$grModel = M(grouprelationship);
    			$circleId = $circleList[$k]['id'];
    			if($circleList[$k]['password'] != null){
    				$circleList[$k]['password'] = '000';
    			}
    			$mapGr['circleid'] = $circleId;
    			$uEmail = $this->getUserName();
    			$mapGr['uemail'] = $uEmail;
    			$resultGr = $grModel->where($mapGr)->find();
    			if($resultGr != null){
    				$circleList[$k]['isJo'] = 1;//是否已加入圈子标记 1代表已加入 0代表未加入
    			}else{
    				$circleList[$k]['isJo'] = 0;//是否已加入圈子标记0
    			}
    		}
    		$data = $circleList;
    		
    		$this->ajaxReturn($data,'JSON');
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
    
    /**
     * 用户创建圈子处理方法
     * @author wangkai
     */
    public function doCircle(){
    	$uEmail = $this->getUserName();//获取创建者email
    	$circleGroup = M('group'); 
    	$circleName = trim($_POST['circlename']).'';
    	$matchCircleName = '/^[a-z0-9\x80-\xff]{1,}$/'; //正则表达式 匹配数字字母下划线以及中文 1`10位
    	$len = mb_strlen($circleName,"utf-8");//验证圈子名称长度
    	
    //检测当前用户创建圈子个数 若超过八个则不能创建
    	$mapGC['createuser']  =  $uEmail;
    	$resultGC = $circleGroup->where($mapGC)->count();
    	$resultGC = $resultGC['tp_count'];
    	
    	if(preg_match($matchCircleName,$circleName) && $len<=10 && $resultGC < 8){//当数据正则验证通过插入数据库
    		$map['name'] = $circleName;
    		$resultFind = $circleGroup->where($map)->find();
    		
    		if($resultFind!=null){//查询是否有相同名称的圈子 若存在则创建失败
    			$dataInfo['info'] = '这个名称已经存在，换个名吧！';
    		}else{
    			$data['name'] = $circleName;//圈子名称
    			$data['count'] = 1;//圈子总人数 创建时默认1
    			$data['type'] = '0';//圈子类型 默认为0  (公司或者学校类型的圈子 0 即为 无类型)
    			$data['createuser'] = $uEmail; //圈子创建人 当前登录创建人（email账号）
    			$data['location'] = null;//圈子所在地（例如公司或者学校类型的圈子） 默认传null
    			$data['fcircle'] = 0;//圈子所属（父圈子）
    			$data['time'] = time();//时间
    			
    			$result = $circleGroup->add($data);
    			if($result!=false){
    				//圈子创建成功同时在圈子所属关系当中 将圈子创始人email账号加入
    				$grModel = M('grouprelationship');
    				$dataGr['circleid'] = $result;
    				$dataGr['uemail'] = $uEmail;
    				$dataGr['time'] = time();
    				$dataGr['isCreater'] = '1';
    				$grModel->add($dataGr);
    				$dataInfo['info'] = "圈子'".$circleName."'创建成功.";
    				$dataInfo['status'] = 1;//创建成功状态为1
    			}else{
    				$dataInfo['info'] = '圈子创建失败请重试';
    			}
    		}
    	}else if(preg_match($matchCircleName,$circleName) && $len<=10 && $resultGC >= 8){
    		$dataInfo['info'] = "创建失败,暂时不能创建8个以上的圈子".$resultGC;
    	}else{
    		$dataInfo['info'] = "圈子名称只能由小于10位的数字子母以及中文组成,请重新输入.";
    	}
    	
    	$this->ajaxReturn($dataInfo,'JSON');
    }
    
    
}
 
