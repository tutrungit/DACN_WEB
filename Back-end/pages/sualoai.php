<?php
include "config.php";
include "autoload.php";
$ob = new Loaidt();
$obj = new Loaidt();
$ma = $_GET["ma"];
if(isset($_POST['sm']))
{
	$ma2 = $_POST["ma"];
	$ten = $_POST["ten"];
	$data = $ob->update($ma, $ten);
	header("location:themloaidt.php");
}
$o2 = $obj->getOne($ma);

?>
<body background="image/bg.jpg">
<fieldset  style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend style="color:#7200eb" align="center">Nhập thông tin loại điện thoại cần thêm</legend>
<form method="post" action="">
<table  align="center">

	<?php
	foreach ($o2 as $v) {
		?>
<tr><td>Mã loại điện thoại: </td><td><input type="text" disabled name="ma" 
		value="<?php echo $v["MaLoai"];?>" />
		</td></tr>
 <tr><td>Tên loại điện thoại: </td><td><input type="text" name="ten" maxlength="50" required value="<?php echo $v["TenLoai"];?>" /></td></tr>
 <?php
} ?>
 <tr align="right"><td><input type="submit" name="sm" value="Update" /></td></tr>
 </table>
</form>
</fieldset>
</body>
