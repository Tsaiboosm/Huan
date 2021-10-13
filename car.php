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
<style>
.cart-product-info{
  height:50px;
  line-height: 50px;
  background: #f7f7f7;
  padding-left: 20px;
}
.cart-product-info .delete-product{
  color:#666;
}
.cart-product-info .delete-product span{
  display: inline-block;
  vertical-align: top;
  margin:18px 8px 0 0;
  width:13px;
  height: 15px;
  background: url("cartBg.png") no-repeat -60px 0;
}
.cart-product-info .product-total{
  font-size: 14px;
  color:#e94826;
}
.cart-product-info .product-total span{
  font-size: 20px;
}
.cart-product-info .check-num{
  color:#333;
}
.cart-product-info .check-num span{
  color: #e94826;
}
.cart-product-info .keep-shopping{
  color: #666;
  margin-left: 40px;
}
.cart-product-info .keep-shopping span{
  display: inline-block;
  vertical-align: top;
  margin:18px 8px 0 0;
  width: 15px;
  height: 15px;
  background: url("cartBg.png") no-repeat -40px 0;
}
.cart-product-info .btn-buy{
  height: 50px;
  color: #fff;
  font-size: 20px;
  display: block;
  width: 110px;
  background: #ff7700;
  text-align: center;
  margin-left: 30px;
}
/* cart-worder */

.page-shopping-cart .cart-worder {
    padding: 20px; }
.page-shopping-cart .cart-worder .choose-worder {
    color: #fff;
    display: block;
    background: #39e;
    width: 140px;
    height: 40px;
    line-height: 40px;
    border-radius: 4px;
    text-align: center;
    margin-right: 20px; }
.page-shopping-cart .cart-worder .choose-worder span {
    display: inline-block;
    vertical-align: top;
    margin: 9px 10px 0 0;
    width: 22px;
    height: 22px;
    background: url("cartBg.png") no-repeat -92px 0; }
.page-shopping-cart .cart-worder .worker-info {
    color: #666; }
.page-shopping-cart .cart-worder .worker-info img {
    border-radius: 100%;
    margin-right: 10px; }
.page-shopping-cart .cart-worder .worker-info span {
    color: #000; }

.choose-worker-box {
    width: 620px;
    background: #fff; }
.choose-worker-box .box-title {
    height: 40px;
    line-height: 40px;
    background: #F7F7F7;
    text-align: center;
    position: relative;
    font-size: 14px; }
.choose-worker-box .box-title a {
    display: block;
    position: absolute;
    top: 15px;
    right: 16px;
    width: 10px;
    height: 10px;
    background: url("shopping_cart.png") no-repeat -80px 0; }
.choose-worker-box .box-title a:hover {
    background: url("shopping_cart.png") no-repeat -80px -22px; }
.choose-worker-box .worker-list {
    padding-top: 30px;
    height: 134px;
    overflow-y: auto; }
.choose-worker-box .worker-list li {
    float: left;
    width: 25%;
    text-align: center;
    margin-bottom: 30px; }
.choose-worker-box .worker-list li p {
    margin-top: 8px; }
.choose-worker-box .worker-list li.cur a {
    color: #f70; }
.choose-worker-box .worker-list li.cur a img {
    border: 1px solid #f70; }
.choose-worker-box .worker-list li a:hover {
    color: #f70; }
.choose-worker-box .worker-list li a:hover img {
    border: 1px solid #f70; }
.choose-worker-box .worker-list li img {
    border: 1px solid #fff;
    border-radius: 100%; }
	.fr {
    float: right;
}
</style>
<body>
	<div id="pdetail">
		<div id="" class="top_gg">
			<a href="">
				<!-- <img src="static/image/top_gg.jpg" /> -->
			</a>
		</div>
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
						<li v-if="userInfo.userName">
								<a href="javascript:void(0)">积分：{{userInfo.jifen}}</a>
							</li>
						<!--<li>
								<a href="javascript:void(0)" @click="dialogFormVisible = true">注册</a>
							</li>-->
						<li>
							<a href="javascript:void(0)">|&emsp;购物车</a>
						</li>
						<li>
							<a href="javascript:void(0)" @click="hrefOrder">|&emsp;订单</a>
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
			<p style="color:#666"><a href="index.html" style="color:#666">首页 </a> > 购物车</p>
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
				<el-table-column label="主图">
					<template slot-scope="scope">
						<a :href="`detail.html?id=${scope.row.id}`">
							<img :src="'sas/upload/'+scope.row.img" alt=""></a>
					</template>
				</el-table-column>
				<el-table-column prop="name" label="手机名称">
				</el-table-column>
				<el-table-column prop="price" label="价格">
				</el-table-column>
				<el-table-column prop="jianJie" label="简介">
				</el-table-column>
				<el-table-column prop="p_version" label="版本">
				</el-table-column>
				<el-table-column prop="p_color" label="颜色">
				</el-table-column>
				<el-table-column prop="p_num" label="数量" width="180">
					<template slot-scope="scope" >
						<el-input-number style="width: 138px" v-model="scope.row.p_num" @change="handleChange($event,scope.row)" :min="1" :max="20" label="描述文字"></el-input-number>
					</template>
				</el-table-column>
				
				<el-table-column label="操作">
					<template slot-scope="scope">
						<a href="javascript:void(0)" style="color:#1989fa" @click="delet(scope.row.id)">删除</a>
						<a href="javascript:void(0)" style="color:#1989fa" @click="toOrder(scope.row)">下单</a>
					</template>
				</el-table-column>
			</el-table>
		</div>
		<!-- 地址弹窗 -->
		<el-dialog title="请先填写收货地址" :visible.sync="dialog_order" width="30%">
			<el-form :model="form">
				<el-form-item label="收货地址" :label-width="form.formLabelWidth">
					<!-- <el-input v-model="form.address" autocomplete="off"></el-input> -->
					<el-select v-model="form.address" placeholder="请选择">
						<el-option v-for="item in jsonAddressData" :key="item.userAddress" :label="item.userAddress"
							:value="item.userAddress"></el-option>
					</el-select>
				</el-form-item>
				<el-form-item label="收货人" :label-width="form.formLabelWidth">
					<el-input v-model="form.userName" autocomplete="off"></el-input>
				</el-form-item>
				<el-form-item label="手机号" :label-width="form.formLabelWidth">
					<el-input v-model="form.mobile" autocomplete="off"></el-input>
				</el-form-item>
			</el-form>
			<span slot="footer" class="dialog-footer">
				<el-button @click="dialog_order = false">取 消</el-button>
				<el-button type="primary" @click="dialogVisibleOrder = true;dialog_order = false">确 定</el-button>
			</span>
		</el-dialog>
		<el-dialog
			title="确认下单"
			:visible.sync="dialogVisibleOrder"
			width="30%"
			>
			<p>{{orderInfoData.name}} ({{orderInfoData.jianJie}})</p>
			<p>单价：  {{orderInfoData.price}} ({{orderInfoData.p_color}}--{{orderInfoData.p_version}})</p>
			<p>收货地址: {{form.address}}</p>
			<p>收货人: {{form.userName}}</p>
			<p>手机号: {{form.mobile}}</p>
			<p style="color:red">实付: ￥{{totalPrice}}</p>
			<span slot="footer" class="dialog-footer">
				<el-button @click="dialogVisibleOrder = false">取 消</el-button>
				<el-button type="primary" @click="sure_order">确 定</el-button>
			</span>
		</el-dialog>
		<!--底部footer版权-->
		<div class="cart-product-info">
        <a href="javascript:;" class="delete-product" ><span></span>删除所选商品</a>
        <a href="#" class="keep-shopping"><span></span>继续购物</a>
        <a href="javascript:;" class="fr btn-buy">去结算</a>
        <a href="javascript:;" class="fr product-total">￥<span>{{totalPrice}}</span></a>
        <a href="javascript:;" class="fr check-num"><span>{{totalNum}}</span>件商品总计（不含运费）:</a>
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
			pid: "",
			radio_color: "1",
			radio_v: "1",
			searchVal:"",
			 totalPrice: 0,
             totalNum: 0,
			dialogVisibleOrder:false,
			dialog_order: false, //下单弹窗
			jsonAddressData: [],
			orderInfoData: {}, // 暂存 下单数据
			form: { address: "湖北武汉纺织大学外经贸学院", formLabelWidth: "120px", userName: "", mobile: "" },
			userInfo: JSON.parse(window.sessionStorage.user),
		},
		created() {
			this.gatData();
			this.gatAddressData()
		},
	
		
		mounted: function () {
		  this.getTotal();
		 },
				
		
		
		methods: {
			handleChange(value,data) {
				console.log(value);
				console.log(data);
				var user = window.sessionStorage.user ? JSON.parse(window.sessionStorage.user) :"";
				var that = this;
				$.ajax({
					type: "GET",
					url: "php/car.php",
					data: { "userId": JSON.parse(window.sessionStorage.user).userId ,"p_num":value,"pid":data.id,"changePnum":"changePnum"},
					dataType: "json",
					success: function (data) {
						console.log("数量修改成功")
					},
				});
			},
			
     
			  getTotal () {
			  this.totalPrice = 0
			  this.totalNum = 0
			  for (var i = 0; i < this.order; i++) {
			   var _d = this.order[i]
			   if(_d.is_selected){
			   this.totalPrice += _d['price'] * _d['num']
			   this.totalNum +=_d['num']
			   }
			  }
			 
			  },
			gatAddressData(){
					var that = this;
					var user = window.sessionStorage.user ? JSON.parse(window.sessionStorage.user) :"";
					if(!user){
						this.$message({
							message: '请先登录',
							type: 'warning'
						});
							return;
					}
					$.ajax({
							type: "GET",
									url: "php/detail.php",
									data: {"userId":user.userId,"getAddressdata":"getAddressdata"},
									dataType: "json",
							success: function(res) {
									that.jsonAddressData = res.data;
									that.form.address = res.data[0].userAddress ? res.data[0].userAddress : "湖北武汉纺织大学外经贸学院";
									that.form.userName = res.data[0].getUserName ? res.data[0].getUserName : "";
									that.form.mobile = res.data[0].userPhone ? res.data[0].userPhone : "";
							},
					});
			},
			gatData() {
				var that = this;
				$.ajax({
					type: "GET",
					url: "php/car.php",
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
					url: "php/car.php",
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
						that.$message({
							message: data.responseText,
							type: 'warning'
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
			hrefOrder() {
				if (window.sessionStorage.user) {
					window.location.href = "order.php"
				} else {
					this.$message({
						message: '请先登录',
						type: 'warning'
					});
				}
			},
			toOrder(arg) {
				this.dialog_order = true;
				this.orderInfoData = arg;
				console.log(arg)
			},
			// 确定下单
			sure_order() {
				if (!(this.form.address && this.form.mobile && this.form.userName)) {
					this.$message({
						message: '请填写完整信息',
						type: 'warning'
					});
					return;
				}
				this.dialog_order = false;
				this.order();
			},
			order() {
				var that = this;
				var user = window.sessionStorage.user ? JSON.parse(window.sessionStorage.user) : "";
				var that = this;
				var orderDate = this.formatDate(new Date());
				$.ajax({
					type: "GET",
					url: "php/detail.php",
					data: { "pid": that.orderInfoData.id, "userId": user.userId, "p_class": that.orderInfoData.p_class, "p_name": that.orderInfoData.name, "price": that.orderInfoData.price, "img": that.orderInfoData.img, "jianJie": that.orderInfoData.jianJie, "my_address": that.form.address, "user_name": that.form.userName, "user_mobile": that.form.mobile, "p_color": that.orderInfoData.p_color, "p_version": that.orderInfoData.p_version, "orderDate": orderDate, "orderCode": Date.parse(new Date()),"shifu": that.orderInfoData.price*that.orderInfoData.p_num,"userName":user.userName},
					dataType: "json",
					success: function (res) {
						if (res.resultCode == 200) {
							that.$message({
								message: '恭喜你，下单成功',
								type: 'success'
							});
							// that.jiFen();
							that.dialogVisibleOrder = false;
							that.sales(that.orderInfoData.id);
						} else if (res.resultCode == "00") {
							that.$message({
								message: '请不要重复下单',
								type: 'warning'
							});
						}
					},
					error: function (data) {
						that.$message({
							message: '下单失败',
							type: 'success'
						});
					}
				});
			},
			formatDate(now) {
				var year = now.getFullYear();
				var month = now.getMonth() + 1;
				var date = now.getDate();
				var hour = now.getHours();
				var minute = now.getMinutes();
				var second = now.getSeconds();
				// return year+"-"+month+"-"+date+" "+hour+":"+minute+":"+second; 
				return year + "-" + month + "-" + date + " " + hour + ":" + minute;
			},
			sales(productId) {
				$.ajax({
					type: "GET",
					url: "php/detail.php",
					data: { "productId": productId, "addsales": "addsales" },
					dataType: "json",
					success: function (res) {
						if (res.resultCode == 200) {
							console.log("销量增加成功")
						}
					},
					error: function (data) {

					}
				});
			},
			// 搜索
			onsearchVal(){
				var arg = encodeURI(encodeURI(this.searchVal));
				window.location.href = "index_search.html?arg="+arg;
			},
		}
	})
</script>

</html>