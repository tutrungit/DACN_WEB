<?php
include "config.php";
include "autoload.php";
$ob = new Dt();
$obj = new Dt();
$o1 = new Dongdt();
$ma = $_GET["ma"];
if(isset($_POST['sm']))
{
	$md = $_POST["md"];
	$ms = $_POST["ms"];
	$data = $ob->update($ma, $md, $ms);
	header("location:themdt.php");
}
$o2 = $obj->getOne($ma);
$b = $o1->getAll();
?>
<body background="image/bg.jpg">
<fieldset style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend style="color:#7200eb" align="center">Nhập thông tin điện thoại cần sửa</legend>
<form method="post" action="">
<table  align="center">

	<?php
	foreach ($o2 as $v) {
		?>
		
<tr><td>Mã IMEI : </td><td><input type="text" name="ma" disabled="disabled"
		value="<?php echo $v["IMEI"];?>" />
		</td></tr>
<tr><td>Mã dòng điện thoại : </td><td><select name="md" >
                            <?php
                                foreach($b as $x)
                                { ?>
                                    <option value="<?php echo $x["MaDongDT"]; ?>" 
                                    	<?php
										if($x["MaDongDT"]==$v["MaDongDT"])
											echo "selected"; ?>
                                    	><?php echo $x["MaDongDT"]; ?></option>
                                    <?php
                                } ?>
                                </select></td></tr>
<tr><td>Màu Sắc : </td><td><input type="text" name="ms" maxlength="15" required value="<?php echo $v["MauSac"];?>" /></td></tr>
 <?php
} ?>
<tr align="center"><td><input type="submit" name="sm" value="Cập Nhật" /></td></tr>
</table>
</form>
</fieldset>
</body>
