<?php
class GlobalAction extends Action {
	/**
	 * 包含邮件发送类
	 * @author wangkai2013820
	 */
	public function gloIncludes(){
		require_once ('/PHPMailer/class.phpmailer.php');//包含邮件发送类
	}
}
?>