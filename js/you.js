function validate_username(email){
  		//定义正则表达式的变量:邮箱正则
  		var emailReg=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
  		//console.log(email);
  		if(email!="" && email.search(emailReg) != -1)
  		{
  			document.getElementById("test_user").innerHTML = "<font color='green' size='3px'>√邮箱格式正确</font>";
  		}else{
  			document.getElementById("test_user").innerHTML = "<font color='red'  top:20px size='3px'>邮箱格式错误</font>";
  		}
  	}
  	function validate_form(){
  		var email = document.getElementById("email").value;
  	
  		var emailReg=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
  	
  		
  		if(email != "" && emailReg.test(email)){
  					alert("信息填写正确，可以正常提交！");
  					console.log("信息填写正确，可以正常提交！");
					
  					return true;
  				
  		}else{
  			alert("注册的账号不符合要求，提交失败，请重新填写！");
  			console.log("注册的账号不符合要求，提交失败，请重新填写！");
  			return false;
  		}
  	}