<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<link rel="stylesheet" href="css/pagee.css" />
		<link rel="stylesheet" href="../static/css/public.css" />
		<link rel="stylesheet" href="../static/css/elementui.css">
		<script type="text/javascript" src="js/jquery.min.js" ></script>
		<script type="text/javascript" src="js/index.js" ></script>
		<script type="text/javascript" src="../static/js/vue.js" ></script>
		<script type="text/javascript" src="../static/js/elementui.js" ></script>
		<link rel="stylesheet" type="text/css" href="js/bootstrap-3.3.4.css"/>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<style>
			.el-input{
				width: auto;
				margin-bottom: 20px;
			}
			.el-textarea{
				vertical-align: middle;
				width: 90%;
				margin-bottom: 17px;
			}
			.upload-demo{
				margin-top: 20px;
			}
			/* gg列表 */
			.el-table .cell{
				text-overflow: ellipsis;
				height: 26px;
				white-space: nowrap;
				overflow: hidden;
			}
			.nav > li {
    position: relative;
    display: block;
    width: 200px;
}
		</style>
	</head>

	<body>
		<div id="sas_app">
			<div class="left">
				<div class="bigTitle">华为手机后台管理系统</div>
				<div class="lines">
				<div class="navbar-collapse collapse" id="leftbar">
				<div class="input-group left-dh">
                 <ul class="nav" id="mz">
				 <li class="pane panel-default">

				<a href="#sys" data-toggle="collapse" ><img src="img/icon-2.png" />产品功能<span class=""></span></a>

				<ul class="panel-collapse collapse nav" id="sys">
				

			<li @click="flag = 2" :class="{active:flag == 2}" data-toggle="tab"><img src="img/icon-2.png" />版本</a></li>
			<li @click="gatOrderlis" :class="{active:flag == 10}"data-toggle="tab" ><img src="img/icon-5.png" />产品管理</a></li>

			<li @click="gatUserData" :class="{active:flag == 3}"data-toggle="tab"><img src="img/icon-1.png" />用户管理</a></li>

			<li @click="flag = 1" :class="{active:flag == 1}" data-toggle="tab"><img src="img/addpr.png" />添加产品</a></li>

				<li @click="gatOrderData" :class="{active:flag == 6}"data-toggle="tab" ><img src="img/icon-5.png" />订单管理</a></li>
				
				

				</ul>
					</div>
					 <ul class="nav" id="mz">
				 <li class="pane panel-default">
				  <a href="#lanmu" data-toggle="collapse" data-parent="#mz" class =""><img src="img/icon-2.png" />公告系统<span class=""></span></a>

					<ul class="panel-collapse collapse nav" id="lanmu">

					<li @click="flag = 5" :class="{active:flag == 5}" data-toggle="tab"><img src="img/addpr.png" />新增公告</a></li>
					<li @click="gatggData" :class="{active:flag == 4}"><img src="img/gonggao.png" />公告管理</a></li>

					<li @click="gatSuperData" :class="{active:flag == 7}" data-toggle="tab"><img src="img/icon-1.png" />管理员管理</a></li>

				

					</ul>

					</li>
					</ul>
					 <ul class="nav" id="mz">
				 <li class="pane panel-default">
				  <a href="#lantu" data-toggle="collapse" data-parent="#mz" class =""><img src="img/icon-2.png" />用户系统<span class=""></span></a>

					<ul class="panel-collapse collapse nav" id="lantu">

					<li  @click="gatOrder" :class="{active:flag == 8}" ><img src="img/icon-4.png"  data-toggle="tab"/>收货地址管理</a></li>

					<li @click="yanlun" :class="{active:flag == 9}"><img src="img/icon-3.png" data-toggle="tab" />留言管理</a></li>

				    <!-- <li onclick="pageClick(this)"@click="flag = 5" :class="{active:flag == 5}"><img src="img/icon-5.png" data-toggle="tab"/>在售门店管理</a></li> -->

					</ul>

					</li>
					</ul>
			</div>
					<!-- <div @click="flag = 2" :class="{active:flag == 2}"><img src="img/icon-2.png" />产品管理</div> -->
					<!-- <div @click="flag = 1" :class="{active:flag == 1}"><img src="img/addpr.png" />添加产品</div> -->
					<!-- <div @click="gatUserData" :class="{active:flag == 3}"><img src="img/icon-1.png" />用户管理</div> -->
					<!-- <div @click="gatggData" :class="{active:flag == 4}"><img src="img/gonggao.png" />公告管理</div> -->
					<!-- <div @click="flag = 5" :class="{active:flag == 5}"><img src="img/addpr.png" />新增公告</div> -->
					<!-- <div @click="gatOrderData" :class="{active:flag == 6}"><img src="img/icon-5.png" />订单管理</div> -->
					<!-- <div @click="gatSuperData" :class="{active:flag == 7}"><img src="img/icon-1.png" />管理员管理</div> -->
					<!-- <div onclick="pageClick(this)"><img src="img/icon-3.png" />个人信息管理</div>
					<div onclick="pageClick(this)"><img src="img/icon-4.png" />收货地址管理</div>
					<div onclick="pageClick(this)"><img src="img/icon-5.png" />在售门店管理</div> -->
				</div>
			</div>
			<div class="top">
			
				<div v-if="flag==1" class="leftTiyle" id="flTitle">添加产品</div>
				<div v-if="flag==2" class="leftTiyle">版本</div>
			    <div v-if="flag==10" class="leftTiyle">产品管理</div>
				<div v-if="flag==3" class="leftTiyle">用户管理</div>
				<div v-if="flag==4" class="leftTiyle">公告管理</div>
				<div v-if="flag==5" class="leftTiyle">新增公告</div>
				<div v-if="flag==6" class="leftTiyle">订单管理</div>
				<div v-if="flag==7" class="leftTiyle">管理员管理</div>
				<div v-if="flag==8" class="leftTiyle">收货地址管理</div>
				<div v-if="flag==9" class="leftTiyle">留言管理</div>
				
				
				<div class="thisUser" @click="gatSuperData" style="cursor: pointer;">当前用户：超级管理员<a style="display: inline-block;cursor: pointer;margin-left: 50px;" href="index.html">退出</a></div>
			</div>
			<div v-if="flag==1" class="content">
					产品名称 :&emsp;<el-input v-model="p_name" placeholder="请输入产品名称"></el-input> &emsp;&emsp;
					产品价格 :&emsp;<el-input v-model="p_price" placeholder="请输入产品价格"></el-input><br>
					产品简介 :&emsp;<el-input type="textarea" :rows="2" placeholder="请输入简介" v-model="p_info"></el-input>
					产品功能 :&emsp;<el-input type="textarea" :rows="2" placeholder="请输入主要功能:图片格式为：《img src='static/gnImage/201812101528044939784.jpg'》" v-model="p_gn"></el-input>
					产品型号 :&emsp;<el-select v-model="p_class" placeholder="请选择">
						<el-option label="荣耀" value="10"></el-option>
						<el-option label="HUAWEI P系列" value="20"></el-option>
						<el-option label="华为畅享系列" value="30"></el-option>
						<el-option label="HUAWEI Mate系列" value="40"></el-option>
						<el-option label="HUAWEI nova系列" value="50"></el-option>
						<!-- <el-option label="华为畅享系列" value="60"></el-option> -->
					</el-select>&emsp;&emsp;
					产品库存 :&emsp;<el-input v-model="kucun" type="number" min="1" placeholder="请输入数字"></el-input>
					<el-upload
					class="upload-demo"
					action="upload.php"
					:on-success="success_upload"
					:limit="1"
					:file-list="fileList">
					<el-button size="small" type="primary">点击上传产品图片</el-button>
					<!-- <div slot="tip" class="el-upload__tip">只能上传jpg/png文件，且不超过500kb</div> -->
					</el-upload>
					<el-button type="primary" style="width: 50%;margin-top: 50px;" @click="save">保存</el-button>
			</div>
			<div v-else-if="flag==2" class="content">
					
					<?php
	$sysinfo = array(
	        '操作系统'     => PHP_OS,
            '运行环境'     => $_SERVER['SERVER_SOFTWARE'],
            'PHP运行方式'  => php_sapi_name(),
            '上传附件限制'  => ini_get('upload_max_filesize'),
            '执行时间限制'  => ini_get('max_execution_time').'秒',
            '服务器时间'   => date("Y年n月j日 H:i:s"),
            '北京时间'     => gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=> $_SERVER['SERVER_NAME'].'['.gethostbyname($_SERVER['SERVER_NAME']).']',
            '剩余空间'     => round((disk_free_space(".")/(1024*1024)),2).'M',
		);
		echo '<pre>';
		print_r($sysinfo);
?>
					
					
			</div>
			<!--用户管理-->
			<div v-if="flag==3" key="1" class="content">
					<el-table
					height="450"
					:data="jsonUserData"
					style="width: 100%">
					<el-table-column
						prop="userId"
						label="用户id"
						width="180">
					</el-table-column>
					<el-table-column
						prop="userName"
						label="账户">
					</el-table-column>
					<el-table-column
						prop="password"
						label="密码">
					</el-table-column>
					<el-table-column
					
					label="状态">
					<template slot-scope="scope">
					<a href="javascript:;">{{scope.row.status===1?'用户正常':'用户正常'}}</a>
					</template>
				</el-table-column>
					<el-table-column
						prop="email"
						label="邮箱">
					</el-table-column>
					<el-table-column
						label="操作"
						width="180">
						<template slot-scope="scope">
						<el-button type="danger" icon="el-icon-delete"@click="deletUser(scope.row.userId)"></el-button>
							
						</template>
					</el-table-column>
					</el-table>
			</div>
			<!-- 公告管理 -->
			<div v-if="flag==4" key="2" class="content">
					<el-table
					height="450"
					:data="jsonggData"
					style="width: 100%">
					<el-table-column
						prop="g_title"
						label="公告名称">
					</el-table-column>
					<el-table-column
						prop="g_detail"
						label="公告详情">
					</el-table-column>
					<el-table-column
						label="操作"
						width="180">
						<template slot-scope="scope">
						<el-button type="primary" icon="el-icon-edit"@click="changegg(scope.row)"></el-button>
							
							<el-button type="danger" icon="el-icon-delete"@click="deletgg(scope.row.g_title)"></el-button>
				
						</template>
					</el-table-column>
					</el-table>
			</div>
			<!-- 新增公告 -->
			<div v-if="flag==5" class="content">
					公告名称 :&emsp;<el-input v-model="g_title" placeholder="公告名称"></el-input> <br>
					公告简介 :&emsp;<el-input type="textarea" :rows="2" placeholder="公告详情" v-model="g_detail"></el-input>
					<el-button type="primary" style="width: 50%;margin-top: 50px;" @click="save_gg">保存</el-button>
			</div>
			<!-- 订单管理 -->
			<div v-if="flag==6" key="3" class="content">
				<el-table
				height="450"
				:data="jsonOrderData"
				style="width: 100%">
				<el-table-column
					prop="userName"
					label="用户名"
				>
				</el-table-column>
				<el-table-column
					prop="p_name"
					label="手机名称"
					width="">
				</el-table-column>
				<el-table-column
					prop="shifu"
					label="实付">
				</el-table-column>
				<el-table-column
					prop="jianJie"
					label="简介">
				</el-table-column>
				<el-table-column
					prop="p_version"
					label="版本">
				</el-table-column>
				<el-table-column
					prop="user_name"
					label="姓名">
				</el-table-column>
				<el-table-column
					prop="user_mobile"
					label="手机浩">
				</el-table-column>
				<el-table-column
					prop="orderDate"
					label="下单时间">
				</el-table-column>
				<el-table-column
					prop="orderCode"
					label="订单编号">
				</el-table-column>
				<el-table-column label="状态" align="center" prop="status">
               <template scope="scope">
           {{scope.row.status===1?'已完成订单':'未完成订单'}}
              </template>
                  </el-table-column>
				
 
				<el-table-column
					label="操作"
					width="180">
					<template slot-scope="scope">
					<el-button type="danger" icon="el-icon-delete"@click="deletOrder(scope.row.id)"></el-button>
						
					</template>
				</el-table-column>
				</el-table>
			</div>
			<div v-if="flag==10" key="3" class="content">
				<el-table
					height="450"
					:data="jsonData"
					style="width: 100%">
					<el-table-column
						label="主图"
						width="180">
						<template slot-scope="scope">
							<img :src="'upload/'+scope.row.img" alt="">
						</template>
					</el-table-column>
					<el-table-column
						prop="name"
						label="手机名称"
						width="180">
					</el-table-column>
					<el-table-column
						prop="price"
						label="价格">
					</el-table-column>
					<el-table-column
						prop="kucun"
						label="库存">
					</el-table-column>
					<el-table-column
						prop="jianJie"
						label="简介">
					</el-table-column>
					
					
					<el-table-column prop="mg_state" label="状态">
	<template slot-scope="scope">
	          <el-switch v-model="scope.row.mg_state"	//获取这个数据
                       active-color="#13ce66"
                       inactive-color="#ff4949">
					  <template slot-scope="scope">{{scope.row.status | brand}}</template>
            </el-switch>
	
	</template>
</el-table-column>
					
					<!-- <el-table-column label="商品状态" width="140" align='center'> -->
<!--                     <template slot-scope="scope">{{scope.row.status | brand}}</template> -->
<!--                     </el-table-column> -->

					  
					<el-table-column
						label="操作"
						width="180">
						
						<!--  <el-button type="text" size="small" id="onsgelf" @click="Transformation(scope.row)">{{scope.row.status == 0 ? "上架" : scope.row.status == 1 ? "下架" : "解锁"}}</el-button> -->
						
						<template slot-scope="scope">
						
							<!-- <a href="javascript:void(0)" style="color:#1989fa" @click="change_p(scope.row)">修改</a> -->
							<el-button type="primary" icon="el-icon-edit"@click="change_p(scope.row)"></el-button>
							<el-button type="danger" icon="el-icon-delete"@click="delet_p(scope.row.id)"></el-button>
							
						</template>
					</el-table-column>
					</el-table>
				
			</div>
			<!-- 管理员 -->
			<div v-if="flag==7" key="4" class="content">
				超级管理 :&emsp;<el-input v-model="jsonSuperData.userName"></el-input> &emsp;&emsp;
				管理密码 :&emsp;<el-input v-model="jsonSuperData.password"></el-input>
				<el-button type="primary" style="width: 50%;margin-top: 50px;" @click="saveSuper">保存</el-button>
			</div>
			
			<div v-if="flag==8" key="5" class="content">
			 <el-table
								:data="jsonAddressData"
					style="width: 100%">
					
					<el-table-column
						prop="userAddress"
						label="地址"
						>
                    </el-table-column>
                    <el-table-column
						prop="getUserName"
						label="收货人"
						>
                    </el-table-column>
                    <el-table-column
						prop="userPhone"
						label="手机号"
						>
						 </el-table-column>
                    <el-table-column
						prop="dataid"
						label="订单编号"
						>
					</el-table-column>
					<el-table-column
						label="操作"
                        >
						<template slot-scope="scope">
						<el-button type="primary" icon="el-icon-edit"@click="changeM(scope.row)"></el-button>
                         
							
						</template>
					</el-table-column>
					</el-table>
					
            <!-- </el-tab-pane> -->
        <!-- </el-tabs> -->
        <!-- <el-dialog title="修改默认地址" :visible.sync="dialogFormVisiblemorenaddress"> -->
        <!-- <el-form :model="form"> -->
            <!-- <el-form-item label="收货地址" :label-width="formLabelWidth"> -->
            <!-- <el-input v-model="form.userAddress" autocomplete="off"></el-input> -->
            <!-- </el-form-item> -->
            <!-- <el-form-item label="收货人" :label-width="formLabelWidth"> -->
            <!-- <el-input v-model="form.getUserName" autocomplete="off"></el-input> -->
            <!-- </el-form-item> -->
            <!-- <el-form-item label="手机号" :label-width="formLabelWidth"> -->
            <!-- <el-input v-model="form.userPhone" autocomplete="off"></el-input> -->
            <!-- </el-form-item> -->
        <!-- </el-form> -->
        <!-- <div slot="footer" class="dialog-footer"> -->
            <!-- <el-button @click="dialogFormVisiblemorenaddress = false">取 消</el-button> -->
            <!-- <el-button type="primary" @click="sureSave">确 定</el-button> -->
        <!-- </div> -->
        <!-- </el-dialog> -->
    </div>
		<div v-if="flag==9" key="6" class="content">
			 <el-table
								:data="jsonAddress"
					style="width: 100%">
					
					<el-table-column
						prop="userName"
						label="用户名"
						>
                    </el-table-column>
                    <el-table-column
						prop="pingJiaDate"
						label="时间"
						>
                    </el-table-column>
                    <el-table-column
						prop="pingJiaText"
						label="留言信息"
						>
					</el-table-column>
					
					</el-table-column>
                    <el-table-column
						prop="productld"
						label="访问监控加密"
						>
					</el-table-column>
					<el-table-column
					prop="p_id"
						label="监控id地址加密"
                        >	
					</el-table-column>
					</el-table>
					</div>	
			
			
			
			
				
				
				
			<el-dialog
				title="修改产品"
				:visible.sync="dialog_order"
				width="30%"
				>
				<el-form>
					<el-form-item label="价格" :label-width="formLabelWidth">
					  <el-input v-model="change_price" autocomplete="off"></el-input>
					</el-form-item>
					<el-form-item label="手机型号" :label-width="formLabelWidth">
					  <el-input v-model="change_name" autocomplete="off"></el-input>
					</el-form-item>
					<el-form-item label="库存" :label-width="formLabelWidth">
					  <el-input v-model="change_kuncun" autocomplete="off"></el-input>
					</el-form-item>
					<el-form-item label="简介" :label-width="formLabelWidth">
							<el-input v-model="change_jianjie" autocomplete="off"></el-input>
						  </el-form-item>
				</el-form>
				<span slot="footer" class="dialog-footer">
					<el-button @click="dialog_order = false">取 消</el-button>
					<el-button type="primary" @click="sureChangOrder">确 定</el-button>
				</span>
			</el-dialog>
			
			<el-dialog
				title="修改公告"
				:visible.sync="dialog_gg"
				width="30%"
				>
				<el-form>
					<el-form-item label="标题" >
					  <el-input v-model="g_title" autocomplete="off"></el-input>
					</el-form-item>
					<el-form-item label="内容" >
						<el-input :rows="5" type="textarea" v-model="g_detail" autocomplete="off"></el-input>
					</el-form-item>
				</el-form>
				<span slot="footer" class="dialog-footer">
					<el-button @click="dialog_gg = false">取 消</el-button>
					<el-button type="primary" @click="sureChanggg">确 定</el-button>
				</span>
			</el-dialog>
			
			<el-dialog
				title="修改地址"
				:visible.sync="dialogFormVisiblemorenaddress"
				width="30%"
				>
				<el-form>
					<el-form-item label="收货地址" :label-width="formLabelWidth">
					<el-input v-model="userAddress" autocomplete="off"></el-input>
					</el-form-item>
					<el-form-item label="收货人" :label-width="formLabelWidth">
					<el-input v-model="getUserName" autocomplete="off"></el-input>
					</el-form-item>
					<el-form-item label="手机号" :label-width="formLabelWidth">
					<el-input v-model="userPhone" autocomplete="off"></el-input>
					</el-form-item>
				</el-form>
				<span slot="footer" class="dialog-footer">
					<el-button @click="dialogFormVisiblemorenaddress = false">取 消</el-button>
					<el-button type="primary" @click="sureSave">确 定</el-button>
				</span>
			</el-dialog>
		</div>
	</body>
	<script>

	</script>
	<script type="text/javascript">
		// 注册
		Vue.component('my-component', {});
		var WEITUOSERVER = new Vue({
			el: '#sas_app',
			data: {
				dialog_gg:false,
				dialogFormVisiblemorenaddress:false,
				jsonSuperData:{},
				formLabelWidth:"120px",
				change_price:"",
				change_name:"",
				change_kuncun:"",
				change_jianjie:"",
				change_pid:"",
				userAddress:"",
				getUserName:"",
				userPhone:"",
				dataid:"",
				dialog_order:false,
				jsonData: [],
				jsonAddress:[],
				jsonUserData:[],
				jsonOrderData:[],
				jsonOrderlis:[],
				
				jsonAddressData:[],
				jsonggData:[], // 公告列表
				dialogTableVisible: false,
        		dialogFormVisible: false,
        		p_name:"",
				p_price:"",
				p_info:"",
				p_gn:"",
				p_class:"", // 型号
				kucun:"",
				fileList:[],
				flile_upload_name:"",
				flag:2,
				gg_title:"",
				g_title:"",  // 公告名称
				g_detail:"",   // 公告详情
				g_old_title:""
				
			},
			created() {
				this.gatData();
			},
			 
			methods: {
				success_upload(response, file, fileList){
					console.log(response)
					console.log(file)
					console.log(fileList)
					this.flile_upload_name = file.name;
				},
				
				// 存储主页产品
				save(){
					var that = this;
					if(that.p_name&&that.p_price&&that.flile_upload_name&&that.p_info&&that.p_gn&&that.p_class&&that.kucun){
						$.ajax({
						type: "GET",
			             url: "product.php",
			             data: {"pid":that.uuid(),"name":that.p_name,"price":that.p_price,"img":that.flile_upload_name,"jianJie":that.p_info,"p_class":that.p_class,"p_gn":that.p_gn,"kucun":that.kucun,"add":"add"},
			             dataType: "json",
						success: function(data) {
							that.$message({
								message: "保存成功",
								type: 'success'
							});
							setTimeout(()=>{window.location.reload();},200)
						},
						error:function(data){
							console.log(data.responseText)
							that.$message({
								message: "保存成功",
								type: 'success'
							});
							setTimeout(()=>{window.location.reload();},200)
							
							}
						});
					}else{
						this.$message({
				          message: '请输入完整的产品属性',
				          type: 'warning'
				        });
					}
					
				},
				 //uuid
				uuid () {
					function _s4(){
						  return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
						}
					return _s4() + _s4() + '-' + _s4() + '-' + _s4() + '-' + _s4() + '-' + _s4() + _s4() + _s4();
				  },
				gatData() {
					var that = this;
					$.ajax({
						type: "GET",
			             url: "product.php",
			             data: {"product":"all"},
			             dataType: "json",
						success: function(data) {
							that.jsonData = data;
						},
					});
				},
				// 获取用户列表
				gatUserData() {
					var that = this;
					this.flag = 3;
					$.ajax({
						type: "GET",
			             url: "product.php",
			             data: {"users":"all"},
			             dataType: "json",
						success: function(data) {
							that.jsonUserData = data;
						},
						error:function(data){
							that.jsonUserData = data;
						}
					});
				},
				// 获取订单列表
				gatOrderData() {
					var that = this;
					this.flag = 6;
					$.ajax({
						type: "GET",
			             url: "order.php",
			             data: {"order":"all"},
			             dataType: "json",
						success: function(data) {
							that.jsonOrderData = data.data;
						},
						error:function(data){
							that.jsonOrderData = data.data;
						}
					});
				},
				 
						gatOrderlis() {
											var that = this;
											this.flag = 10;
											$.ajax({
												type: "GET",
												 url: "order.php",
												 data: {"CAR":"all"},
												 dataType: "json",
												success: function(data) {
													that.jsonOrderlis = data.data;
												},
												error:function(data){
													that.jsonOrderlis = data.data;
												}
											});
										},
				gatOrder() {
					var that = this;
					this.flag = 8;
					$.ajax({
						type: "GET",
			             url: "ordere.php",
			             data: {"userId":"all"},
			             dataType: "json",
						success: function(data) {
							that.jsonAddressData = data.data;
						},
						error:function(data){
							that.jsonAddressData = data.data;
						}
					});
				},
				yanlun() {
					var that = this;
					this.flag = 9;
					$.ajax({
						type: "GET",
			             url: "ordere.php",
			             data: {"name":"all"},
			             dataType: "json",
						success: function(data) {
							that.jsonAddress = data.data;
						},
						error:function(data){
							that.jsonAddress = data.data;
						}
					});
				},
				// 新增公告
				save_gg(){
					var that = this;
					if(that.g_title&&that.g_detail){
						$.ajax({
						type: "GET",
			             url: "gg.php",
			             data: {"g_title":that.g_title,"g_detail":that.g_detail,"g_id":that.uuid(),"add":"add"},
			             dataType: "json",
						success: function(data) {
							that.$message({
								message: "保存成功",
								type: 'success'
							});
							that.g_detail = "";
							that.g_title = "";
							setTimeout(()=>{window.location.reload();},200)
						},
						error:function(data){
							console.log(data.responseText)
							that.$message({
								message: "保存成功",
								type: 'success'
							});
							that.g_detail = "";
							that.g_title = "";
							setTimeout(()=>{window.location.reload();},200)
							
							}
						});
					}else{
						this.$message({
				          message: '请输入完整',
				          type: 'warning'
				        });
					}
					
				},
				// 获取公告列表
				gatggData(){
					var that = this;
					this.flag = 4;
					$.ajax({
						type: "GET",
			             url: "gg.php",
			             data: {"ggallList":"allList"},
			             dataType: "json",
						success: function(data) {
							that.jsonggData = data;
						},
						error:function(data){
							// that.jsonUserData = data;
						}
					});
				},
				// 删除产品
				delet_p(id){
					var that = this;
					$.ajax({
						type: "GET",
			             url: "product.php",
			             data: {"pid":id,"dele":"deletea"},
			             dataType: "json",
						success: function(data) {
							that.gatData();
							that.$message({
								message: "删除成功",
								type: 'success'
							});
						},
						error:function(data){
							console.log(data.responseText)
							that.gatData();
							that.$message({
								message: "删除成功",
								type: 'success'
							});
							
						}
					});
				},
				
				// 删除用户
				deletUser(userId){
					var that = this;
					$.ajax({
						type: "GET",
			             url: "product.php",
			             data: {"userId":userId,"deleteUser":"deleteUser"},
			             dataType: "json",
						success: function(data) {
							that.gatUserData();
							that.$message({
								message: "删除成功",
								type: 'success'
							});
						},
						error:function(data){
							console.log(data.responseText)
							that.gatUserData();
							that.$message({
								message: "删除成功",
								type: 'success'
							});
							
						}
					});
				},
				// 删除订单
				deletOrder(id){
					var that = this;
					$.ajax({
						type: "GET",
			             url: "order.php",
			             data: {"id":id,"deleteOrder":"deleteOrder"},
			             dataType: "json",
						success: function(data) {
							that.gatOrderData();
							that.$message({
								message: "删除成功",
								type: 'success'
							});
						},
						error:function(data){
							console.log(data.responseText)
							that.gatUserData();
							that.$message({
								message: "删除成功",
								type: 'success'
							});
							
						}
					});
				},
                //修改商品信息
				change_p(row){
					var that = this;
					that.dialog_order = true;
					that.change_name = row.name;
					that.change_price = row.price;
					that.change_kuncun = row.kucun;
					that.change_jianjie = row.jianJie;
					that.change_pid = row.id;
				},
				sureChangOrder(){
					var that = this;
					if(!that.change_name ||!that.change_price || !that.change_kuncun || !that.change_jianjie){that.$message({
								message: "请填写完整",
								type: 'warning'
							});}
					$.ajax({
						type: "GET",
			             url: "product.php",
			             data: {"pid":that.change_pid,"name":that.change_pid,"name":that.change_name,"price":that.change_price,"kucun":that.change_kuncun,"jianJie":that.change_jianjie,"change_p":"change_p"},
			             dataType: "json",
						success: function(data) {
							that.gatData();
							that.$message({
								message: "修改成功",
								type: 'success'
							});
							that.dialog_order = false;
						},
						error:function(data){
							console.log(data.responseText)
							that.gatUserData();
							that.$message({
								message: "修改失败",
								type: 'warning'
							});
							
						}
					});
				},
				
				
				 //添加地址
				changeM(row){
					var that = this;
					that.dialogFormVisiblemorenaddress = true;
					that.userAddress = row.userAddress;
					that.getUserName = row.getUserName;
					that.userPhone = row.userPhone;
					that.gg_title = row.id;
				},
				sureSave(){
					var that = this;
					
					if(!that.getUserName || !that.userAddress|| !that.userPhone){
						that.$message({
							message: "请填写完整",
							type: 'warning'
						});
						return;
					}
					 if(!(/^1[34578]\d{9}$/.test(this.userPhone))){ 
                    alert("手机号码有误，请重填");  
                    return false; 
                } 
					 
					$.ajax({
						type: "GET",
			             url: "ordere.php",
			           data: {"getUserName":that.getUserName,"userAddress":that.userAddress,"userPhone":that.userPhone,"dizi":"dizi","gg_title":that.gg_title},
			             dataType: "json",
						success: function(data) {
							that.gatOrder();
							that.$message({
								message: "修改成功",
								type: 'success'
							});
							that.dialogFormVisiblemorenaddress = false;
							
						},
						error:function(data){
							console.log(data.responseText)
							that.gatOrder();
							that.$message({
								message: "修改失败",
								type: 'warning'
							});
							
						}
					});
				},
				
				
				// 修改公告
				changegg(row){
					var that = this;
					that.dialog_gg = true;
					that.g_title = row.g_title;
					that.g_detail = row.g_detail;
					that.g_old_title = row.g_title;
				},
				sureChanggg(){
					var that = this;
					if(!that.g_detail || !that.g_title){
						that.$message({
							message: "请填写完整",
							type: 'warning'
						});
						return;
					}
					$.ajax({
						type: "GET",
			             url: "gg.php",
			             data: {"g_title":that.g_title,"g_detail":that.g_detail,"change_gg":"change_gg","g_old_title":that.g_old_title},
			             dataType: "json",
						success: function(data) {
							that.gatggData();
							that.$message({
								message: "修改成功",
								type: 'success'
							});
							that.dialog_gg = false;
							that.g_title = "";
							that.g_detail = "";
							that.g_old_title = "";
						},
						error:function(data){
							console.log(data.responseText)
							that.gatUserData();
							that.$message({
								message: "修改失败",
								type: 'warning'
							});
							
						}
					});
				},
				
				
				<!-- filters: { -->
<!--             brand(val) { -->
<!--                 var brand; -->
<!--                 if(val == 1) { -->
<!--                     brand = "上架"; -->
<!--                 } else if(val == 0) { -->
<!--                     brand = "下架"; -->

<!--                 } -->
<!--                 return brand -->
<!--             }, -->
<!--         }, -->
			
				
				// 删除公告
				deletgg(g_title){
					var that = this;
					$.ajax({
						type: "GET",
			             url: "gg.php",
			             data: {"g_title":g_title,"g_detele":"g_detele"},
			             dataType: "json",
						success: function(data) {
							that.gatggData();
							that.$message({
								message: "删除成功",
								type: 'success'
							});
						},
						error:function(data){
						}
					});
				},
				gatSuperData(){
					this.flag = 7;
					var that = this;
					$.ajax({
						type: "GET",
			             url: "../php/index.php",
			             data: {"userId":"admin","searchSuper":"searchSuper"},
			             dataType: "json",
						success: function(res) {
							that.jsonSuperData =res.data;
						},
						error:function(data){
							// that.jsonUserData = data;
						}
					});
				},
				saveSuper(){
					var that = this;
					if(!that.jsonSuperData.userName || !that.jsonSuperData.password){
						alert("请填写完整")
						return;
					}
					$.ajax({
						type: "GET",
			             url: "../php/index.php",
			             data: {"userId":"admin","userName":that.jsonSuperData.userName,"password":that.jsonSuperData.password,"setSuper":"setSuper"},
			             dataType: "json",
						success: function(res) {
							alert("保存成功")
							window.location.href = "index.html";
						},
						error:function(data){
							// that.jsonUserData = data;
						}
					});
				}
			}
		})
	</script>
</html>