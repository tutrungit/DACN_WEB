<?php
include "config.php";
include "autoload.php";
$ob = new Hangsx();
$obj = new Hangsx();
$ma = $_GET["ma"];
if(isset($_POST['sm']))
{
	$ma2 = $_POST["ma"];
	$ten = $_POST["ten"];
	$data = $ob->update($ma, $ten);
	header("location:themhangsx.php");
}
$o2 = $obj->getOne($ma);
?>
<fieldset>
<legend>Nhập thông tin hãng sản xuất cần sửa</legend>
<form action="" method="post">
<table  align="center">
	<?php
	foreach ($o2 as $v) {
		?>
<tr><td>Mã hãng sản xuất: </td><td><input type="text" disabled name="ma" 
		value="<?php echo $v["MaHangSX"];?>" />
		</td></tr>
 <tr><td>Tên hãng sản xuất: </td><td><input type="text" name="ten" required maxlength="50" value="<?php echo $v["TenHangSX"];?>" /></td></tr>
 <?php
} ?>
 <tr><td><input type="submit" name="sm" value="Cập Nhật" /></td></tr>
</table> 
</form>
</fieldset>
