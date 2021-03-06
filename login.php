<?php
error_reporting(0);error_reporting(0);

// 设定字符集
header('Content-Type:text/html;charset=utf-8');
require 'init.php';


$error = array();    // 保存错误信息
	
	//验证码部分结束	
	// 判断表单中各字段是否都已填写
	$check_fields = array('uno', 'password','checkcode');
	foreach ($check_fields as $v) {
	    if (empty($_POST[$v])) {
	        $error[] = '错误：' . $v . '字段不能为空！';
	    }
	}	
    // 接收用户登录表单
    $uno = isset($_POST['uno']) ? trim($_POST['uno']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // 表单验证通过，再到数据库中验证
    if (empty($error)) {

        // SQL转义
        $uno = db_escape($uno);

        // 根据用户名取出用户信息
        $sql = "select `Uid`,`Uno`,`password`,`salt` from `users` where `uno`='$uno'";
						
        if ($rst = mysqli_query(db_init(), $sql)) {  // 执行SQL，获得结果集
            $row = mysqli_fetch_assoc($rst);     // 处理结果集
			
            // 数据库密码加密
            $password_db = md5($row['salt'] . md5($password));

            if ($password_db == $row['password']&&$checkFlag) {  // 判断密码与验证码是否正确                

                // 登录成功，保存用户会话
                session_start();
                $_SESSION['usersinfo'] = array(
                    'Uno' => $row['Uno'],      // 将用户名字保存到SESSION
                    'Uid' => $row['Uid']
                    
                );
			
				
                // 登录成功，跳转到会员中心
                header('Location: index.php');

                // 终止脚本继续执行
                exit;
            }
        }
        $error[] = '用户名不存在或密码错误。';
    }
}

require 'login_html.php';

?>