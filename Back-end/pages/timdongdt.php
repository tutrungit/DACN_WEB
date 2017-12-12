<?php
include "config.php";
include "autoload.php";
$obj = new Dongdt();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm dòng điện thoại</title>
</head>

<body  background="image/bg.jpg">

<fieldset  style="border-color:#e5101d; color:#7200eb; border-radius:60px">
<legend style="color:#7200eb" align="center">Nhập thông tin dòng điện thoại cần tìm</legend>
<form action="timdongdt.php" method="get">
<table align="center">
<p align="center">Nhập tên dòng điện thoại : <input type="text" name="ts" />
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
<table border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã dòng DT</td><td>Mã loại</td><td>Mã hãng SX</td><td>Mã NCC</td><td>Tên dòng DT</td><td>Hình ảnh</td><td>Đơn giá</td><td>Giá KM</td><td>Thao tác</td></tr>
    <?php
    foreach($data as $r)
    {
        ?>
        <tr align="center"><td><?php echo $r["MaDongDT"];?></td>
        <td><?php echo $r["MaLoai"];?></td>
        <td><?php echo $r["MaHangSX"];?></td>
        <td><?php echo $r["MaNCC"];?></td>
        <td><?php echo $r["TenDongDT"];?></td>
        <td><img src="image/<?php echo $r["Hinh"]; ?>"/></td>
        <td><?php echo $r["DonGia"];?></td>
        <td><?php echo $r["GiaKM"];?></td>
        <td>
            <a href="xoadongdt.php?ma=<?php echo $r["MaDongDT"]; ?>">Xóa</a> &nbsp;
            <a href="suadongdt.php?ma=<?php echo $r["MaDongDT"]; ?>">Sửa</a>
        </td></tr>
        <?php   
    }
    ?>
</table>
</body>
</html>