<?php
session_start();
include "../pages/config.php";

include ROOT."../include/function.php";

include "../pages/autoload.php";
$db= new Db();
$cart = new Cart();
?>
	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>THÔNG TIN SẢN PHẨM</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="../../Font-end/css/bootstrap.min.css">
<link rel="stylesheet" href="../../Font-end/css/jquery.wm-zoom-1.0.min.css">
<!--<link href="css/style_nivo.css">-->
<!--<link rel="stylesheet" href="css/style.css">-->
<link rel="stylesheet" href="../../Font-end/css/style_content.css">
<link rel="stylesheet" href="../dist/css/stylevivo.css">

</head>

<body>
<div class="container">
  <div class="wrap">
	<div class="header">
		<div class="header_top">
		
			<div class="logo">
				<a href="#"><img src="#"  /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
							<strong class="opencart"> </strong>
							<a href="giohang.php"><span class="cart_title"><img src="images/Capture1.PNG" style="margin-top:-5px">Giỏ hàng(
							<span id="cart_sumary"><?php echo  $cart->getNumItem();
							?></span></span>
						)</a>
						
					</div>
			    </div>			
	 		</div>
	 	</div>
	  </div>
  </div>
</div>
<div class="	container margin_top_20	">
	<div class="row">
		<div class="header">
			<a href="index.php"> Trang Chủ |</a>
			<a href="store.php">Điện thoại |</a>
			<a href="#"> SONY  |</a>
			<b></b><span>Sony Xperia-xzs-16 </span></b>
		</div>
	</div>
</div>
<div style="clear: both"></div>
<div class="container " style="background-color:white">
	<div class="row">
		<div class="col-xs-12">
			<div class="tieu_de">
				<?php
		        $obj = new Dongdt();
		        $data = $obj->getOne('SO03');
		        foreach ($data as $r) {
		       
				?>
				<h2><?php echo $r['TenDongDT']; ?> </h2>
				<span>(No.02233539)</span>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background-color:white">
			<div class="image">
                 <img id="img_01" src="images/sony-xperia-xzs-3439474562-jpg.jpg" data-zoom-image="images/sony-xperia-xzs-3439474562-jpg.jpg" class="img-responsive" /> 			  							  			
			</div>
		</div>
		<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background-color: white">
			<div class="mua_hang">
				<div class="order">
					<p>Mua online giá sốc</p>
					<span>12.550.000đ</span>
				</div>
				<div class="order">
					<p>Mua trả góp 0%</p>
					<span>12.550.000đ</span>
				</div>
			</div>
			<div class="thong_tin margin_top_20">
				<ul type="disc">
					<li>
						<label>Màn Hình:</label>
						<span style="display: inline-block">IPS LCD, 5.2", Full HD</span>
					</li>
					<!--<li>
						<label>Hệ Điều Hành</label>
						<span style="display: inline-block">Funtouch OS 3.0 (nền tảng Android 6.0)</span>
					</li>-->
					<li>
						<label>Pin:</label>
						<span> 2900 mAh</span>	
					</li>
					<li>
						<label>CPU :</label>
						<span>	Snapdragon 820 4 nhân 64-bit</span>
					</li>
				</ul>
			</div>			
			<div class="thongtin margin_top_20" style="margin-left: 20px">
				<ul type="disc">
					<li>
						<label>Camera trước:</label>
						<span style="display: inline-block">13 MP</span>
					</li>
					<li>
						<label>Camera sau:</label>
						<span style="display: inline-block">19 MP</span>
					</li>
					<li>
						<label>Ram:</label>
						<span> 4 GB</span>	
					</li>
					<li>
						<label>Bộ Nhớ Trong:</label>
						<span>64 GB</span>
					</li>
				</ul>
	</div>
</div>
<div  class="col-lg-4 col-md-4 col-sm-6 col-xs-12 inform " style="margin-left: 15px;">
				<div class="button">
					<p>Khuyến mại đặc biệt (SL có hạn)</p>
				</div>
				<div class="khung_inform">
					<!--<h3>CHƯƠNG TRÌNH KHUYẾN MẠI ĐẶC BIỆT ĐẾN 30/11:KHÁCH HÀNG CHỌN 1 TRONG 2 KHUYẾN MẠI SAU:</h3>
					<h2>KM1:</h2>-->
					<ul type="disc">
						<li>Phiếu mua hàng trị giá 300.000đ khi mua online ( Không trừ vào giá)</li>
					</ul>
					<!--<h2>KM2:</h2>
					<ul type="disc">
						<li>Trả góp 0% Hoặc 100% trúng PMH Phụ Kiện/ Dịch Vụ từ 150,000đ đến 7,000,000đ <a href="#">Xem chi tiết</a></li>
						<li>Tai nghe chụp tai Kanen (Nếu không có quà sẽ hoàn 200,000đ)</li>
						<h2>KHÁCH HÀNG ĐƯỢC THÊM KHUYẾN MẠI:</h2>
						<li>Bảo hành chính hãng: thân máy 12 tháng, pin 6 tháng, sạc 6 tháng, tai nghe 6 tháng <a href="#">Xem chi tiết</a></li>
					</ul>-->
				</div>
				<div class="chon_mau">
					<h3>Chọn màu: </h3>
					<a href="">
						<div class="mau"></div>
					</a>
					<a href="#">
							<div class="mau_1"></div>
					</a>	
					<a href="#">
						<div class="mau_2"></div>
					</a>		
				</div>
				<div class="col-lg-12 col-md-12 col-sm-6 col-zs-12 mua_hang_1" style="margin-top: 20px;">
					<div class="dat_hang">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 dat_hang_1">
							<button class="btn btn-default">MUA NGAY<br><span>Mua hàng, không thích không mua</span> 
							</button>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 dat_hang_2">
							<button onclick="self.location.href='giohang.php?ac=add&id=<?php echo $r["MaDongDT"];?>'">THÊM VÀO<br><span>GIỎ HÀNG</span>
							</button>
						</div>
                       <?php } ?>
					</div>
					<h3> Gọi <span>1800.1060 (Miễn phí) đễ được tư vấn</span></h3>
				</div>
		</div>

	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 tab_dt" style="margin-top: 10px">
			<!-- Nav tabs --> 
			<ul class="nav nav-tabs" role="tablist">
				<li ><a href="#home" data-toggle="tab">Điện thoại tương tự</a></li>
			  	<li><a href="#profile" data-toggle="tab">Điện thoại cùng hãng</a></li>
			</ul>
	  <!-- Tab panes -->
			<div class="tab-content" style="margin-top: 20px">
				<div role="tabpanel" class="tab-pane active" id="home">
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/iphone-7-9-300x300.jpg">
							<h5>Iphone 7</h5>
							<strong>17.990.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/ANDROID_8.png">
							<h5>HTC 10 evo</h5>
							<strong>5.990.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/IPHONE_2.png">
							<h5>Iphone 6s</h5>
							<strong>13.990.000 ₫</strong>
							
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/ipad-pro-97-inch-1-400x460.png" width="250px;">
							<h5>ipad pro 97</h5>
							<strong>9.500.000 ₫</strong>
						</a>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/SY-Z2-LTE-D6503-16-BK.jpg" width="200px" height="200px">
							<h5>Sony-Z2</h5>
							<strong>10.620.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/sony-xperia-xa-ultra_11895.png" width="200px" height="200px">
							<h5>Sony Xperia XA ultra</h5>
							<strong>6.250.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/sony-xperia-xz-10-300x300.jpg" width="200px" height="200px">
							<h5>Sony Xperia XZ pretium</h5>
							<strong>15.290.000 ₫</strong>
						</a>
				</div>
				<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/Sony-Xperia-Z1-1-300x300.jpg" width="200px" height="200px">
							<h5>Sony Xperia Z1</h5>
							<strong>3.990.000 ₫</strong>
						</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 thong_so">
			<h3>Thông số kỹ thuật của Sony</h3>
			<div class="thong_tin">
				<h4>Bộ nhớ & Lưu trữ</h4>
				<ul class="show_tt">
					<li>
						<label>Danh bạ lưu trữ :</label>
						<span>Không giới hạn</span>
					</li>
					<li>
						<label>ROM :</label>
						<span>64 GB</span>
					</li>
					<li>
						<label>Hỗ trợ thẻ nhớ tối đa :</label>
						<span>MicroSD, hỗ trợ tối đa 256 GB</span>
					</li>
					<li>
						<label>Trọng Lượng :</label>
						<span> 285 g</span>
					</li>
					<h4>Kết nối & Cổng giao tiếp</h4>
					<li>
						<label>Mạng 4G :</label>
						<span>Có hỗ trợ</span>
					</li>
					<li>
						<label>Hệ Điều hành</label>
						<span> Android 7.0</span>
					</li>
				</ul>
			</div>
		</div> 
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 tin_tuc" style="margin-top: 10px">	
			<div class="nd_tt">
				<h2>Bài viết về Sony </h2>
				<div class="inform_tt">
					<ul>
						<li>
							<a href="#"><img src="iPhone X lộ ảnh và video đập hộp trước ngày lên kệ_files/apple-iphone-x-2-_1474x832-300x200.jpg" class="img-responsive">
								<h3>I phone bán chạy nhất Việt Nam trong tháng 8</h3>
							</a>
						</li>
						<li>
							<a href="#"><img src="iPhone X lộ ảnh và video đập hộp trước ngày lên kệ_files/fa_800x449-300x200.jpg" class="img-responsive"></a>
							<h3>I phone X lộ ảnh đập hộp trước ngày lên kệ</h3>
						</li>
						<li>
							<a href="#"><img src="iPhone X lộ ảnh và video đập hộp trước ngày lên kệ_files/ava_800x450-300x200.jpg" class="img-responsive"></a>
							<h3>Trải nghiệm cùng I phone X trong vòng 1 tuần</h3>
						</li>
						<li>
							<a href="#"><img src="iPhone X lộ ảnh và video đập hộp trước ngày lên kệ_files/apple-q4-2017-earnings-report-aapl-results_800x450-300x200.jpg" class="img-responsive"></a>
							<h3>Giám đốc của công ty I Phone họp báo ra mắt điện thoại I phone X</h3>
							<a href="index.php">Xem tất cả</a>
						</li>
					</ul>
				</div>
			</div>	
		</div>
	</div>
</div>
 <div class="footer margin_top_20">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>GIỚI THIỆU VỀ CÔNG TY</h4>
						<ul>
						<li><a href="#">Câu hỏi thường gặp mua hàng</a></li>
						<li><a href="#">Các chính sách đổi trả </a></li>
						<li><a href="#">Giao hàng và thanh toán</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>TIN TUYỂN DỤNG</h4>
						<ul>
						<li><a href="about.php">Tin khuyến mãi</a></li>
						<li><a href="faq.html">Gửi góp ý khiếu nại</a></li>
						<li><a href="#">Hướng dẫn mua online</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>HỆ THỐNG CỬA HÀNG</h4>
						<ul>
							<li><a href="contact.php">Tìm siêu thị</a></li>
							<li><a href="index.php">Quy chế hoạt động</a></li>
							<li><a href="#">Chính sách bảo hành</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4 support_tt">
					<h4>
						Hỗ trợ thanh toán
						<a href="#"><img src="images/icon_atm.png"></a>
						<a href="#"><img src="images/icon_visa.png"></a>
					</h4>
						<ul>
							<li class="footer_pay">Tư vẫn miễn phí (24/7) : <span style="color: #d02c2c;">1800.1060 </span> </li>
						</ul>
						<!--<div class="social-icons">
							<h4>LIKE & SHARE</h4>
					   		  <ul>
							      <li class="facebook"><a href="" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"></a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>-->
				</div>
			</div>
			<div class="copy_right">
				<p> © 2017. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GP số 22/GP-ICP-STTTT do Sở TTTT TP HCM cấp ngày 20/03/2012. Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 18001060.</p>
		   </div>
     </div>
    </div>

<script type="text/javascript" src="../../Font-end/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../Font-end/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../Font-end/js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../../Font-end/css/jquery.wm-zoom-1.0.min.css"></script>
<script src="../../Font-end/js/jquery-3.2.1.slim.js"></script>
<script type="text/javascript" src="../../Font-end/js/jquery.elevateZoom-3.0.8.min.js"></script>

<script>
	//initiate the plugin and pass the id of the div containing gallery images
$("#img_01").elevateZoom({constrainType:"height", constrainSize:363, zoomType: "lens", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"}); 

//pass the images to Fancybox
$("#gallery_01").bind("click", function(e) {  
  var ez =   $('#gallery_01').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
</script>
</body>
</html>


