<?php
include '../config.php';

//获取前端传值
//地址
if( !empty($_GET['userId']) && $_GET['userId'] == "all") {
	getAllOrders ($conn);
}

//获取前端传值
//留言
if( !empty($_GET['name']) && $_GET['name'] == "all") {
	getAll ($conn);
}
//获取前端传值
//修改地址
if( !empty($_GET['userId']) && !empty($_GET['addUser']) && $_GET['addUser'] == "addUser") {
	//delete
	addUser($conn);
}
if( !empty($_GET['dizi']) && !empty($_GET['dizi'])) {
	changegg($conn);
};
// if( !empty($_GET['userAddress']) && !empty($_GET['getUserName'])&& !empty($_GET['userPhone']) &&  $_GET['dataid'] == "dataid") {
	// addUserAddress($conn);
// };
//逻辑编写函数

// function changegg($conn){
	// $sql2 = "UPDATE gonggao SET g_title = '{$_GET['g_title']}',g_detail = '{$_GET['g_detail']}' WHERE g_id = '{$_GET['g_old_title']}'";
	// $result = $conn->query($sql2);
	// echo json_encode(array(
		// "resultCode"=>200,
		// "message"=>"修改成功",
		// "data"=>[]
	// ),JSON_UNESCAPED_UNICODE);
// }

function changegg($conn){
	$sql2 = "UPDATE useraddress SET userAddress = '{$_GET['userAddress']}',getUserName = '{$_GET['getUserName']}',userPhone = '{$_GET['userPhone']}' WHERE id = '{$_GET['gg_title']}'";
	$result = $conn->query($sql2);
	echo json_encode(array(
		"resultCode"=>200,
		"message"=>"修改成功",
		"data"=>[]
	),JSON_UNESCAPED_UNICODE);
}

//修改地址
function addUser($conn){
	$sql = "UPDATE useraddress SET userAddress='{$_GET['userAddress']}' , getUserName='{$_GET['getUserName']}' , userPhone='{$_GET['userPhone']}' WHERE dataid='{$_GET['dataid']}'"; 
	$result = $conn->query($sql);
	echo $_GET['userAddress'];
	echo json_encode(array(
		"resultCode"=>200,
		"message"=>"修改成功",
		"data"=>[]
	),JSON_UNESCAPED_UNICODE);
}




//留言
function getAll ($conn){
	$sql = "SELECT * FROM pingjia";
	$result = $conn->query($sql);
	$array = array();
	if ($result->num_rows > 0) {
	    // 输出数据
	    while($row = $result->fetch_assoc()) {
	    	$array[] = $row;
	    }
	    echo json_encode(array(
            "resultCode"=>200,
            "message"=>"查询成功",
            "data"=>$array
        ),JSON_UNESCAPED_UNICODE);
	} else {
	    echo "0 结果";
	}
}


//地址
function getAllOrders ($conn){
	$sql = "SELECT * FROM useraddress";
	$result = $conn->query($sql);
	$array = array();
	if ($result->num_rows > 0) {
	    // 输出数据
	    while($row = $result->fetch_assoc()) {
	    	$array[] = $row;
	    }
	    echo json_encode(array(
            "resultCode"=>200,
            "message"=>"查询成功",
            "data"=>$array
        ),JSON_UNESCAPED_UNICODE);
	} else {
	    echo "0 结果";
	}
}

	
$conn->close();
?>