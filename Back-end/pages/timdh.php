<?php
include "config.php";
include "autoload.php";
$obj = new Dh();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm đơn hàng</title>
</head>

<body  background="image/bg.jpg">

<fieldset  style="border-color:#e5101d; color:#7200eb; border-radius:60px">
<legend style="color:#7200eb" align="center">Nhập thông tin đơn hàng cần tìm</legend>
<form action="timdh.php" method="get">
<table  align="center">
<p align="center">Nhập mã đơn hàng : <input type="text" name="ts" />
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
<table border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã Đơn Hàng</td><td>Mã Nhân Viên</td><td>Mã Khách Hàng</td><td>Tên Khách Hàng</td><td>Số Điện Thoại</td><td>Ngày lập</td><td>Ngày Hẹn Nhận</td><td>Tổng Thành Tiền</td><td>Trạng Thái</td><td>Thao tác</td></tr>
    <?php
    foreach($data as $r)
    {
        ?>
        <tr align="center"><td> <?php echo $r["MaDH"]; ?></td>
        <td><?php echo $r["MaNV"]; ?></td>
        <td><?php echo $r["MaKH"]; ?></td>
        <td><?php echo $r["TenKH"]; ?></td>
        <td><?php echo $r["SDT"]; ?></td>
        <td><?php echo $r["NgayLapDH"]; ?></td>
        <td><?php echo $r["NgayHenNhan"]; ?></td>
        <td><?php echo $r["TongThanhTien"]; ?></td>
        <td><?php echo $r["TrangThai"]; ?></td>
        <td>
        <a href="xoadh.php?ma=<?php echo $r["MaDH"]; ?>">Xóa</a> &nbsp;
        <a href="suadh.php?ma=<?php echo $r["MaDH"]; ?>">Sửa</a>
        </td></tr>
        <?php   
    }
    ?>
</table>
</body>
</html>