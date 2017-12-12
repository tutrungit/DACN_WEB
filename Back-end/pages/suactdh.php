<?php
include "config.php";
include "autoload.php";
$ob = new Ctdh();
$obj = new Ctdh();
$ob2 = new Ctdh();
$o1 = new Dt();
$ma = $_GET["ma"];
$imei = $_GET["imei"];
if(isset($_POST['sm']))
{
	$imei1 = $_POST["imei1"];
	$ten = $_POST["ten"];
	$ms = $_POST["ms"];
	$sl = $_POST["sl"];
	$dg = $_POST["dg"];
	$q = $ob2->getAll();
	foreach($q as $v)
    {
        if($v['IMEI']==$imei1)
        {
        	echo "<p style='color:red;'>Điện thoại này đã được bán! Vui lòng chọn điện thoại khác!</p>";
            ?>
            <a href="suactdh.php?ma=<?php echo $v["MaDH"]; ?>&imei=<?php echo $v["IMEI"]; ?>">Quay lại</a>
            <?php
            exit;
        }
        else
        {
            $data = $ob->update($ma, $imei1, $ten, $ms, $sl, $dg);
			header("location:themctdh.php");

        }
    }
	
}
$o2 = $obj->getOne($ma,$imei);
$a = $o1->getAll();
?>
<fieldset>
<legend>Nhập thông tin chi tiết đơn hàng cần sửa</legend>
<form action="" method="post">
<table  align="center">
	<?php
	foreach ($o2 as $v) {
		?>
<tr><td>Mã Đơn Hàng : </td><td><input type="text" disabled name="ma" 
		value="<?php echo $v["MaDH"];?>" />
		</td></tr>
 <tr><td>Mã IMEI : </td><td><select name="imei1" >
                            <?php
                                foreach($a as $x)
                                { ?>
                                    <option value="<?php echo $x["IMEI"]; ?>" 
                                    	<?php
										if($x["IMEI"]==$v["IMEI"])
											echo "selected"; ?>
                                    	><?php echo $x["IMEI"]; ?></option>
                                    <?php
                                } ?>
                                </select></td></tr>
 <tr><td>Tên Dòng Điện Thoại : </td><td><input type="text" name="ten" maxlength="50" required value="<?php echo $v["TenDongDT"];?>" /></td></tr>
<tr><td>Màu Sắc : </td><td><input type="text" name="ms" maxlength="15" required value="<?php echo $v["MauSac"];?>" /></td></tr>
<tr><td>Số Lượng : </td><td><input type="number" name="sl" required value="<?php echo $v["SoLuong"];?>" /></td></tr>
 <tr><td>Đơn Giá : </td><td><input type="number" name="dg" step="0.001" required value="<?php echo $v["DonGia"];?>" /></td></tr>
 <?php
}
?>
 <tr><td><input type="submit" name="sm" value="Cập Nhật" /></td></tr>
 </table>
</form>
</fieldset>
