  <?php
if (!isset($_SESSION)) session_start();
include "../pages/config.php";
include ROOT."../include/function.php";
include "../pages/autoload.php";
$db= new Db();
$cart = new Cart();

$ac= getIndex("ac");

if ($ac=="add")
{
	$quantity = getIndex("quantity", 1);
	$id = getIndex("id");

	$cart->add($id, $quantity);
	
	/*echo $id."</br>";
	echo $quantity;*/exit;
}
//Biến $cart được tạo từ trang chủ index.php
if ($ac=="del")
		{
			$quantity = getIndex("quantity", 1);
			$id = getIndex("id");
			$cart->remove($id);
		}
		
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
							<a href="Giohang1.php"><span class="cart_title"><img src="images/Capture1.PNG" style="margin-top:-5px">Giỏ hàng(
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
			<a href="#"> Vivo      |</a>
			<b><span>ViVo 1713-V5S</span></b>
		</div>
	</div>
</div>
<div style="clear: both"></div>
<div class="container " style="background-color:white"/>
	<div class="row">
		<div class="col-xs-12">
			<div class="tieu_de">
			<?php
		        $obj = new Dongdt();
		        $data = $obj->getone('VI01');
		        foreach ($data as $r) {
		       
				?>
				<h2><?php echo $r['TenDongDT']; ?> </h2>
				<!--<h2>ViVo 1713-V5S</h2>-->
				<span>(No.00125344)</span>
			</div>
		</div>
        
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background-color:white">
			<div class="image">
				<!--<article class="body">
					<div class="wm-zoom-container my-zoom-1">
						<div class="wm-zoom-box">
							<img src="images/636424384166060102_800.jpg" class="img-responsive" class="jq-zoom-default-img"  alt="alternative text" data-hight-src="images/636424384166060102_800.jpg">
						</div>
					</div>
				</article>	-->		
				<img id="img_01" src="images/636424384166060102_800.jpg" data-zoom-image="images/636424384166060102_800.jpg" class="img-responsive" />  			
			</div>
		</div>
		<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background-color: white">
			<div class="mua_hang">
				<div class="order">
					<p>Mua online giá sốc</p>
					<span>6.690.000đ</span>
				</div>
				<div class="order">
					<p>Mua trả góp 0%</p>
					<span>6.690.000đ</span>
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
						<span> 3000mAh</span>	
					</li>
					<li>
						<label>CPU :</label>
						<span>Mediatek MT6750 8 nhân<br> 1.5 GHz</span>
					</li>
				</ul>
			</div>			
			<div class="thongtin margin_top_20" style="margin-left: 20px">
				<ul type="disc">
					<li>
						<label>Camera:</label>
						<span style="display: inline-block">Chính: 20.0 MP, Phụ: 13.0 MP</span>
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
						<li>Phiếu mua hàng trị giá 300.000đ khi mua sản phẩm tại tgdd</li>
					</ul>
					<!--<h2>KM2:</h2>
					<ul type="disc">
						<li>Trả góp 0% Hoặc 100% trúng PMH Phụ Kiện/ Dịch Vụ từ 150,000đ đến 10,000,000đ <a href="#">Xem chi tiết</a></li>
						<li>Tặng PMH Phụ Kiện 300,000đ</li>
						<li>Tặng PMH Phụ Kiện 100,000đ khi mua Online</li>
						<h2>KHÁCH HÀNG ĐƯỢC THÊM KHUYẾN MẠI:</h2>
						<li>Cơ hội Trúng 100 Tivi Samsung 50" & Máy Lạnh LG <a href="#">Xem chi tiết</a></li>
					</ul>-->
				</div>
				<div id="gallery_01">
				<div class="chon_mau">
					<h3>Chọn màu: </h3>
					<a href="javascript:void(0)" data-image="images/vivo-v5s-1713-den.jpeg" data-zoom-image="images/vivo-v5s-1713-den.jpeg" width="300px">
							<div class="mau"></div>
					</a>
					<a href="javascript:void(0)" data-image="images/vivo_v5s_blue.png" data-zoom-image="images/vivo_v5s_blue.png"  width="400px">
							<div class="mau_1"></div>
						</a>	
					<a href="javascript:void(0)" data-image="images/note8_v.jpg" data-zoom-image="images/note8_v.jpg"  width="300px">
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
								<button onclick="self.location.href='Giohang1.php?ac=add&id=<?php echo $r["MaDongDT"];?>'">THÊM VÀO<br><span>GIỎ HÀNG</span>
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
	<?php
		$cart->show();
	?>
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
							<img src="images/dt_1.png">
							<h5>Samsung Galaxy J3</h5>
							<strong>2.390.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/dt_2.png">
							<h5>Vivo Y69</h5>
							<strong>5.990.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/dt_3.png">
							<h5>Sony Experia</h5>
							<strong>3.990.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/dt_4.png">
							<h5>OPPO F3</h5>
							<strong>1.990.000 ₫</strong>
						</a>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/vivo-v5-400x460-400x460.png" width="182px" height="192px">
							<h5>Vivo v5 </h5>
							<strong>22.490.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/vivo-1606-y53-400-400x460.png" width="192px" height="192px">
							<h5>Vivo y53</h5>
							<strong>20.490.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/vivo-y69-400-400x460-400x460.png"width="192px" height="192px">
							<h5>Vivo y69 </h5>
							<strong>18.490.000 ₫</strong>
						</a>
					</div>
					<div class="col-lg-3 colg-md-3 col-sm-6 col-xs-12 content_dt">
						<a href="#">
							<img src="images/vivo-v7-plus-1-400x460.png"width="192px" height="192px">
							<h5>Vivo v7 plus</h5>
							<strong>15.490.000 ₫</strong>
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
			<h3>Thông số kỹ thuật của Vivo 1713-V5s</h3>
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
						<span>MicroSD hỗ trợ đến 256GB</span>
					</li>
					<li>
						<label>Trọng Lượng :</label>
						<span> 156 g</span>
					</li>
					<h4>Kết nối & Cổng giao tiếp</h4>
					<li>
						<label>Mạng 2G, 3G, 4G :</label>
						<span>Không</span>
					</li>
					<li>
						<label>Băng tần 2G :</label>
						<span> 	GSM 850 / 900 / 1800 / 1900</span>
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
						<li><a href="faq.php">Gửi góp ý khiếu nại</a></li>
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
<script type="text/javascript" src="../../Font-end/js/jquery.wm-zoom-1.0.min.js"></script>
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
