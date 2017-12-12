<?php
include "config.php";
include "autoload.php";
$obj = new Ctdh();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm chi tiết đơn hàng</title>
</head>

<body>

<fieldset>
<legend>Nhập thông tin chi tiết đơn hàng cần tìm</legend>
<form action="timctdh.php" method="get">
<table  align="center">
Nhập Mã Đơn Hàng : <input type="text" name="ts" />
<input type="submit" name="search" value="Tìm" />
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
<table border="1"><tr><td>Mã Đơn Hàng</td><td>IMEI</td><td>Tên dòng điện thoại</td><td>Màu Sắc</td><td>Số Lượng</td><td>Đơn Giá</td><td>Thao Tác</td></tr>
    <?php
    foreach($data as $r)
    {
        ?>
         <tr><td><?php echo $r["MaDH"];?></td>
        <td><?php echo $r["IMEI"];?></td>
        <td><?php echo $r["TenDongDT"];?></td>
        <td><?php echo $r["MauSac"];?></td>
         <td><?php echo $r["SoLuong"];?></td>
          <td><?php echo $r["DonGia"];?></td>
        <td>
            <a href="xoactdh.php?ma=<?php echo $r["MaDH"]; ?>&imei=<?php echo $r["IMEI"]; ?>">Xóa</a> &nbsp;
            <a href="suactdh.php?ma=<?php echo $r["MaDH"]; ?>&imei=<?php echo $r["IMEI"]; ?>">Sửa</a>
        </td></tr>
        <?php   
    }
    ?>
</table>
</body>
</html>