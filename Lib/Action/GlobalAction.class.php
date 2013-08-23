<?php
class GlobalAction extends Action {
	
	/**
	 * 包含邮件发送类
	 * @author wangkai2013820
	 */
	public function gloIncludes(){
		require_once ('/PHPMailer/class.phpmailer.php');//包含邮件发送类
	}
	
	/**
	 * 从cookie中获取用户登录账号
	 * @author wangkai
	 */
	public function getUserName(){
		$username = cookie('username');
		return $username;
	}
}
?>