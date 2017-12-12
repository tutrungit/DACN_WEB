<?php
include "config.php";
include "autoload.php";
$obj = new Loaidt();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm loại điện thoại</title>
</head>

<body background="image/bg.jpg">

<fieldset style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend  style="color:#7200eb" align="center">Nhập thông tin loại điện thoại cần tìm</legend>
<form action="timloai.php" method="get">
<table  align="center">
<p align="center">Nhập tên loại điện thoại : <input type="text" name="ts" />
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
<table border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã loại điện thoại</td><td>Tên loại điện thoại</td><td>Thao tác</td></tr>
    <?php
    foreach($data as $r)
    {
        ?>
        <tr align="center"><td> <?php echo $r["MaLoai"]; ?></td>
            <td><?php echo $r["TenLoai"]; ?></td>
            <td>
            <a href="xoaloai.php?ma=<?php echo $r["MaLoai"]; ?>">Xóa</a> &nbsp;
            <a href="sualoai.php?ma=<?php echo $r["MaLoai"]; ?>">Sửa</a>
            </td></tr>
        <?php   
    }
    ?>
</table>
</body>
</html>