<?php
include "config.php";
include "autoload.php";
$o2 = new Binhluan();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm Bình Luận</title>
</head>

<body>

<fieldset>
<legend>Nhập thông tin cần tìm</legend>
<form action=timbl.php method="get">
<table  align="center">
Nhập ID bình luận : <input type="text" name="ts" />
<input type="submit" name="search" value="Tìm" />
</table>
</form>
</fieldset>

<?php
if (!isset($_GET["search"]))
{
    $data = $o2->getAll();
}
else
{
    $data = $o2->search($_GET["ts"]);
}

?>
<table border="1"><tr><td>ID</td><td>Mã Khách Hàng</td><td>Mã Dòng Điện Thoại</td><td>Nội Dung</td><td>Thời Gian Bình Luận</td><td>Thao tác</td></tr>
<?php
foreach($data as $r)
{ ?>
    <tr><td> <?php echo $r["ID"]; ?></td>
    <td><?php echo $r["MaKH"]; ?></td>
    <td><?php echo $r["MaDongDT"]; ?></td>
    <td><?php echo $r["NoiDung"]; ?></td>
    <td><?php echo $r["NgayBL"]; ?></td>
    <td>
    <a href="xoabl.php?id=<?php echo $r["ID"];?>">Xóa</a>
    </td></tr>
    
	<?php
}
?>
</table>
</body>
</html>