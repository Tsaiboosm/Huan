<html lang="en">
<head>
    <meta charset="UTF-8">
	    <link rel="stylesheet" href="static/css/public.css">
	  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	  <title>华为商城简介</title>
	      <style>
       #userinfo .el-input__inner{
           width: auto;
       }
       #userinfo .address .el-input__inner{
           width: 500px;
       }
       #userinfo .el-input{
           width: auto;
       }
    </style>
</head>

<body id="login-body">
 <div id="userinfo">
    <div class="login-header">
        <div class="login-body">
            <div class="login-cont">
                <a href="index.html"><img src="static/image/head-top.png" alt=""></a>
            </div>
            <div class="login-name">
                <b style="font-size: 18px;margin-top: -5px;float: left;color:#cccccc;">|</b>
                <b style="font-size: 18px;margin-top: -3px;float: left; margin-left:18px;">个人中心</b>
            </div>
        </div>
    </div>
	<h3><a href="index.html" style="margin-left: 60px;">返回</a>&nbsp </h3>
	<div style="margin-left: 15%; margin-top: 100px;">
	<h1>忘记密码</h1>
		<form action="phpmail.php" method="post">
			<!--<input type="hidden" name="hidCode" id="hidCode" value="<?php
					if($checkCode!=null)
						echo $checkCode;
					else echo '';	?>" />
						-->
			<div class="wordAndText" >
				邮箱：
				<input type="text" name="email" id="email" value="<?php
					if(isset($email))
						echo $email;
					else echo ''; 	?>" />	
			</div>
    
		    <div class="forgot" >
		    	<input type="submit" value="发送邮件" >
		    </div>
	    
	    	<div class="wordAndText" >
				验证码：
				<input type="text" name="checkCode" id="checkCode" value="" />	
			</div>
	    	
	    	<div class="forgot">
		    	<input type="submit" value="验证" >
		    </div>
		    
	    </form>
		</div>
</div>	
</body>
</html>