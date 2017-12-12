<?php
include "config.php";
include "autoload.php";
$ob = new Khachhang();
$obj = new Khachhang();
$ma = $_GET["ma"];
if(isset($_POST['sm']))
{
	$ten = $_POST["ten"];
	$em = $_POST["em"];
	$mk = md5($_POST["mk"]);
	$ns = $_POST["ns"];
	$dc = $_POST["dc"];
	$sdt = $_POST["sdt"];
	$data = $ob->update($ma, $ten ,$em, $mk, $ns, $dc, $sdt);
	header("location:themkh.php");
}
$o2 = $obj->getOne($ma); 
?>
<body background="image/bg.jpg">
<fieldset style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend style="color:#7200eb" align="center">Nhập thông tin khách hàng cần sửa</legend>
<form method="post" action="">
<table  align="center">

	<?php
	foreach ($o2 as $v) {
		?>
<tr><td>Mã khách hàng : </td><td><input type="text" disabled name="ma" 
		value="<?php echo $v["MaKH"];?>" />
		</td></tr>
 <tr><td>Tên khách hàng : </td><td><input type="text" name="ten" maxlength="50" required value="<?php echo $v["TenKH"];?>" /></td></tr>
 <tr><td>Email : </td><td><input type="email" maxlength="50" required name="em" value="<?php echo $v["Email"];?>" /></td></tr>
 <tr><td>Mật khẩu : </td><td><input type="password" maxlength="23" required name="mk" value="<?php echo $v["MatKhau"];?>" /></td></tr>
 <tr><td>Ngày sinh : </td><td><input type="date" name="ns" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" value="<?php echo $v["NgaySinh"];?>" /></td></tr>
 <tr><td>Địa chỉ : </td><td><input type="text" name="dc" required value="<?php echo $v["DiaChi"];?>" /></td></tr>
 <tr><td>SĐT : </td><td><input type="number" required name="sdt" value="<?php echo $v["SDT"];?>" /></td></tr>
 <?php
} ?>
 <tr align="center"><td><input type="submit" name="sm" value="Update" /></td></tr>
 </table>
</form>
</fieldset>
</body>
