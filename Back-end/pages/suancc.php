<?php
include "config.php";
include "autoload.php";
$ob = new Nhacc();
$obj = new Nhacc();
$ma = $_GET["ma"];
if(isset($_POST['sm']))
{
	$ten= $_POST['ten'];
    $sdt= $_POST['sdt'];
    $em= $_POST['em'];
    $fax= $_POST['fax'];
	$data = $obj->update($ma, $ten, $sdt, $em, $fax);
	header("location:themncc.php");
}
$o2 = $obj->getOne($ma);
?>
<fieldset>
<legend>Nhập thông tin nhà cung cấp cần sửa</legend>
<form method="post" action="">
<table  align="center">

	<?php
	foreach ($o2 as $v) {
		?>
<tr><td>Mã nhà cung cấp : </td><td><input type="text" disabled name="ma" 
		value="<?php echo $v["MaNCC"];?>" />
		</td></tr>
 <tr><td>Tên nhà cung cấp : </td><td><input type="text" maxlength="50" required name="ten" value="<?php echo $v["TenNCC"];?>" /></td></tr>
 <tr><td>SĐT : </td><td><input type="number" name="sdt" required value="<?php echo $v["SDT"];?>" /></td></tr>
 <tr><td>Email : </td><td><input type="email" name="em" required value="<?php echo $v["Email"];?>" /></td></tr>
 <tr><td>Fax : </td><td><input type="text" name="fax" maxlength="20" required value="<?php echo $v["Fax"];?>" /></td></tr>
 <?php
} ?>
 <tr><td><input type="submit" name="sm" value="Cập Nhật" /></td></tr>
 </table>
</form>
</fieldset>
