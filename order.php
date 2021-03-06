<!DOCTYPE html>
<html>

<head>
	<title>华为商城</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="static/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="static/css/public.css" />
	<link rel="stylesheet" type="text/css" href="static/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="static/css/elementui.css" />
	<link rel="shortcut icon" href="favicon.ico">
	<script src="static/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="static/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="static/js/vue.js"></script>
	<script src="static/js/elementui.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>
	<div id="pdetail">
		<!-- <div id="" class="top_gg">
				<a href="">
					<img src="static/image/top_gg.jpg" />
				</a>
			</div> -->
		<div id="" class="shortcut">
			<div class="layout">
				<div class="s-sub">
					<ul>
						<li>
							<a href="index.html">首页</a>
						</li>
						<li>
							<a href="systemInfo.html">商城简介</a>
						</li>
						<!-- <li>
								<a href="">帮助中心 用户反馈</a>
							</li> -->
						<li>
							<a href="baoxiu.html">保修政策</a>
						</li>
						<li>
							<a href="problem.html">热门问题</a>
						</li>
					</ul>
				</div>
				<div class="s-right">
					<ul>
						<li>
							<a href="index.html" v-if="!userInfo.userName">未登录</a>
							<a href="userInfo.html" v-else>{{userInfo.userName}}</a>
						</li>
						<!-- <li v-if="userInfo.userName">
								<a href="javascript:void(0)">积分：{{userInfo.jifen}}</a>
							</li> -->
						<!--<li>
								<a href="javascript:void(0)" @click="dialogFormVisible = true">注册</a>
							</li>-->
						<li>
							<a href="javascript:void(0)" @click="car">|&emsp;购物车</a>
						</li>
						<li>
							<a href="javascript:void(0)">|&emsp;订单</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--header-->
		<div class="header">
			<div id="" class="layout">
				<div class="left">
					<div class="logo">
						<img src="static/image/logo.png" />
					</div>
					<div class="naver">
						<ul id="naver-list">
							<li id="huawei" class="">
								<a href="ry.html" target="_blank">
									<span>荣耀</span>
								</a>
							</li>
							<li id="huawei" class="">
								<a href="p.html" target="_blank">
									<span>HUAWEI P系列</span>
								</a>
							</li>
							<li id="honor" class="">
								<a href="rycw.html" target="_blank">
									<span>华为畅享系列</span>
								</a>
							</li>
							<li id="honor" class="">
								<a href="mate.html" target="_blank">
									<span>HUAWEI Mate系列</span>
								</a>
							</li>
							<li id="honor" class="">
								<a href="nova.html" target="_blank">
									<span>HUAWEI nova系列</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--导航右边部分-->
				<div class="right">
					<input type="text" v-model="searchVal" placeholder="荣耀10降价" class="search-text">
					<el-button class="search-btn" icon="el-icon-search" @click="onsearchVal" style="padding: 12.5px;"
						circle></el-button>
					<!-- <input type="submit" class="search-btn" @click="onsearchVal" value="搜索"> -->
				</div>
			</div>
		</div>
		<div id="car-table" class="layout">
			<p style="color:#666"><a href="index.html" style="color:#666">首页</a> > 订单</p>
			<!-- <table border cellspacing="0" v-if="jsonData.length">
					<tr>
						<th>主图</th>
						<th>手机名称</th>
						<th>价格</th>
						<th>简介</th>
						<th>操作</th>
					</tr>
					<tr v-for="(item,index) in jsonData" :key="index">
						<td><img :src="'sas/upload/'+item.img" alt="" srcset=""> </td>
						<td>{{item.name}}</td>
						<td>{{item.price}}</td>
						<td>{{item.jianJie}}</td>
						<td class="table-delete" @click="delet(item.id)">删除</td>
					</tr>
				</table> -->
				
			<el-table :data="jsonData" style="width: 100%">
				<el-table-column label="主图" width="90">
					<template slot-scope="scope">
						<a :href="`detail.html?id=${scope.row.id}`">
							<img :src="'sas/upload/'+scope.row.img" alt=""></a>
					</template>
					
				</el-table-column>
				<el-table-column prop="p_name" label="手机名称" width="100">
				</el-table-column>
				<el-table-column prop="shifu" label="实付">
				</el-table-column>
				<el-table-column prop="jianJie" label="简介">
				</el-table-column>
				<el-table-column prop="p_version" label="版本">
				</el-table-column>
				<el-table-column prop="p_color" label="颜色">
				</el-table-column>
				<el-table-column prop="orderDate" label="下单时间">
				</el-table-column>
				<el-table-column label="状态" align="center" prop="status">
               <template scope="scope">
           {{scope.row.status===1?'已完成订单':'未完成订单'}}
              </template>
                  </el-table-column>
				<el-table-column prop="orderCode" label="订单编号">
				</el-table-column>
				<!-- <el-table-column
						prop="my_address"
						label="收货地址">
					</el-table-column>
					<el-table-column
						prop="user_name"
						label="收货人">
					</el-table-column>
					<el-table-column
						prop="user_mobile"
						label="手机号">
					</el-table-column> -->
				<el-table-column label="操作" width="100">
					<template slot-scope="scope">
						<a href="javascript:void(0)" style="color:#1989fa" @click="delet(scope.row.id)">删除</a>
					</template>
				</el-table-column>
			</el-table>
		</div>


		<!--底部footer版权-->
		<div id="footer">
			<div class="foot">
				<!--<p class="foot_logo"><img src="static/image/flogo.png" /></p>-->
				<p class="">Designed and developed by chenwei huo.<br /> Copyright © 2010-2019 chenwei.com. All Rights Reserved.</p>
				<p class=""></p>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	// 注册
	Vue.component('my-component', {});
	var WEITUOSERVER = new Vue({
		el: '#pdetail',
		data: {
			jsonData: [],
			dialogTableVisible: false,
			dialogFormVisible: false,
			searchVal:"",
			pid: "",
			radio_color: "1",
			radio_v: "1",
			userInfo: JSON.parse(window.sessionStorage.user),
		},
		created() {
			this.gatData();
		},
		methods: {
			gatData() {
				var that = this;
				$.ajax({
					type: "GET",
					url: "php/order.php",
					data: { "userId": JSON.parse(window.sessionStorage.user).userId },
					dataType: "json",
					success: function (data) {
						that.jsonData = data.data;
					},
				});
			},
			delet(id) {
				var that = this;
				$.ajax({
					type: "GET",
					url: "php/order.php",
					data: { "pid": id, "del": "del" },
					dataType: "json",
					success: function (data) {
						that.$message({
							message: "删除成功",
							type: 'success'
						});
						that.gatData();
					},
					error: function (data) {
						console.log(data.responseText)
						that.$message({
							message: data.responseText,
							type: 'success'
						});
						window.location.reload();
					}
				});
			},
			xiadan() {
				this.$message({
					message: '恭喜你，下单成功',
					type: 'success'
				});
			},
			addCar() {
				var user = window.sessionStorage.user ? JSON.parse(window.sessionStorage.user) : "";
				if (!!user) {

				} else {
					this.$message({
						message: '请先登录',
						type: 'warning'
					});
				}
			},
			car() {
				if (window.sessionStorage.user) {
					window.location.href = "car.php"
				} else {
					this.$message({
						message: '请先登录',
						type: 'warning'
					});
				}
			},
			// 搜索
			onsearchVal() {
				var arg = encodeURI(encodeURI(this.searchVal));
				window.location.href = "index_search.html?arg=" + arg;
			},
		}
	})
</script>

</html>