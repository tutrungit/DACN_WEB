<?php
include "config.php";
include "autoload.php";
$ob = new Dh();
$obj = new Dh();
$o1 = new Nhanvien();
$o3= new Khachhang();

$ma = $_GET["ma"];
if(isset($_POST['sm']))
{
	$manv = $_POST["manv"];
	$makh = $_POST["makh"];
	$tenkh = $_POST["tenkh"];
	$sdt = $_POST["sdt"];
	$nl = $_POST["nl"];
	$nh = $_POST["nh"];
	$ttt = $_POST["ttt"];
	$tt = $_POST["tt"];
	$data = $ob->update($ma, $manv, $makh, $tenkh, $sdt, $nl, $nh, $ttt, $tt);
	header("location:themdh.php");
}
$a = $o1->getAll();
$b = $o3->getAll();
$o2 = $obj->getOne($ma); 
?>
<body background="image/bg.jpg">
<fieldset style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend  style="color:#7200eb" align="center">Nhập thông tin đơn hàng cần sửa</legend>
<form method="post" action="">
<table  align="center">
	<?php
	foreach ($o2 as $v) {
		?>
<tr><td>Mã Đơn Hàng : </td><td><input type="text" disabled name="ma" 
		value="<?php echo $v["MaDH"];?>" />
		</td></tr>
 <tr><td>Mã Nhân Viên: </td><td><select name="manv" >
                            <?php
                                foreach($a as $x)
                                { ?>
                                    <option value="<?php echo $x["MaNV"]; ?>" 
                                    	<?php
										if($x["MaNV"]==$v["MaNV"])
											echo "selected"; ?>
                                    	><?php echo $x["MaNV"]; ?></option>
                                    <?php
                                } ?>
                                </select></td></tr>
 <tr><td>Mã Khách Hàng : </td><td><select name="makh" >
                            <?php
                                foreach($b as $x)
                                { ?>
                                    <option value="<?php echo $x["MaKH"]; ?>" 
                                    	<?php
										if($x["MaKH"]==$v["MaKH"])
											echo "selected"; ?>
                                    	><?php echo $x["MaKH"]; ?></option>
                                    <?php
                                } ?>
                                </select></td></tr>
 <tr><td>Tên Khách Hàng : </td><td><input type="text" name="tenkh" maxlength="50" required value="<?php echo $v["TenKH"];?>" /></td></tr>
 <tr><td>Số Điện Thoại : </td><td><input type="number" name="sdt" value="<?php echo $v["SDT"];?>" /></td></tr>
 <tr><td>Ngày Lập : </td><td><input type="date" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" name="nl" value="<?php echo $v["NgayLapDH"];?>" /></td></tr>
 <tr><td>Ngày Hẹn Nhận : </td><td><input type="date" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" name="nh" value="<?php echo $v["NgayHenNhan"];?>" /></td></tr>
 <tr><td>Tổng Thành Tiền : </td><td><input type="number" required step="0.001" name="ttt" value="<?php echo $v["TongThanhTien"];?>" /></td></tr>
 <tr><td>Trạng Thái : </td><td><input type="text" name="tt" required maxlength="15" value="<?php echo $v["TrangThai"];?>" /></td></tr>
 <?php
} ?>
 <tr align="right"><td><input type="submit" name="sm" value="Cập Nhật" /></td></tr>
 </table>
</form>
</fieldset>
</body>