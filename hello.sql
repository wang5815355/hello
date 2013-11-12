-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 11 月 12 日 10:31
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `hello_db`
--

-- --------------------------------------------------------

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

-- --------------------------------------------------------

--
-- 表的结构 `hello_group`
--

CREATE TABLE IF NOT EXISTS `hello_group` (
  `name` varchar(11) DEFAULT NULL COMMENT '圈子名称',
  `password` varchar(20) DEFAULT NULL COMMENT '圈子密码（可以为空，设置密码后只有知道密码的人才能加入这个圈子）',
  `count` int(20) DEFAULT NULL COMMENT '圈子总人数',
  `type` tinyint(2) DEFAULT NULL COMMENT '圈子类型',
  `createuser` varchar(50) DEFAULT NULL COMMENT '圈子创建人（email账号）',
  `location` int(11) DEFAULT NULL COMMENT '圈子所在地（例如公司或者学校类型的圈子）',
  `fcircle` int(11) DEFAULT NULL COMMENT '圈子所属（父圈子）',
  `time` varchar(11) DEFAULT NULL COMMENT '创建时间',
  `id` int(40) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='圈子表' AUTO_INCREMENT=62 ;

--
-- 转存表中的数据 `hello_group`
--

INSERT INTO `hello_group` (`name`, `password`, `count`, `type`, `createuser`, `location`, `fcircle`, `time`, `id`) VALUES
('111', NULL, 1, 0, '393867916@qq.com', NULL, 0, NULL, 4),
('圈子first', NULL, 4, 0, '393867916@qq.com', NULL, 0, '1381737998', 5),
('你好吧', 'wang5815355', 6, 0, '393867916@qq.com', NULL, 0, '1381806336', 6),
('你好', NULL, 13, 0, '393867916@qq.com', NULL, 0, '1381825278', 7),
('你好吗', '7107993', 7, 0, '393867916@qq.com', NULL, 0, '1381825393', 8),
('你好吗？', 'wang5815355', 6, 0, '393867916@qq.com', NULL, 0, '1381826665', 9),
('创建个圈子行不行', NULL, 7, 0, '393867916@qq.com', NULL, 0, '1383032030', 59),
('创建四个', NULL, 8, 0, '39386792@qq.com', NULL, 0, '1382687390', 58),
('创建第四个', NULL, 7, 0, '39386792@qq.com', NULL, 0, '1382686768', 57),
('创建第三个', NULL, 10, 0, '39386792@qq.com', NULL, 0, '1382686759', 56),
('创建222', NULL, 9, 0, '39386792@qq.com', NULL, 0, '1382686686', 55),
('创建一个', NULL, 7, 0, '39386792@qq.com', NULL, 0, '1382686659', 54),
('一二三四五六七八九十', NULL, 8, 0, '393867916@qq.com', NULL, 0, '1383032144', 60);

-- --------------------------------------------------------

--
-- 表的结构 `hello_grouprelationship`
--

CREATE TABLE IF NOT EXISTS `hello_grouprelationship` (
  `id` int(50) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `circleid` varchar(50) NOT NULL COMMENT '圈子id',
  `uemail` varchar(50) NOT NULL COMMENT '用户email',
  `uname` varchar(20) DEFAULT NULL COMMENT '用户姓名',
  `phonenumber` varchar(20) DEFAULT NULL COMMENT '用户手机号',
  `status` char(1) DEFAULT NULL COMMENT '圈子状态（1，为待审核状态2，加入成功，3，审核未通过）',
  `isCreater` char(1) DEFAULT NULL COMMENT '是否创始人（1,代表是创始人，空则代表不是）',
  `time` varchar(20) NOT NULL COMMENT '加入圈子时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=194 ;

--
-- 转存表中的数据 `hello_grouprelationship`
--

INSERT INTO `hello_grouprelationship` (`id`, `circleid`, `uemail`, `uname`, `phonenumber`, `status`, `isCreater`, `time`) VALUES
(180, '60', '393867916@qq.com', '王凯我', '15820781327', NULL, NULL, '1383042583'),
(181, '59', '393867916@qq.com', '王凯', '15820781327', NULL, NULL, '1383042591'),
(182, '58', '393867916@qq.com', '王凯', '15820781327', NULL, NULL, '1383042595'),
(183, '55', '393867916@qq.com', '王凯', '15820781327', NULL, NULL, '1383042597'),
(184, '56', '393867916@qq.com', '王凯', '15820781327', NULL, NULL, '1383042599'),
(187, '54', '393867916@qq.com', '王凯', '15820781327', NULL, NULL, '1383118778'),
(186, '57', '393867916@qq.com', '王凯', '15820781327', NULL, NULL, '1383043243'),
(188, '60', '3938679167@qq.com', '王凯超级', '15820781327', NULL, NULL, '1383297338'),
(189, '60', '3938679167@qq.com', '王凯超级', '15820781327', NULL, NULL, '1383297338'),
(190, '60', '3938679167@qq.com', '王凯超级', '15820781327', NULL, NULL, '1383297338'),
(191, '60', '3938679167@qq.com', '王凯超级', '15820781327', NULL, NULL, '1383297338'),
(192, '60', '3938679167@qq.com', '王凯超级', '15820781327', NULL, NULL, '1383297338'),
(193, '7', '393867916@qq.com', '王凯', '008615820781327', NULL, NULL, '1384164041');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户注册表' AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `hello_user`
--

INSERT INTO `hello_user` (`uid`, `uname`, `email`, `password`, `phonenumber`, `faceimage`, `auth`, `regtime`) VALUES
(18, '王凯', '393867916@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '008615820781327', 'thumb_521b5c1b4332d.jpg', '3', '0000-00-00 00:00:00'),
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
(42, '王凯', '3938222642447916@qq.com', '040bd08a4290267535cd247b8ba2ec', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(43, '王凯', '39386792@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781327', 'thumb_5264fa9e91a28.JPG', '3', '0000-00-00 00:00:00'),
(44, '王凯超人', '39386791666@qq', '33a173a86a3c0bd6ff8a84f32432e6', '15820781327', NULL, '0', '0000-00-00 00:00:00'),
(45, '王凯超级', '3938679167@qq.com', '00fbfeb9353ca2055ddc129b2f0a01', '15820781327', 'thumb_527371249ce87.jpg', '3', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `hello_userrelationship`
--

CREATE TABLE IF NOT EXISTS `hello_userrelationship` (
  `id` int(50) NOT NULL COMMENT '主键id',
  `uemail1` varchar(40) NOT NULL COMMENT '用户1id',
  `uname1` varchar(20) NOT NULL COMMENT '用户1姓名',
  `uphonenumber1` varchar(20) NOT NULL COMMENT '用户1电话号码',
  `faceimage1` varchar(40) DEFAULT NULL COMMENT '用户头像',
  `uemail2` varchar(40) NOT NULL COMMENT '用户2id',
  `uname2` varchar(20) NOT NULL COMMENT '用户2姓名',
  `uphonenumber2` varchar(20) NOT NULL COMMENT '用户2电话号码',
  `faceimage2` varchar(40) DEFAULT NULL COMMENT '用户头像',
  `time` varchar(20) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='好友关系表';

--
-- 转存表中的数据 `hello_userrelationship`
--

INSERT INTO `hello_userrelationship` (`id`, `uemail1`, `uname1`, `uphonenumber1`, `faceimage1`, `uemail2`, `uname2`, `uphonenumber2`, `faceimage2`, `time`) VALUES
(0, '393867916@qq.com', '王凯', '15820781327', NULL, '3938679167@qq.com', '王凯超级2', '15820781327', NULL, '1383644302'),
(1, '393867916@qq.com', '王凯', '15820781327', NULL, '3938679167@qq.com', '王凯超级2', '15820781327', NULL, '1383644302'),
(2, '393867916@qq.com', '王凯', '15820781327', NULL, '3938679167@qq.com', '王凯超级2', '15820781327', NULL, '1383644302'),
(3, '393867916@qq.com', '王凯', '15820781327', NULL, '3938679167@qq.com', '王凯超级2', '15820781327', NULL, '1383644302'),
(4, '393867916@qq.com', '王凯', '15820781327', NULL, '3938679167@qq.com', '王凯超级2', '15820781327', NULL, '1383644302'),
(5, '393867916@qq.com', '王凯', '15820781327', NULL, '3938679167@qq.com', '王凯超级2', '15820781327', NULL, '1383644302'),
(6, '393867916@qq.com', '王凯', '15820781327', NULL, '3938679167@qq.com', '你好', '15820781327', NULL, '1383644302');
