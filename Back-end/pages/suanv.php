<?php
include "config.php";
include "autoload.php";
$ob = new Nhanvien();
$obj = new Nhanvien();
$ma = $_GET["ma"];
if(isset($_POST['sm']))
{
	$ten = $_POST["ten"];
	$us = $_POST["us"];
	$mk = md5($_POST["mk"]);
	$ns = $_POST["ns"];
	$gt = $_POST["gt"];
	$qtc = $_POST["qtc"];
	$dc = $_POST["dc"];
	$sdt = $_POST["sdt"];
	$data = $ob->update($ma, $ten ,$us, $mk, $ns, $gt, $qtc, $dc, $sdt);
	header("location:themnv.php");
}
$o2 = $obj->getOne($ma);
?>
<body background="image/bg.jpg">
<fieldset  style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend style="color:#7200eb" align="center">Nhập thông tin nhân viên cần sửa</legend>
<form method="post" action="">
<table  align="center">

	<?php
	foreach ($o2 as $v) {
		?>
 <tr><td>Mã nhân viên : </td><td><input type="text" disabled name="ma" 
		value="<?php echo $v["MaNV"];?>" />
		</td></tr>
  <tr><td>Tên nhân viên : </td><td><input type="text" name="ten" maxlength="50" required value="<?php echo $v["TenNV"];?>" /></td></tr>
  <tr><td>User Name : </td><td><input type="text" name="us" maxlength="50" required value="<?php echo $v["UserName"];?>" /></td></tr>
  <tr><td>Mật khẩu : </td><td><input type="password" name="mk" maxlength="32" required value="<?php echo $v["MatKhau"];?>" /></td></tr>
  <tr><td>Ngày sinh : </td><td><input type="date" name="ns" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" value="<?php echo $v["NgaySinh"];?>" /></td></tr>
  <tr><td>Giới tính :</td><td><input type="radio" name="gt" value="1" <?php 
							if($v["GioiTinh"]=="1")
								echo 'checked="checked"';
							?>>Nam
                                <input type="radio" name="gt" value="0" <?php 
							if($v["GioiTinh"]=="0")
								echo 'checked="checked"';
							?>>Nữ</td></tr>
  <tr><td>Quyền truy cập : </td><td><input type="text" name="qtc" maxlength="30" required value="<?php echo $v["QuyenTruyCap"];?>" /></td></tr>
  <tr><td>Địa chỉ : </td><td><input type="text" name="dc" maxlength="70" required value="<?php echo $v["DiaChi"];?>" /></td></tr>
  <tr><td>SĐT : </td><td><input type="number" name="sdt" required value="<?php echo $v["SDT"];?>" /></td></tr>
 <?php
} ?>
 <tr align="right"><td><input type="submit" name="sm" value="Cập Nhật" /></td></tr>
 </table>
</form>
</fieldset>
</body>
