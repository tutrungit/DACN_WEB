<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title> Mobilestore Siêu thị điện thoại </title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<meta charset="utf-8">
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="js/jquery.livequery.js"></script>
		<link href="css/style1.css" rel="stylesheet" />
		<script type="text/javascript">

$(document).ready(function() {
	
	var Arrays=new Array();
	
	$('.add-to-cart-button').click(function(){
		
		var thisID 	  = $(this).parent().parent().attr('id').replace('detail-','');
		
		var itemname  = $(this).parent().find('.item_name').php();
		var itemprice = $(this).parent().find('.price').php();
		
		if(include(Arrays,thisID))
		{
			var price 	 = $('#each-'+thisID).children(".shopp-price").find('em').php();
			var quantity = $('#each-'+thisID).children(".shopp-quantity").php();
			quantity = parseInt(quantity)+parseInt(1);
			
			var total = parseInt(itemprice)*parseInt(quantity);
			
			$('#each-'+thisID).children(".shopp-price").find('em').php(total);
			$('#each-'+thisID).children(".shopp-quantity").php(quantity);
			
			var prev_charges = $('.cart-total span').php();
			prev_charges = parseInt(prev_charges)-parseInt(price);
			
			prev_charges = parseInt(prev_charges)+parseInt(total);
			$('.cart-total span').php(prev_charges);
			
			$('#total-hidden-charges').val(prev_charges);
		}
		else
		{
			Arrays.push(thisID);
			
			var prev_charges = $('.cart-total span').php();
			prev_charges = parseInt(prev_charges)+parseInt(itemprice);
			
			$('.cart-total span').php(prev_charges);
			$('#total-hidden-charges').val(prev_charges);
			
			var Height = $('#cart_wrapper').height();
			$('#cart_wrapper').css({height:Height+parseInt(45)});
			
			$('#cart_wrapper .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> $<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="images/remove.png" class="remove" /><br class="all" /></div>');
			
		}
		
	});	
	
	$('.remove').livequery('click', function() {
		
		var deduct = $(this).parent().children(".shopp-price").find('em').php();
		var prev_charges = $('.cart-total span').php();
		
		var thisID = $(this).parent().attr('id').replace('each-','');
		
		var pos = getpos(Arrays,thisID);
		Arrays.splice(pos,1,"0")
		
		prev_charges = parseInt(prev_charges)-parseInt(deduct);
		$('.cart-total span').php(prev_charges);
		$('#total-hidden-charges').val(prev_charges);
		$(this).parent().remove();
		
	});	
	
	$('#Submit').livequery('click', function() {
		
		var totalCharge = $('#total-hidden-charges').val();
		
		$('#cart_wrapper').php('Total Charges: $'+totalCharge);
		
		return false;
		
	});	
	
	// this is for 2nd row's li offset from top. It means how much offset you want to give them with animation
	var single_li_offset 	= 200;
	var current_opened_box  = -1;
	
	$('#wrap li').click(function() {
	
		var thisID = $(this).attr('id');
		var $this  = $(this);
		
		var id = $('#wrap li').index($this);
		
		if(current_opened_box == id) // if user click a opened box li again you close the box and return back
		{
			$('#wrap .detail-view').slideUp('slow');
			return false;
		}
		$('#cart_wrapper').slideUp('slow');
		$('#wrap .detail-view').slideUp('slow');
		
		// save this id. so if user click a opened box li again you close the box.
		current_opened_box = id;
		
		var targetOffset = 0;
		
		// below conditions assumes that there are four li in one row and total rows are 4. How ever if you want to increase the rows you have to increase else-if conditions and if you want to increase li in one row, then you have to increment all value below. (if(id<=3)), if(id<=7) etc
		
		if(id<=3)
			targetOffset = 0;
		else if(id<=7)
			targetOffset = single_li_offset;
		else if(id<=11)
			targetOffset = single_li_offset*2;
		else if(id<=15)
			targetOffset = single_li_offset*3;
		
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: targetOffset}, 800,function(){
			
			$('#wrap #detail-'+thisID).slideDown(500);
			return false;
		});
		
	});
	
	$('.close a').click(function() {
		
		$('#wrap .detail-view').slideUp('slow');
		
	});
	
	$('.closeCart').click(function() {
		
		$('#cart_wrapper').slideUp();
		
	});
	
	$('#show_cart').click(function() {
		
		$('#cart_wrapper').slideToggle('slow');
		
	});
	
});

function include(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return true;
  }
}

function getpos(arr, obj) {
  for(var i=0; i<arr.length; i++) {
    if (arr[i] == obj) return i;
  }
}

</script>

	</head>
	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form>
					<input type="text"><input type="submit" value="TÌM KIẾM" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
					<li><a href="../Back-end/pages/DangKy.php">ĐĂNG KÝ</a></li>
					<li><a href="../Back-end/pages/DangNhap.php">ĐĂNG NHẬP</a></li>
					<li><a href="#">PHÁT TRIỂN</a></li>
					<li><a href="#">KIỂM TRA</a></li>
					<li><a href="#">TÀI KHOẢN CỦA TÔI</a></li>
					<li><a href="#"><span>GIỎ HÀNG &nbsp;&nbsp;: </span></a><lable> &nbsp;Không có sản phẩm</lable></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href="about.php">Giới thiệu</a></li>
				<li><a href="store.php">Cửa hàng</a></li>
				<li><a href="blog.php">Bài viết</a></li>
				<li><a href="contact.php">Liên hệ</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    <div class="content-grids">
		    	
<div align="left" style="min-height:800px;">
	
	<div id="cart_wrapper" align="center">
	
		<form action="#" id="cart_form" name="cart_form">
		
			<div class="cart-info"> </div>
			
			<div class="cart-total">
			
				<b>Total Charges:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> $<span>0</span>
				
				<input type="hidden" name="total-hidden-charges" id="total-hidden-charges" value="0" />
			</div>
			
			<button type="submit" id="Submit">CheckOut</button>
		
		</form>
	</div>
	
	<div id="wrap" align="center">
		
		<a id="show_cart" href="javascript:void(0)">SẢN PHẨM MỚI</a>
		
		<ul>
			<li id="1">
            <?php
			$id="IP01";
			?>
				<img src="images/ANDROID_2.png" class="items" alt="" />
				
				<br clear="all" />
				<div>HTC Desire 530</div>
			</li>
			
			<li id="2">
				<img src="images/ANDROID_4.png" class="items" alt="" />
				
				<br clear="all" />
				<div>HTC Desire 626G+</div>
			</li>
			
			<li id="3">
				<img src="images/ANDROID_5.png" class="items" alt="" />
				
				<br clear="all" />
				<div>HTC Desire 628</div>
			</li>
			<li id="4">
				<img src="images/ANDROID_8.png" class="items" alt="" />
				
				<br clear="all" />
				<div>HTC Desire</div>
			</li>
			
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-1">
			
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/ANDROID_2.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'> Thông tin sản phẩm</label>
					<br clear="all" />
					
					<p>
					Điện thoại HTC desire 530 chính thức ra mắt dỏng sản phẩm mới với nhiều tính năng hấp dẫn. Chiếc điện thoại giải trí với màn hình cảm ứng: Super LCD  5.2”, Full HD. hệ điều hành: Android 6.0. Camera trước và sau: 16MP. CPU: Helio P10 8 nhân 64-bit. Ram: 3GB. Bộ nhớ trong 32GB. Ngoài ra còn hỗ trợ thẻ nhớ MicroSD. Hỗ trợ tối đa: 2 TB củng với sim 2 Nano SIM. Hỗ trợ 4G và dung lượng pin tới 2500 mAh.
			
						<br clear="all" /><br clear="all" />
						<b>$<span class="price" style="color: #D72B2D">8.990.000đ</span></b>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button" onclick="self.location.href='giohang.php?ac=add'">Thêm vào giỏ hàng</button>
					
				</div>
				
				
			</div>
			<div class="detail-view" id="detail-2">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/ANDROID_4.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm</label>
					<br clear="all" />
					
					<p>
						Điện thoại HTC Desire 626G + đi kèm với màn hình cảm ứng: 5 inch 720p. CPU octa 1.7 GHz. RAM 1 GB. Bộ nhớ trong 8 GB (có thể mở rộng qua microSD). Camera Sau: 13 MP. Camera Trước: 5 MP. Pin 2000 mAh. Điện thoại có hỗ trợ: 2 SIM. Hỗ trợ thẻ nhé lên đến 128 GB
					
						<br clear="all" /><br clear="all" />
						<b>$<span class="price" style="color: #D72B2D">2.190.000đ</span></b>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm vào giỏ hàng</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-3">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/ANDROID_5.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm</label>
					<br clear="all" />
					

					<p>
						Điện thoại HTC Desire 628 đi kèm với màn hình cảm ứng: 5 inch 720x1280px. Hệ Điều Hành: Android 5.1 (Lollipop). CPU: MTK6753 8 nhân 64-bit. RAM 3 GB. Bộ nhớ trong 32 GB. Camera Sau: 13 MP. Camera Trước: 5 MP. Pin 2200 mAh. Điện thoại có hỗ trợ: 2 NANO SIM. Thẻ nhớ tối đa 32 GB.
					
						<br clear="all" /><br clear="all" />
						<b>$<span class="price" style="color: #D72B2D">5.390.000đ</span></b>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm vào giỏ hàng</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-4">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/ANDROID_8.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm</label>
					<br clear="all" />
					
					<p>
						Điện thoại Desire đi kèm với màn hình cảm ứng: 5,5 inch 720x1280px. Hệ Điều Hành: Android 4.4 (KitKat). CPU: adreno 305. RAM: 1,5GB. Bộ nhớ trong: 8GB. Camera Sau: 13 MP. Camara Trước: 2 MP. Pin 2200 mAh. Điện thoại có hỗ trợ: 2 NANO SIM. Hỗ trợ thẻ nhớ: MicroSD, hỗ trợ tới đa 32 GB.
						<br clear="all" /><br clear="all" />
					<b>$<span class="price" style="color: #D72B2D">2.150.000đ</span></b>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm Giỏ hàng</button>
					
				</div>
				
			</div>
			
			<!---->
			
			<li id="5">
				<img src="images/ANDROID_11.png" class="items" alt="" />
				
				<br clear="all" />
				<div>Samsung Galaxy J2</div>
			</li>
			
			<li id="6">
				<img src="images/ANDROID_13.png" class="items" alt="" />
				
				<br clear="all" />
				<div>Samsung Galaxy A5</div>
			</li>
			
			<li id="7">
				<img src="images/ANDROID_14.png" class="items" alt="" />
				
				<br clear="all" />
				<div>Samsung Galaxy A9 Pro</div>
			</li>
			<li id="8">
				<img src="images/ANDROID_15.png" class="items" alt="" />
				
				<br clear="all" />
				<div>Samsung Galaxy J1</div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-5">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/ANDROID_11.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thong tin sản phẩm </label>
					<br clear="all" />
					
					<p>
						Điện thoại Samsung galaxy j2 đi kèm với màn hình cảm ứng: PLS TFT LCD, 5", qHD. Hệ Điều Hành: Android 5.1 (Lollipop). CPU: MT6737 4 nhân. RAM: 1,5GB. Bộ nhớ trong: 8GB. Camera Sau 5 MP, Camera Trước: 2MP. Pin 2000 mAh. Điện thoại có hỗ trợ: 2 Micro SIM, Hỗ trợ 4G. Hỗ trợ thẻ nhớ: MicroSD tối đa 32 GB.
						<br clear="all" /><br clear="all" />
						<b>$<span class="price" style="color: #D72B2D">2.210.000đ</span></b>
						
					</p>
					
					<br clear="all" /> 
					
					<button  class="add-to-cart-button">Thêm vào giỏ hàng </button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-6">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/ANDROID_13.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm </label>
					<br clear="all" />
					
					<p>
						Điện thoại Samsung galaxy A5 đi kèm với màn hình cảm ứng: Super AMOLED, 5.2", Full HD. Hệ Điều Hành: Android 6.0 (Marshmallow). CPU: Exynos 7880 8 nhân 64-bit. RAM: 3GB. Bộ nhớ trong:  32GB. Camera Trước và Sau: 16 MP. Pin 3000 mAh. Điện thoại có hỗ trợ: 2 Nano SIM, Hỗ trợ 4G. Hỗ trợ thẻ nhớ: MicroSD tối đa: 256GB.
					
						<br clear="all" /><br clear="all" />
						$<span class="price" style="color: #D72B2D">7.990.000đ</span>
						
					</p>
					
					<br clear="all" />
					
					<b><button  class="add-to-cart-button">Thêm vào giỏ hàng</button></b>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-7">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/ANDROID_14.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm</label>
					<br clear="all" />
					
					<p>
						Điện thoại Samsung galaxy A9 pro đi kèm với màn hình cảm ứng: Super AMOLED, 6", Full HD. Hệ Điều Hành: Android 6.0 (Marshmallow). CPU: Qualcomm Snapdragon 652 8 nhân.  RAM: 4GB. Bộ nhớ trong 32GB. Camera Sau: 16 MP. Camera Trước: 8 MP. Pin 5000 mAh, có sạc nhanh. Điện thoại có hỗ trợ 2 NANO SIM, Hỗ trợ 4G. Hỗ trợ thẻ nhớ: MicroSD tối đa 256GB.
					
					
						<br clear="all" /><br clear="all" />
							$<span class="price" style="color: #D72B2D">6.990.000đ</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm vào giỏ hàng</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-8">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/ANDROID_15.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm</label>
					<br clear="all" />
					
					<p>
						Điện thoại Samsung galaxy J1 đi kèm với màn hình cảm ứng: Super AMOLED, 4.5", WVGA. Hệ Điều Hành: Android 5.1 (Lollipop). CPU: Spreadtrum SC7731 4 nhân 32-bit. RAM: 1GB. Bộ nhớ trong: 8GB. Camera Sau: 5 MP. Camera Trước: 2MP. Pin: 2050 mAh. Điện thoại có hỗ trợ: 2 Micro SIM, hỗ trợ thẻ nhớ: MicroSD tối đa 128GB.
					
						<br clear="all" /><br clear="all" />
						$<span class="price" style="color: #D72B2D">1.990.000đ</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm vào giỏ hàng </button>
					
				</div>
				
			</div>
			
			<!---->
			
			<li id="9">
				<img src="images/IPHONE_2.png" class="items" alt="" />
				
				<br clear="all" />
				<div><span class="name"></span><span class="price"></span>Iphone 7S</div>
			</li>
			
			<li id="10">
				<img src="images/IPHONE_3.png" class="items" alt="" />
				
				<br clear="all" />
				<div><span class="name">Iphone 6S 32GB </span> </div>
			</li>
			
			<li id="11">
				<img src="images/IPHONE_4.png" class="items" alt="" />
				
				<br clear="all" />
				<div>Iphone SE</div>
			</li>
			
			<li id="12">
				<img src="images/IPHONE_1.png" class="items" alt="" />
				
				<br clear="all" />
				<div><span class="name">Iphone 5</span></div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-9">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/IPHONE_2.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm </label>
					<br clear="all" />
					
					<p>
						Điện thoại iphone 7S đi kèm với màn hình cảm ứng: LED-backlit IPS LCD, 5.5", Retina HD. Hệ Điều Hành: iOS 10. CPU: 	Apple A10 Fusion 4 nhân 64-bit, RAM: 3GB. Bộ nhớ trong: 32GB. Camera Sau: 12 MP. Camera Trước: 7 MP. Pin: 1960 mAh. Điện thoại có hỗ trợ: 1 Nano SIM, Hỗ trợ 4G. Hỗ trợ thẻ nhớ: tối đa 256GB.
					
						<br clear="all" /><br clear="all" />
							$<span class="price" style="color: #D72B2D">19.900.000đ</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">thêm vào giỏ hàng</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-10">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/IPHONE_3.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm</label>
					<br clear="all" />
					
					<p>
						Điện thoại iphone 6S 32GB đi kèm với màn hình cảm ứng: LED-backlit IPS LCD, 4.7", Retina HD. Hệ Điều Hành: iOS 10. CPU: Apple A9 2 nhân 64-bit. RAM: 2GB. Bộ nhớ trong: 32GB. Camera Sau: 12 Mp. Camera Trước: 5 Mp. Pin: 1715 mAh.Điện thoại có hỗ trợ: 1 Nano SIM. Hỗ trợ thẻ nhớ: tối đa 128GB.
					
					
						<br clear="all" /><br clear="all" />
						$<span class="price" style="color: #D72B2D">13.000.000đ</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm vào giỏ hàng</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-11">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/IPHONE_4.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>thông tin sản phẩm</label>
					<br clear="all" />
					
					<p>
						Điện thoại iphone SE đi kèm với màn hình cảm ứng: IPS LCD, 4", Retina. Hệ Điều Hành: iOS 9. CPU: Apple A9 2 nhân 64-bit. RAM: 2GB. Bộ nhớ trong: 16GB. Camera Sau: 12 MP. Camera Trước: 1.2Mp. Pin: 1642 mAh. Điện thoại có hỗ trợ: 1 Nano SIM. Hỗ trợ thẻ nhớ: tối đa 128GB.
						<br clear="all" /><br clear="all" />
									$<span class="price" style="color: #D72B2D">6.400.000đ</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">thêm vào giỏ hàng</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-12">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/IPHONE_1.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm</label>
					<br clear="all" />
					
					<p>
						Điện thoại iphone 5 16GB đi kèm với màn hình cảm ứng: LED-backlit IPS LCD, 4", DVGA. Hệ Điều Hành: iOS 6. CPU: Apple A6 2 nhân 32-bit. RAM 1GB. Bộ nhớ trong 16GB. Camera Sau: 12 MP. Camera Trước: 1.2 MP. Pin: 1440 mAh. Điện thoại có hỗ trợ: 1 Nano SIM. Hỗ trợ thẻ nhớ tối đa: Chưa xác định.
					
						<br clear="all" /><br clear="all" />
						$<span class="price" style="color: #D72B2D">5.520.000đ</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm vào giỏ hàng</button>
					
				</div>
				
			</div>
			
			<!---->
			
			<li id="13">
				<img src="images/ipad-pro-97-inch-1-400x460.png" class="items" alt="" />
				
				<br clear="all" />
				<div><span class="name">Ipad pro </span>  </div>
			</li>
			
			<li id="14">
				<img src="images/vivo-v5-400x460-400x460.png" class="items" alt="" />
				
				<br clear="all" />
				<div><span class="name">Vivo V5 </span>  </div>
			</li>
			
			<li id="15">
				<img src="images/images.jpg" class="items" alt="" />
				
				<br clear="all" />
				<div><span class="name">Ipad 5</span>  </div>
			</li>
			
			<li id="16">
				<img src="images/IPHONE_8.png" class="items" alt="" />
				
				<br clear="all" />
				<div><span class="name">Samsung Galxy EXpress Prime 2</span>  </div>
			</li>
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-13">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/ipad-pro-97-inch-1-400x460.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm</label>
					<br clear="all" />
					
					<p>
						Điện thoại máy tính bảng ipad-pro đi kèm với màn hình cảm ứng: LED backlit LCD, 9.7". Hệ Điều Hành: iOS 10. CPU: Apple A9X 2 nhân 64-bit,2.16 GHz. RAM 2GB. Bộ nhớ trong 32GB. Camera Sau: 12 MP. Camenra Trước: 5MP. Trọng lượng: 437 g. Đàm thoại: FaceTime. Kết nối mạng: WiFi, Không hỗ trợ 3G, Không hỗ trợ 4G.
						<br clear="all" /><br clear="all" />
						$<span class="price" style="color: #D72B2D">11.900.000đ</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm Vào giỏ hàng</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-14">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/vivo-v5-400x460-400x460.png"class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm</label>
					<br clear="all" />
					
					<p>
						Điện thoại Vivo V5 đi kèm với màn hình cảm ứng: 5.5 inches(720 x 1280 pixels). Hệ Điều Hành: Android OS, v6.0 (Marshmallow). CPU: Octa-core 1.5GHz. RAM 4GB. Bộ nhớ trong 32GB. Camera Sau:	20.0 MP (f2.0) + Softlight Flash. Camera Trước:	13.0 MP (f2.2) + LED flash. Pin: Li-Ion 3000 mAh. Điện thoại có hỗ trợ: 2 SIM 2 SÓNG. Hỗ trợ thẻ nhớ tối đa: microSD, hỗ trợ lên đến 256GB.
					
						<br clear="all" /><br clear="all" />
					$<span class="price" style="color: #D72B2D">5.200.000đ</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm vào giỏ hàng</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-15">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/images.jpg" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm </label>
					<br clear="all" />
					
					<p>
						Điện thoại máy tính bảng ipad 5 đi kèm với màn hình cảm ứng: Retina công nghệ IPS, 9.7". Hệ Điều Hành: iOS 7. CPU:Apple A7, 1.3 GHz. RAM 1GB. Bộ nhớ trong 32GB. Camera Sau: 5 MP. Camenra Trước: 12 MP. Trọng lượng: 487 g. Hỗ trợ SIM: Nano Sim. Kết nối mạng: LTE(Bands 1, 2, 3, 4, 5, 7, 8, 13, 17, 18, 19, 20, 25, 26)
					
						<br clear="all" /><br clear="all" />
					$<span class="price" style="color: #D72B2D">8.890.000đ</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm vào giỏ hàng</button>
					
				</div>
				
			</div>
			<div class="detail-view" id="detail-16">
				
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img src="images/IPHONE_8.png" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'>Thông tin sản phẩm </label>
					<br clear="all" />
					
					<p>
					Điện thoại Samsung galaxy Express 2 đi kèm với màn hình cảm ứng: 4.5", qHD. Hệ Điều Hành: Android 4.2 (Jelly Bean). CPU: Qualcomm. RAM 1GB. Bộ nhớ trong 8GB. Camera Sau: 5 MP. Camera Trước: VGA (0.3 MP). Pin: 2100 mAh. Điện thoại có hỗ trợ: 1 Micro SIM.
					
						<br clear="all" /><br clear="all" />
							<b>$<span class="price" style="color: #D72B2D">1.290.000đ</span></b>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button">Thêm vào giỏ hàng</button>
					
				</div>
				
			</div>
			
			<br clear="all" />
		</ul>
		<br clear="all" />
	</div>
	
		
</div>

		    </div>
		    </div>
		    	<div class="content-sidebar">
		    	<h4>Thể loại</h4>
						<ul>
					
							<li><a href="Categori.php">Samsung Galaxy Note 8</a></li>
							<li><a href="Categori_1.php">Samsung Galaxy J7 Pro</a></li>
							<li><a href="Categori_2.php">Vivo V7+</a></li>
							<li><a href="Categori_3.php">Vivo Y69</a></li>
							<li><a href="Categori_4.php">Mobiista Zumbo S2 Dual</a></li>
							<li><a href="Categori_5.php">Mobiistar Prime X1</a></li>
							<li><a href="Categori_6.php">OPPO F3 Plus</a></li>
							<li><a href="Categori_7.php">OPPO F3 Lite (Ạ57) </a></li>
							<li><a href="Categori_8.php">Iphone 6s 32GB </a></li>
							<li><a href="Categori_9.php">Iphone 7 Plus 32GB</a></li>
							<li><a href="Categori_10.php">LG G6 Pro</a></li>
							<li><a href="Categori_11.php">LG Q8</a></li>
							<li><a href="Categori_12.php">Nokia 6</a></li>
							<li><a href="Categori_13.php">Ipad Wifi 32GB</a></li>
							
							
						</ul>
		    	</div>
		    </div>
		    <div class="clear"> </div>
		    </div>
		<div class="footer">
			<div class="wrap">
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Thông Tin của Chúng tôi</h3>
					<p>Siêu thị điện thoại Mobilestore vận hành chuỗi bán lẻ các dòng sản phẩm điện thoại Smartphone và Iphone. trong những năm qua, siêu thị đã liên tục phát triển nhanh và ổn định bất chấp tình hình kinh tế thuận lợi hay khó khăn.</p>
					<p>Siêu thị điện thoại Mobilestore được thành lập từ 2010 chuyên bán lẻ các sản phẩm kỹ thuật số di động bao gồm điện thoại di động, máy tính bảng, laptop và phụ kiện với hơn 2 siêu thị tại Việt Nam.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Tin Mới Nhất</h3>
					<p>HMD giới thiệu Android 8.0 Oreo Beta cho Nokia 8.</p>
					<p>Microsoft vừa phát hành Windown 10 Fall creators Update cho điện thoại.</p>
					<p>Microsoft sẽ hỗ trợ Windown 10 Mobile đến hết 12/2020.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Vị Trí Cửa Hàng</h3>
					<p> 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh.</p>
					<h3>Gọi Mua Hàng</h3>
					<p>1800.1060 (7:30-22:00)</p>
					<h3>Gọi Bảo hành</h3>
					<p>1800.1062 (8:00-21:00)</p>
					<h3>Gọi Khiếu Nại</h3>
					<p>1800.1064 (8:00-21:30)</p>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Tin Tức-Thư</h3>
					<input type="text"><input type="submit" value="go" />
					<h3>Fallow Us:</h3>
					 <ul>
					 	<li><a href="#"><img src="images/twitter.png" title="twitter" />Twitter</a></li>
					 	<li><a href="#"><img src="images/facebook.png" title="Facebook" />Facebook</a></li>
					 	<li><a href="#"><img src="images/rss.png" title="Rss" />Rss</a></li>
					 </ul>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>

