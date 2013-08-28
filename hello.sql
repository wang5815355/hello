-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 08 月 27 日 14:53
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `hello_db`
--

-- --------------------------------------------------------

CREATE TABLE  `hello_db`.`hello_group` (
`id` INT( 20 ) NOT NULL COMMENT  '圈子id',
`name` INT NOT NULL COMMENT  '圈子名称',
`count` INT NOT NULL COMMENT  '圈子总人数',
`type` INT NOT NULL COMMENT  '圈子类型',
`createuser` INT NOT NULL COMMENT  '圈子创建人',
`type2` INT NOT NULL COMMENT  '圈子类型',
`location` INT NOT NULL COMMENT  '圈子所在地（例如公司或者学校类型的圈子）',
`fcircle` INT NOT NULL COMMENT  '圈子所属（父圈子）',
`time` INT NOT NULL COMMENT  '创建时间'
) ENGINE = MYISAM CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT =  '圈子表';

--
-- 表的结构 `hello_friend`
--

CREATE TABLE IF NOT EXISTS `hello_friend` (
  `id` int(15) NOT NULL COMMENT '主键id',
  `uemail` varchar(40) NOT NULL COMMENT '用户email账号',
  `femail` varchar(40) NOT NULL COMMENT '好友email账号',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='好友关系表';

--
-- 转存表中的数据 `hello_friend`
--


-- --------------------------------------------------------

--
-- 表的结构 `hello_user`
--

CREATE TABLE IF NOT EXISTS `hello_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `uname` varchar(20) NOT NULL COMMENT '姓名',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `password` varchar(30) NOT NULL COMMENT '密码',
  `phonenumber` varchar(20) NOT NULL COMMENT '手机号',
  `faceimage` varchar(40) DEFAULT NULL COMMENT '头像图片名',
  `auth` char(1) NOT NULL DEFAULT '0' COMMENT '账号认证状态（3,未认证且非首次登陆0,未认证首次登陆1,已邮箱认证，且首次登陆。2,已认证且非首次登陆）',
  `regtime` datetime NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户注册表' AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `hello_user`
--

INSERT INTO `hello_user` (`uid`, `uname`, `email`, `password`, `phonenumber`, `faceimage`, `auth`, `regtime`) VALUES
(18, '王凯', '393867916@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781327', 'thumb_521b5c1b4332d.jpg', '3', '0000-00-00 00:00:00'),
(10, '王凯', '393817926@qq.com', 'wang5815355', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(9, '王凯', '393867926@qq.com', 'wang5815355', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(8, '王凯', '393867011@qq.com', 'wang5815355', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(11, '王凯', '293817926@qq.com', 'wang5815355', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(12, '王凯', '56848@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15826547896', NULL, '0', '0000-00-00 00:00:00'),
(13, '王凯', '568428@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15826547896', NULL, '0', '0000-00-00 00:00:00'),
(19, '王凯', '3938679161@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(20, '王凯', '3938679162@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(21, '王凯', '3938679182@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(22, '王凯', '393679182@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(23, '王凯', '3938679166@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(24, '王凯', '93867916@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(25, '王凯', '3938679136@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(26, '王凯', '3938679126@qq.com', '5df4319a5779e372698042399bc724', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(27, '王凯', '3932867916@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(28, '王凯', '3938267916@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820796541', NULL, '0', '0000-00-00 00:00:00'),
(29, '王凯', '3938627916@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781358', NULL, '0', '0000-00-00 00:00:00'),
(30, '王凯', '39328267916@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(31, '王凯', '329328267916@qq.com', '832acda925f6562753ecfe3c07fe7c', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(32, '王凯', '123456916@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(33, '王凯', '16@qq.com', '48015de93123d0e87c545b0c58c428', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(34, '王凯', '111393867916@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(35, '王凯', '222393867916@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(36, '王凯', '555393867916@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781327', NULL, '', '0000-00-00 00:00:00'),
(37, '王凯', '555391233867916@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '1', '0000-00-00 00:00:00'),
(38, '王凯', '3938679886@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(39, '王凯', '39386755886@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(40, '王凯', '393864447916@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(41, '王凯', '393822264447916@qq.com', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(42, '王凯', '3938222642447916@qq.com', '040bd08a4290267535cd247b8ba2ec', '15820781327', NULL, '0', '0000-00-00 00:00:00');
