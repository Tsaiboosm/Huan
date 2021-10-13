<?php

$pageNum = 3; // 设置每页显示的数量
	$page = isset($_GET['p']) ? $_GET['p'] : $_GET['p'] = 1; // URL p 参数
	
	$stmt = $pdo->prepare("SELECT COUNT(*) FROM `staff`"); // 准备查询
	$stmt->execute(); // 执行查询
	$total = $stmt->fetchColumn(0); // 从结果集中返回单独一列
	$pages = ceil($total / $pageNum);  // ceil()函数小数点向上取整
	// print $pages;
	$offset = ($page - 1) * $pageNum; // $_GET的数量减1再乘每页总数,得出结果就是LIMIT的偏移量
	$sql = "SELECT `id`,`name`,`age`,`course`,`mobile`,`intodate`,`status`";
	$sql .= " FROM `staff` LIMIT {$offset},{$pageNum}";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$staff = $stmt->fetchAll(PDO::FETCH_ASSOC);
	// echo '<pre>';print_r($staff);die;
	
	$info = $pdo->prepare("SELECT `company`,`tel` FROM `system`");
	$info->execute();
	$res = $info->fetch(PDO::FETCH_ASSOC);
	?>