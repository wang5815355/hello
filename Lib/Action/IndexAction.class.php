<?php
class IndexAction extends Action {
    
	/**
	 * 首页显示方法
	 * @author wangkai2013820
	 */
	public function index(){
    	//如果cookie中存在邮件账号则直接显示首页
    	if(cookie('username')!=null){
    		$this->display();
    	}else{//如果cookie中不存在用户账号则跳转到登录页面上
    		redirect('../Public/login');
    		$this->display();
    	}
    }
    
}