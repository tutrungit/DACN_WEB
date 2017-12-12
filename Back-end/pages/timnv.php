<?php
include "config.php";
include "autoload.php";
$obj = new Nhanvien();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm nhân viên</title>
</head>

<body background="image/bg.jpg">

<fieldset  style="border-color:#e5101d; color:#7200eb; border-radius:60px">
<legend style="color:#7200eb" align="center">Nhập thông tin nhân viên cần tìm</legend>
<form action="timnv.php" method="get">
<table  align="center">
<p align="center">Nhập tên nhân viên : <input type="text" autofocus name="ts" />
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
<table border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã nhân viên</td><td>Tên nhân viên</td><td>User Name</td><td>Mật khẩu</td><td>Ngày sinh</td><td>Giới tính</td><td>Quyền truy cập</td><td>Địa chỉ</td><td>SĐT</td><td>Thao tác</td></tr>
    <?php
    foreach($data as $r)
    {
        ?>
        <tr align="center"><td> <?php echo $r["MaNV"]; ?></td>
        <td><?php echo $r["TenNV"]; ?></td>
        <td><?php echo $r["UserName"]; ?></td>
        <td><?php echo $r["MatKhau"]; ?></td>
        <td><?php echo $r["NgaySinh"]; ?></td>
        <td><?php echo $r["GioiTinh"]; ?></td>
        <td><?php echo $r["QuyenTruyCap"]; ?></td>
        <td><?php echo $r["DiaChi"]; ?></td>
        <td><?php echo $r["SDT"]; ?></td>
        <td>
        <a href="xoanv.php?ma=<?php echo $r["MaNV"]; ?>">Xóa</a> &nbsp;
        <a href="suanv.php?ma=<?php echo $r["MaNV"]; ?>">Sửa</a>
        </td></tr>
        <?php   
    }
    ?>
</table>
</body>
</html>