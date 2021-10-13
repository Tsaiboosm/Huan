-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-06-25 06:50:34
-- 服务器版本： 10.4.17-MariaDB
-- PHP 版本： 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `car`
--

CREATE TABLE `car` (
  `id` varchar(100) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `jianJie` varchar(60) DEFAULT NULL,
  `img` varchar(20) DEFAULT NULL,
  `userId` varchar(66) DEFAULT NULL,
  `p_class` varchar(20) DEFAULT NULL,
  `p_color` varchar(11) DEFAULT '宝石蓝',
  `p_version` varchar(12) DEFAULT '全网通6GB+64GB',
  `p_num` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `car`
--

INSERT INTO `car` (`id`, `name`, `price`, `jianJie`, `img`, `userId`, `p_class`, `p_color`, `p_version`, `p_num`) VALUES
('c20459ca-2978-443f-b', '荣耀畅玩8A', '799', '6.09英寸珍珠全面屏 震撼大音量 ', 'cw8A.png', '60451130-1275-70e8-ab14-329a4a896fb9', '30', '宝石蓝', '全网通6GB+64GB', 1),
('f6ddb4d5-3a12-e99a-9', '荣耀8X Max', '1499', '64GB版限时优惠100 ', 'ry8x.png', 'e453768f-fbf3-8628-c469-bfff8af33151', '10', '幻影紫', '全网通6GB+128GB', 2),
('c20459ca-2978-443f-b', '荣耀畅玩8A', '799', '6.09英寸珍珠全面屏 震撼大音量 ', 'cw8A.png', 'e453768f-fbf3-8628-c469-bfff8af33151', '30', '宝石蓝', '全网通6GB+64GB', 1),
('abc081d8-060c-5d3a-6', 'HUAWEI P20 Pro', '4988', '6GB+64GB 全网通版', 'HUAWEIP20pro.png', '21a78347-12b2-abd4-5418-7e311eb748fc', '20', '宝石蓝', '全网通6GB+64GB', 7),
('5b9d8a68-0c3c-7bfa-0', '', '', '', '', '21a78347-12b2-abd4-5418-7e311eb748fc', '', '宝石蓝', '全网通6GB+64GB', 1),
('73608d3a-bc0a-704f-0', 'HUAWEI Mate ', '3999', '6GB+64GB 全网通版', 'HUAWEIMate20.png', '21a78347-12b2-abd4-5418-7e311eb748fc', '40', '宝石蓝', '全网通6GB+64GB', 1);

-- --------------------------------------------------------

--
-- 表的结构 `gonggao`
--

CREATE TABLE `gonggao` (
  `g_title` varchar(100) DEFAULT NULL,
  `g_detail` varchar(3000) DEFAULT NULL,
  `g_id` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `gonggao`
--

INSERT INTO `gonggao` (`g_title`, `g_detail`, `g_id`) VALUES
('123123', '附活动规则：\n\n【购荣耀旗舰机赢手机大奖】\n\n1、活动时间：2019年1月17日-2月15日\n\n2、参与方式：活动期间在华为商城购买荣耀旗舰系列机型（荣耀Magic2、荣耀V20、\n荣耀10、荣耀NOTE 10）任意一款， 且发表有效评价，均有机会赢荣耀手机大奖；\n有效评价要求如下：需上传真实有效的评论文字（不少于15个字），且上传1-3张图片，内容可以是您喜欢荣耀品牌产品的理由，购买或使用感受、产品性能评价等；\n\n3、奖品设置：\n一等奖（1名）：荣耀10手机 1台\n二等奖（1名）：荣耀Play手机 1台\n三等奖（1名）：荣耀9i 手机 1台\n四等奖（3名）：荣耀9青春版手机 1台\n总计6台\n\n4、奖品抽取与发放：\n', '0864aee3-f0dd-5329-3c23-12fd1rd0g'),
('购荣耀10青春版 瓜分2400W开学大礼包', '1、活动时间：2019年3月2日-3月12日\n\n2、参与方式：\n\n1）支付抽奖：\n\n成功下单并支付荣耀10青春版，根据系统提示参与抽奖，每人每天3次抽奖机会，分享可增加1次抽奖机会。（如一个订单购买多个商品也是3次抽奖机会），中奖用户取消订单，奖品不予发放，如中奖会有站内信（活动消息）提示。\n\n幸运奖（若干名）：屈臣氏等第三方兑换券 数量有限，赠完即止！\n\n2）晒单抽奖：\n\n评价需要有文字+图片，评价后根据系统提示参与抽奖，可抽奖1次。如中奖会有站内信（活动消息）提示。\n\n温馨提示：支付抽奖活动每人每天最多可抽奖4次（当天支付多个订单不叠加抽奖次数）；支付抽奖和晒单抽奖若在系统提示后手动关闭视为自动放弃抽奖资格，后续无法补抽。\n\n奖品设置：\n\n一等奖（1名）：荣耀10青春版 手机一台\n\n二等奖（5名）：晨光定制礼盒 一个\n\n三等奖（20名）：晨光开学礼包*一份', '1864aee3-f0dd-hjf9-3c23-12fdb1d05'),
('荣耀畅玩8A 购机赠豪华礼包', '1、活动时间：2019年3月1日11:30-3月31日\n\n2、参与方式： 活动期间购荣耀畅玩8A，下单即赠价值268元澳洲红酒兑换码+畅读书城价值50元书券，付款15-20分钟后，PC端请在消息中心-站内信中查看，手机端请在消息中心—活动消息中查看， 如因系统原因导致未收到兑换码，可联系商城客服补发。数量有限，赠完即止！ \n酒仙网兑换码使用规则：\n\n产品名称：澳大利亚丁戈树红标经典红葡萄酒750ml\n\n产品介绍：\n澳大利亚丁戈树红标经典红葡萄酒，一款适合中国人口感的葡萄酒。由成立于1853年的誉嘉集团酿造，东南澳产区多样的气候成就了独特的风格，明亮的深红色酒体，黑莓、黑李子以及新鲜的红色浆果香气，扑鼻而来，单宁成熟细腻，酒体平衡，回味中长。\n\n产品零售价：268元/瓶\n\n1、下载注册酒仙网APP--我的酒仙--商品兑换--去兑换--输入兑换码--兑换；\n\n2、兑换后葡萄酒自动加入购物车，在购物车提交订单填写收货信息，支付19元运费结算，省运费小妙招—再买包邮区任意酒水，立省邮费；\n\n3、每个ID限使用一次，同一收货地址、收货手机号、收货人姓名，默认为同一客户； \n\n4、兑换码有效期至2019年5月31日；\n\n5、因黑龙江、辽宁、吉林、内蒙古、新疆、西藏、甘肃、宁夏温度降低，部分地区葡萄酒暂停发货，如您在使用中，有问题咨询酒仙网客服400-617-9999。\n\n畅读书城价值50元礼券兑换码：\n\n【兑换步骤】打开畅读书城APP→点击左上角头像进入→账户中心→福利兑换→输入兑换码\n\n【注意事项】\n\n1、一个设备一个账号仅能激活一次；\n\n2、兑换后的礼券有效期为7天，请尽快使用；\n\n3、“书券”等同于“礼券”，请知悉；\n\n4、本活动的最终解释权归畅读书城所有。\n\n【客服中心】客服热线：4000-323-881', '0864aee3-f0dd-5gh9-3c13-12fhb1d0b'),
('购荣耀10青春版 限量赠开学神器', '【活动一：购荣耀10青春版赢定制礼盒*】\n\n1、活动时间：2019年2月26日-3月6日\n\n2、参与方式：活动期间在华为商城购买荣耀10青春版且无退换货用户，均有机会赢晨光定制礼盒；\n\n3、奖品设置：\n晨光定制礼盒（30份）：生旦净末丑版（随机赠），请以收到实物为准！\n\n4、奖品抽取与发放：\n在符合活动要求的用户中由系统随机抽取中奖用户，实物中奖名单将在活动结束后15-20个工作日内于华为商城公告中公布；奖品将于中奖名单公布后15-20个工作日内按订单收货地址寄出。', '0864bee3-f0dd-3229-3c23-12fdb1d0b'),
('123123', '附活动规则：\n\n【购荣耀旗舰机赢手机大奖】\n\n1、活动时间：2019年1月17日-2月15日\n\n2、参与方式：活动期间在华为商城购买荣耀旗舰系列机型（荣耀Magic2、荣耀V20、\n荣耀10、荣耀NOTE 10）任意一款， 且发表有效评价，均有机会赢荣耀手机大奖；\n有效评价要求如下：需上传真实有效的评论文字（不少于15个字），且上传1-3张图片，内容可以是您喜欢荣耀品牌产品的理由，购买或使用感受、产品性能评价等；\n\n3、奖品设置：\n一等奖（1名）：荣耀10手机 1台\n二等奖（1名）：荣耀Play手机 1台\n三等奖（1名）：荣耀9i 手机 1台\n四等奖（3名）：荣耀9青春版手机 1台\n总计6台\n\n4、奖品抽取与发放：\n', 'a69406ff-b91e-0ae4-4335-7da8c10da');

-- --------------------------------------------------------

--
-- 表的结构 `jifen`
--

CREATE TABLE `jifen` (
  `userId` varchar(50) DEFAULT NULL,
  `num` varchar(40) DEFAULT NULL,
  `aaww` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `jifen`
--

INSERT INTO `jifen` (`userId`, `num`, `aaww`) VALUES
('123123', NULL, '312');

-- --------------------------------------------------------

--
-- 表的结构 `lishi`
--

CREATE TABLE `lishi` (
  `id` varchar(100) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `jianJie` varchar(60) DEFAULT NULL,
  `img` varchar(20) DEFAULT NULL,
  `userId` varchar(66) DEFAULT NULL,
  `p_class` varchar(20) DEFAULT NULL,
  `p_color` varchar(11) DEFAULT '宝石蓝',
  `p_version` varchar(12) DEFAULT '全网通6GB+64GB',
  `p_num` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `lishi`
--

INSERT INTO `lishi` (`id`, `name`, `price`, `jianJie`, `img`, `userId`, `p_class`, `p_color`, `p_version`, `p_num`) VALUES
('5b9d8a68-0c3c-7bfa-0', '华为p20加强版', '2500', '赠保护壳  ', 'HUAWEInova3.png', 'ef8afe49-05a4-c081-5db2-e411abba614b', '50', '宝石蓝', '全网通6GB+64GB', 1);

-- --------------------------------------------------------

--
-- 表的结构 `my_order`
--

CREATE TABLE `my_order` (
  `id` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `p_name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `jianJie` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `img` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `userId` varchar(50) DEFAULT NULL,
  `my_address` varchar(50) DEFAULT NULL,
  `p_class` varchar(20) DEFAULT NULL,
  `user_name` varchar(11) DEFAULT NULL,
  `user_mobile` varchar(11) DEFAULT NULL,
  `p_color` varchar(11) DEFAULT '宝石蓝',
  `p_version` varchar(20) DEFAULT '全网通6GB+64GB',
  `orderDate` varchar(20) DEFAULT NULL,
  `orderCode` varchar(20) DEFAULT NULL,
  `shifu` varchar(11) DEFAULT NULL,
  `userName` varchar(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `my_order`
--

INSERT INTO `my_order` (`id`, `p_name`, `price`, `jianJie`, `img`, `userId`, `my_address`, `p_class`, `user_name`, `user_mobile`, `p_color`, `p_version`, `orderDate`, `orderCode`, `shifu`, `userName`, `status`) VALUES
('c20459ca-2978-443f-b', '荣耀畅玩8A', '799', '6.09英寸珍珠全面屏 震撼大音量 ', 'cw8A.png', '60451130-1275-70e8-ab14-329a4a896fb9', '湖北武汉纺织大学外经贸学院', '30', '123123', '123123', '宝石蓝', '全网通6GB+64GB', '2021-5-24 8:50', '1621817431000', '799', 'qweq124', 0),
('ee545523-94df-7443-d', '12', '5000', '无', '2080.jpg', 'e453768f-fbf3-8628-c469-bfff8af33151', '武汉纺织大学外经贸学院', '10', '12313', '123123', '宝石蓝', '全网通6GB+64GB', '2021-6-7 10:41', '1623033711000', '5000', 'caijia123', 0),
('f6ddb4d5-3a12-e99a-9', '荣耀8X Max', '1499', '64GB版限时优惠100 ', 'ry8x.png', 'ef8afe49-05a4-c081-5db2-e411abba614b', '11123', '10', '123123', '15505588559', '宝石蓝', '全网通6GB+64GB', '2021-6-12 16:11', '1623485513000', '1499', '123123', 0),
('abc081d8-060c-5d3a-6', 'HUAWEI P20 Pro', '4988', '6GB+64GB 全网通版', 'HUAWEIP20pro.png', 'ef8afe49-05a4-c081-5db2-e411abba614b', '11123', '20', '123123', '15505588559', '宝石蓝', '全网通6GB+64GB', '2021-6-12 16:27', '1623486435000', '4988', '123123', 0),
('4fb439ab-bb4e-d818-d', 'HUAWEI nova 3', '2799', '6GB+64GB 全网通版', 'nova3.png', '21a78347-12b2-abd4-5418-7e311eb748fc', '武汉纺织大学外经贸学院', '50', '123123', '123123', '宝石蓝', '全网通6GB+64GB', '2021-6-12 16:28', '1623486534000', '2799', '123123123', 0),
('025d13bf-5323-80b2-5', '荣耀V20', '2999', '购机享多重权益，稀缺现货，欲购从速 麒麟98', 'ryv20.png', 'ef8afe49-05a4-c081-5db2-e411abba614b', '111112', '10', '1231231', '15505588559', '宝石蓝', '全网通6GB+64GB', '2021-6-12 17:50', '1623491423000', '2999', '123123', 0),
('5b9d8a68-0c3c-7bfa-0', '华为p20加强版', '2500', '赠保护壳  ', 'HUAWEInova3.png', 'ef8afe49-05a4-c081-5db2-e411abba614b', '111112', '50', '1231231123', '15505588559', '宝石蓝', '全网通6GB+64GB', '2021-6-12 17:50', '1623491456000', '2500', '123123', 0),
('f6ddb4d5-3a12-e99a-9', '荣耀8X Max', '1499', '64GB版限时优惠100 ', 'ry8x.png', '6b058d79-f19b-1af2-3677-01400d4c08bb', '武汉纺织大学外经贸学院', '10', '蔡家胜', '123123', '宝石蓝', '全网通6GB+64GB', '2021-6-12 18:0', '1623492014000', '1499', 'qweqwe', 0);

-- --------------------------------------------------------

--
-- 表的结构 `pingjia`
--

CREATE TABLE `pingjia` (
  `userName` varchar(20) DEFAULT NULL,
  `productId` varchar(22) DEFAULT NULL,
  `pingJiaDate` varchar(50) DEFAULT NULL,
  `pingJiaText` varchar(300) DEFAULT NULL,
  `p_id` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `pingjia`
--

INSERT INTO `pingjia` (`userName`, `productId`, `pingJiaDate`, `pingJiaText`, `p_id`) VALUES
('hcw123', '4fb439ab-bb4e-d818-d', 'Tue Apr 23 2019 09:23:42 GMT+0800 (中国标准时间)', 'haha', '192d2493-07e3-2ba8-hna1-b9750d9adf'),
('hcw123', '4fb439ab-bb4e-d818-d', 'Tue Apr 23 2019 09:24:06 GMT+0800 (中国标准时间)', '你好啊', '192d2493-07e3-dca8-05a1-b9750d9adf'),
('hcw123', '247563e3-ab6e-fe51-a', 'Tue Apr 23 2019 11:06:11 GMT+0800 (中国标准时间)', 'hah', '192dhn93-07e3-2ba8-05a1-b9750d9adf'),
('qqqqqq', '247563e3-ab6e-fe51-a', 'Tue Apr 23 2019 11:08:26 GMT+0800 (中国标准时间)', 'qq', '192d2493-07e3-2ba8-05a1-b9750d9ahf'),
('hcw123', 'abc081d8-060c-5d3a-6', 'Thu May 02 2019 21:04:38 GMT+0800 (中国标准时间)', '嗨', '192d2493-07e3-2ba8-05a1-b9750d9adf'),
('aaaaaa', 'c20459ca-2978-443f-b', 'Sun May 26 2019 21:18:18 GMT+0800 (中国标准时间)', 'hao', '559f7cc8-04f8-b4a7-5f01-6c4f5b916c'),
('123123', '73608d3a-bc0a-704f-0', 'Wed May 05 2021 22:39:46 GMT+0800 (中国标准时间)', '挺好的', '6a587a7e-ebfe-30a0-1477-d90974d7b0'),
('123123', '73608d3a-bc0a-704f-0', 'Wed May 05 2021 22:40:05 GMT+0800 (中国标准时间)', '你好啊', 'a1747172-8f2c-9fe8-5486-8c21fc3b52');

-- --------------------------------------------------------

--
-- 表的结构 `productlist`
--

CREATE TABLE `productlist` (
  `id` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` int(12) DEFAULT NULL,
  `jianJie` varchar(50) DEFAULT NULL,
  `img` varchar(33) CHARACTER SET latin1 DEFAULT NULL,
  `p_class` varchar(20) DEFAULT NULL,
  `sales` varchar(500) DEFAULT '0',
  `p_gn` varchar(1000) DEFAULT NULL,
  `kucun` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `productlist`
--

INSERT INTO `productlist` (`id`, `name`, `price`, `jianJie`, `img`, `p_class`, `sales`, `p_gn`, `kucun`) VALUES
('247563e3-ab6e-fe51-a', '荣耀199', 2151, '限时优惠600', 'rexiaodanping.png', '10', '24', '<img src=\"static/gnImage/201807201627089172057.jpg\" alt=\"\"><img src=\"static/gnImage/201807161541384931006.jpg\" alt=\"\">', 0),
('5b9d8a68-0c3c-7bfa-0', '华为p20加强版', 2500, '赠保护壳  ', 'HUAWEInova3.png', '50', '12', '<img src=\"static/gnImage/201810240950266957164.jpg\" alt=\"\"><img src=\"static/gnImage/20181018193448544595.jpg\" alt=\"\">', 5407),
('f6ddb4d5-3a12-e99a-9', '荣耀8X Max', 1499, '64GB版限时优惠100 ', 'ry8x.png', '10', '6', '<img src=\"static/gnImage/201903051903364282126.jpg\" alt=\"\"><img src=\"static/gnImage/201903051903364283176.jpg\" alt=\"\">', 42128),
('025d13bf-5323-80b2-5', '荣耀V20', 2999, '购机享多重权益，稀缺现货，欲购从速 麒麟98', 'ryv20.png', '10', '5', '<img src=\"static/gnImage/201812270946063698573.jpg\" alt=\"\"><img src=\"static/gnImage/201901020852465595292.jpg\" alt=\"\">', 5330),
('847fa95c-6119-e709-e', 'HUAWEI P20', 4988, '【华为智慧生活节】①下单减100 ②赠超值全', 'HUAWEIP20.png', '20', '3', '<img src=\"static/gnImage/201807041516058788086.jpg\" alt=\"\"><img src=\"static/gnImage/20180704151605906661.jpg\" alt=\"\">', 4321),
('c20459ca-2978-443f-b', '荣耀畅玩8A', 799, '6.09英寸珍珠全面屏 震撼大音量 ', 'cw8A.png', '30', '10', '<img src=\"static/gnImage/20190110085752619278.jpg\" alt=\"\"><img src=\"static/gnImage/20190110085752596028.jpg\" alt=\"\">', 3),
('73608d3a-bc0a-704f-0', 'HUAWEI Mate ', 3999, '6GB+64GB 全网通版', 'HUAWEIMate20.png', '40', '8', '<img src=\"static/gnImage/201810232126067793754.png\" alt=\"\"><img src=\"static/gnImage/201901031257507708644.jpg\" alt=\"\">', 5117),
('f02b6799-1e3b-2f86-f', '荣耀8X', 1399, '千元屏霸 高屏占比 2000万AI双摄 ', 'ry8x.png', '10', '0', '<img src=\"static/gnImage/201809290949024449251.png\" alt=\"\"><img src=\"static/gnImage/20190315210749603174.jpg\" alt=\"\">', 52432),
('abc081d8-060c-5d3a-6', 'HUAWEI P20 Pro', 4988, '6GB+64GB 全网通版', 'HUAWEIP20pro.png', '20', '3', '<img src=\"static/gnImage/20180704150807705980.jpg\" alt=\"\"><img src=\"static/gnImage/201807041508095731840.jpg\" alt=\"\">', 54339),
('4fb439ab-bb4e-d818-d', 'HUAWEI nova 3', 2799, '6GB+64GB 全网通版', 'nova3.png', '50', '4', '<img src=\"static/gnImage/201810181934489599178.jpg\" alt=\"\"><img src=\"static/gnImage/20181018193449075186.jpg\" alt=\"\">', 4229),
('219129f3-6419-a3bf-e', '荣耀Note10', 2699, '全网通 6GB+64GB 幻影蓝 AMOLE', 'note10.png', '10', '0', '<img src=\"static/gnImage/201812101528044939784.jpg\" alt=\"\"><img src=\"static/gnImage/201812101528042818205.jpg\" alt=\"\">', 234432),
('ee545523-94df-7443-d', '12', 5000, '无', '2080.jpg', '10', '1', '无', 4);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userId` varchar(333) NOT NULL,
  `userName` varchar(12) DEFAULT NULL,
  `password` varchar(18) DEFAULT NULL,
  `jifen` varchar(22) DEFAULT '0',
  `salt` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userId`, `userName`, `password`, `jifen`, `salt`, `email`) VALUES
('ef8afe49-05a4-c081-5db2-e411abba614b', '123123', '123123', '20', '', ''),
('admin', 'admin', 'qweqwe', '0', '', ''),
('21a78347-12b2-abd4-5418-7e311eb748fc', '123123123', '123123', '0', '', '123123@qq.com'),
('59fcf5ad-2f39-6fd0-dbe8-e87555fe8fac', 'qwe123', '123123', '0', '', '12312312@qq.com'),
('c9624c13-86bc-8767-e6f4-97c7fcca0a9b', '123qwe', '123123', '0', '', '12311223@qq.com'),
('5ca4709a-9e03-c42e-2e29-785a603aeccd', 'qw12qwe', '123123', '0', '', '123223@qq.com'),
('6b058d79-f19b-1af2-3677-01400d4c08bb', 'qweqwe', '123123', '0', '', '123113@qq.com'),
('e0ddb73b-e679-3854-1af0-fe5538f71b55', 'qweqwe123', 'qweqwe', '0', '', 'me@example.com'),
('e453768f-fbf3-8628-c469-bfff8af33151', 'caijia123', 'caijia123', '0', '', '1450967412@qq.com'),
('b1e5568b-1fa2-8b9a-ecf5-27b3b2deb40b', 'x123456', 'x123456', '0', '', '123456@qq.com'),
('62be6b81-8f77-b5ec-a62f-0a1497e089a3', 'x1234567', 'x1234567', '0', '', '1234567@ww.com'),
('55b5a305-8034-6595-7774-126d2915370f', 'x12345678', 'x12345678', '0', '', '12345678@ww.con');

-- --------------------------------------------------------

--
-- 表的结构 `useraddress`
--

CREATE TABLE `useraddress` (
  `id` varchar(50) DEFAULT NULL,
  `userId` varchar(50) DEFAULT NULL,
  `userAddress` varchar(50) DEFAULT NULL,
  `userPhone` varchar(11) DEFAULT NULL,
  `getUserName` varchar(11) DEFAULT NULL,
  `dataid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `useraddress`
--

INSERT INTO `useraddress` (`id`, `userId`, `userAddress`, `userPhone`, `getUserName`, `dataid`) VALUES
('025d13bf-5323-80b2-5', '7065e571-2e16-2bfd-06c5-eff1c155130d', '2211', '15505588590', '123123', '1555226574000'),
('025d13bf-5323-80b2-6', '7065e571-2e16-2bfd-06c5-eff1c155130d', '11', '15505588557', '12', '1555251142000'),
('025d13bf-5323-80b2-7', '646f27fa-a9cd-a68a-d369-f54197cd9a67', '湖北学校', '15525588557', '蔡蔡', '1614246931000'),
('025d13bf-5323-80b2-8', 'ef8afe49-05a4-c081-5db2-e411abba614b', '111112', '15505588559', '1231231', '1620033413000'),
(NULL, '21a78347-12b2-abd4-5418-7e311eb748fc', '123123', '15505588559', '123123', '1623491298000'),
(NULL, 'ef8afe49-05a4-c081-5db2-e411abba614b', '123123', '14509674123', '123123', '1623491388000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
