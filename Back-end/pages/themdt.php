<?php
include "config.php";
include "autoload.php";
$obj = new Dt();
$o1 = new Dongdt;
$o2 = new Dt();
if (isset($_POST["Submit"]))
{
	$ma= $_POST['ma'];
	$md= $_POST['md'];
    $ms= $_POST['ms'];
    if(strlen($ma)==15)
    {
	   $data = $obj->insert($ma,$md,$ms);
    }
    else
    {
        echo "<p style='color:red;'>Mã IMEI phải có độ dài là 15</p>";
    }
}
$r = $o1->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm điện thoại</title>
</head>

<body  background="image/bg.jpg">
<fieldset style="border-color:#e5101d; color:#7200eb; border-radius:60px">
<legend  style="color:#7200eb" align="center"><b>Nhập thông tin điện thoại cần thêm</b></legend>
<form action="themdt.php" method="post">
<table  align="center">
    <tr><td>Mã IMEI:</td><td><input type="number" name="ma" required></td></tr>
    <tr><td>Mã dòng điện thoại:</td><td><select name="md" >
                            <?php
                                foreach($r as $v)
                                { ?>
                                    <option value="<?php echo $v["MaDongDT"]; ?>"><?php echo $v["MaDongDT"]; ?></option>
                                    <?php
                                } ?>
                                </select>
    </td></tr>
    <tr><td>Màu sắc:</td><td><input type="text" name="ms" maxlength="15" required></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
</table>
</form>
</fieldset>
<?php
$data = $o2->getAll();
?>
<table border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã IMEI</td><td>Mã dòng điện thoại</td><td>Màu sắc</td><td>Thao tác</td></tr>
<?php
foreach($data as $r)
{ ?>
    <tr align="center"><td> <?php echo $r["IMEI"]; ?></td>
    <td><?php echo $r["MaDongDT"]; ?></td>
    <td><?php echo $r["MauSac"]; ?></td>
    <td>
    <a href="xoadt.php?ma=<?php echo $r["IMEI"]; ?>">Xóa</a> &nbsp;
    <a href="suadt.php?ma=<?php echo $r["IMEI"]; ?>">Sửa</a>
    </td></tr>
    
	<?php
}
?>
</table>
</body>
</html>