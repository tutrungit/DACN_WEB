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

<body style="background:">
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
			<a href="../../Font-end/index.php"> Trang Chủ |</a>
			<a href="../../Font-end/store.php">Điện thoại |</a>
			<a href="#"> OPPO    |</a>
			<b><span>OPPO A37-16GB </span></b>
		</div>
	</div>
</div>
<div style="clear: both"></div>
<div class="container "" style="background-color:white">
	<div class="row">
		<div class="col-xs-12">
			<div class="tieu_de">
			<?php
		        $obj = new Dongdt();
		        $data = $obj->getOne('OP03');
		        foreach ($data as $r) {
		       
				?>
				<h2><?php echo $r['TenDongDT']; ?> </h2>
				<span>(No.00236514)</span>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background-color:white">
			<div class="image">
				<img id="img_01" src="images/oppo_a37_16gb_dual_sim_rose_gold.jpg" data-zoom-image="images/oppo_a37_16gb_dual_sim_rose_gold.jpg" class="img-responsive" /> 		  			
			</div>
		</div>
		<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background-color: white">
			<div class="mua_hang">
				<div class="order">
					<p>Mua online giá sốc</p>
					<span>3.290.000đ</span>
				</div>
				<div class="order">
					<p>Mua trả góp 0%</p>
					<span>3.290.000đ</span>
				</div>
			</div>
			<div class="thong_tin margin_top_20">
				<ul type="disc">
					<li>
						<label>Màn Hình:</label>
						<span style="display: inline-block">IPS LCD, 5,5", HD</span>
					</li>
					<!--<li>
						<label>Hệ Điều Hành</label>
						<span style="display: inline-block">Funtouch OS 3.0 (nền tảng Android 6.0)</span>
					</li>-->
					<li>
						<label>Pin:</label>
						<span>	2630 mAh</span>	
					</li>
					<li>
						<label>CPU :</label>
						<span>Qualcomm Snapdragon 410 4 nhân<br> 64 bit</span>
					</li>
				</ul>
			</div>			
			<div class="thongtin margin_top_20" style="margin-left: 20px">
				<ul type="disc">
					<li>
						<label>Camera:</label>
						<span style="display: inline-block">Chính: 5 MP, Phụ: 8 MP</span>
					</li>
					<li>
						<label>Ram:</label>
						<span> 2 GB</span>	
					</li>
					<li>
						<label>Bộ Nhớ Trong:</label>
						<span>16 GB</span>
					</li>
				</ul>
	</div>
</div>
<div  class="col-lg-4 col-md-4 col-sm-6 col-xs-12 inform " style="margin-left: 15px;">
				<div class="button">
					<p>Khuyến mại đặc biệt (SL có hạn)</p>
				</div>
				<div class="khung_inform">

					<ul type="disc">
						<li>Phiếu mua hàng trị giá 300.000đ khi mua sản phẩm tại tgdd</li>
					</ul>
				</div>
				<div id="gallery_01">
				<div class="chon_mau">
					<h3>Chọn màu: </h3>
					<a href="javascript:void(0)" data-image="images/OPPO A37 Den.jpg" data-zoom-image="images/OPPO A37 Den.jpg"  width="400px">
							<div class="mau"></div>
						</a>
					<a href="javascript:void(0)" data-image="images/OPPO-A37-da.jpg" data-zoom-image="images/OPPO-A37-da.jpg"  width="400px">
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
							<img src="images/samsung-galaxy-j7-prime-9-300x300.jpg">
							<h5>Samsung Galaxy J7 prime</h5>
							<strong>4.990.000 ₫</strong>
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
							<img src="images/asus-zenfone-3-max-5-5-zc553kl-551748303-jpg.jpg" width="300px;">
							<h5>asus zenfone 3</h5>
							<strong>2.500.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/IPHONE_2.png">
							<h5>Iphone 6s</h5>
							<strong>13.990.000 ₫</strong>
						</a>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/oppo-a37-pp-300x300.jpg" width="200px" height="200px">
							<h5>oppo a37</h5>
							<strong>2.490.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/oppo-f3-plus-vang-dong-1-300x300.png" width="200px" height="200px">
							<h5>OPPO F3 Flus</h5>
							<strong>5.490.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/oppo-neo-7-hero-400x460.png" width="200px" height="200px">
							<h5>OPPO Neo 7</h5>
							<strong>6.690.000đ</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/oppo-f1s-7-200x200.jpg"width="200px" height="200px">
							<h5>OPPO F1s </h5>
							<strong>3.990.000 ₫</strong>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 thong_so">
			<h3>Thông số kỹ thuật của OPPO A37-16GB</h3>
			<div class="thong_tin">
				<h4>Bộ nhớ & Lưu trữ</h4>
				<ul class="show_tt">
					<li>
						<label>Danh bạ lưu trữ :</label>
						<span>Không giới hạn</span>
					</li>
					<li>
						<label>ROM :</label>
						<span>16 GB</span>
					</li>
					<li>
						<label>Hỗ trợ thẻ nhớ tối đa :</label>
						<span>MicroSD hỗ trợ đến 128GB</span>
					</li>
					<li>
						<label>Trọng Lượng :</label>
						<span> 136 g</span>
					</li>
					<h4>Kết nối & Cổng giao tiếp</h4>
					<li>
						<label>Mạng 4G :</label>
						<span>Có hỗ trợ</span>
					</li>
					<li>
						<label>Hệ Điều hành</label>
						<span> 		Android 5.1 (Lollipop)</span>
					</li>
				</ul>
			</div>
		</div> 
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 tin_tuc" style="margin-top: 10px">	
			<div class="nd_tt">
				<h2>Bài viết về ViVo 1735-V5s</h2>
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
    </div>

<script type="text/javascript" src="../../Font-end/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../Font-end/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../Font-end/js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../../Font-end/css/jquery.wm-zoom-1.0.min.css"></script>
<!--<script type="text/javascript">
	$(document).ready(function()
		{
			$('.my-zoom-1').WMZoom();
		});
</script>-->
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
