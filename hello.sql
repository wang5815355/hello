-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 11 月 05 日 09:57
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `hello_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `hello_friendapply`
--

CREATE TABLE IF NOT EXISTS `hello_friendapply` (
  `id` int(50) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `uemail1` varchar(40) NOT NULL COMMENT '被申请人email',
  `uemail2` varchar(40) NOT NULL COMMENT '申请人email',
  `uname2` varchar(20) NOT NULL COMMENT '申请人姓名',
  `info` varchar(20) DEFAULT NULL COMMENT '申请备注信息',
  `status` char(1) NOT NULL COMMENT '申请信息处理状态（0,代表未处理.1,申请通过2,申请未通过）',
  `msgreadstatus` char(1) NOT NULL DEFAULT '0' COMMENT '信息查看状态（0，代表未被查看，1，代表已被查看）',
  `circleid` varchar(50) NOT NULL COMMENT '提交申请的circleid',
  `circlename` varchar(20) DEFAULT NULL COMMENT '圈子名称',
  `time` varchar(20) NOT NULL COMMENT '申请时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `hello_friendapply`
--

INSERT INTO `hello_friendapply` (`id`, `uemail1`, `uemail2`, `uname2`, `info`, `status`, `msgreadstatus`, `circleid`, `circlename`, `time`) VALUES
(4, '393867916@qq.com', '3938679167@qq.com', '王凯', '', '1', '1', '60', '搞笑2', '1383533109'),
(5, '3938679167@qq.com', '393867916@qq.com', '王凯', '', '0', '0', '60', '搞笑', '1383617820');
