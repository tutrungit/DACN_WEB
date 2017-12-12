<?php
include "config.php";
include "autoload.php";
$ob = new Dongdt();
$obj = new Dongdt();
$o1 = new Nhacc();
$o3 = new Loaidt();
$o4 = new Hangsx();
$ma = $_GET["ma"];
if(isset($_POST['sm']))
{
	$ml = $_POST["ml"];
	$mh = $_POST["mh"];
	$mancc = $_POST["mancc"];
	$ten = $_POST["ten"];
	$hinh = $_FILES["hinh"]["name"];
	$dg = $_POST["dg"];
	$km = $_POST["km"];
	$data = $ob->update($ma, $ml, $mh, $mancc, $ten, $hinh, $dg, $km);
	header("location:themdongdt.php");
}
$o2 = $obj->getOne($ma);
$a= $o1->getAll();
$b= $o3->getAll();
$c= $o4->getAll();
?>
<body background="image/bg.jpg">
<fieldset  style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend style="color:#7200eb" align="center">Nhập thông tin dòng điện thoại cần sửa</legend>
<form method="post" action="" enctype="multipart/form-data">
<table  align="center">

	<?php
	foreach ($o2 as $v) {
		?>
<tr ><td>Mã dòng điện thoại: </td><td><input type="text" name="md" disabled 
		value="<?php echo $v["MaDongDT"];?>" />
		</td></tr>
<tr><td>Mã loại: </td><td><select name="ml" >
                            <?php
                                foreach($b as $x)
                                { ?>
                                    <option value="<?php echo $x["MaLoai"]; ?>" 
                                    	<?php
										if($x["MaLoai"]==$v["MaLoai"])
											echo "selected"; ?>
                                    	><?php echo $x["MaLoai"]; ?></option>
                                    <?php
                                } ?>
                                </select></td></tr>
<tr><td>Mã hãng sản xuất: </td><td><select name="mh" >
                            <?php
                                foreach($c as $x)
                                { ?>
                                    <option value="<?php echo $x["MaHangSX"]; ?>"
                                    <?php 
										if($x["MaHangSX"]==$v["MaHangSX"])
											echo "selected"; ?>
                                    	><?php echo $x["MaHangSX"]; ?></option>
                                    <?php
                                } ?>
                                </select></td></tr>
<tr><td>Mã nhà cung cấp:</td><td><select name="mancc" >
                            <?php
                                foreach($a as $x)
                                { ?>
                                    <option value="<?php echo $x["MaNCC"]; ?>" 
                                    	<?php
										if($x["MaNCC"]==$v["MaNCC"])
											echo "selected"; ?>
                                    	><?php echo $x["MaNCC"]; ?></option>
                                    <?php
                                } ?>
                                </select></td></tr>
<tr><td>Tên dòng điện thoại: </td><td><input type="text" name="ten" value="<?php echo $v["TenDongDT"];?>" /></td></tr>
<tr><td>Hình: </td><td><input type="file" name="hinh" value="<?php echo $v["Hinh"];?>" /></td></tr>
<tr><td>Đơn giá: </td><td><input type="text" name="dg" value="<?php echo $v["DonGia"];?>" /></td></tr>
<tr><td>Giá khuyến mãi: </td><td><input type="text" name="km" value="<?php echo $v["GiaKM"];?>" /></td></tr>
 <?php
} ?>
 <tr align="right"><td><input  type="submit" name="sm" value="Cập Nhật" /></td></tr>
</table>
</form>
</fieldset>
</body>
