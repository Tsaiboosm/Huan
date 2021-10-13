<?php
	// 判断是否存在session 意味着已登录就存在,否则不跳转到登录页面
	session_start();
	if($_SESSION['user_id'] && $_SESSION['username']){
		define('DSN','mysql:host=127.0.0.1;dbname=shan;charset=utf8');
		define('USER','root');
		define('PWD','');
		try{
			$pdo = new PDO(DSN,USER,PWD);
		}catch(PDOException $e){
			echo "数据库连接失败! ".$e->getMessage();
			die;
		}	
		}else{
		header('location:login.php');
	}
	
?>
