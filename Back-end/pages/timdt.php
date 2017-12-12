<?php
include "config.php";
include "autoload.php";
$obj = new Dt();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm điện thoại</title>
</head>

<body  background="image/bg.jpg">

<fieldset  style="border-color:#e5101d; color:#7200eb; border-radius:60px">
<legend style="color:#7200eb" align="center">Nhập thông tin điện thoại cần tìm</legend>
<form action="timdt.php" method="get">
<table  align="center">
<p align="center"> Nhập Mã dòng điện thoại : <input type="text" name="ts" />
<input type="submit" name="search" value="Tìm" /></p>
</table>
</form>
</fieldset>

<?php
if (!isset($_GET["search"]))
{
    $data = $obj->getAll();
}
else
{
    $data = $obj->search($_GET["ts"]);
}
?>
<table border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã IMEI</td><td>Mã dòng điện thoại</td><td>Màu sắc</td><td>Thao tác</td></tr>
    <?php
    foreach($data as $r)
    {
        ?>
        <tr align="center"><td><?php echo $r["IMEI"];?></td>
        <td><?php echo $r["MaDongDT"];?></td>
        <td><?php echo $r["MauSac"];?></td>
        <td>
            <a href="xoadt.php?ma=<?php echo $r["IMEI"];?>">Xóa</a> &nbsp;
            <a href="suadt.php?ma=<?php echo $r["IMEI"];?>">Sửa</a>
        </td></tr>
        <?php   
    }
    ?>
</table>
</body>
</html>