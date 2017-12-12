<?php
include "config.php";
include "autoload.php";
$obj = new Hangsx();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm hãng sản xuất</title>
</head>

<body>

<fieldset>
<legend>Nhập thông tin hãng sản xuất cần tìm</legend>
<form action="timhsx.php" method="get">
<table  align="center">
Nhập tên hãng sản xuất : <input type="text" name="ts" />
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
	echo "Các hãng sản xuất có chứa từ khóa ". $_GET["ts"];
    $data = $obj->search($_GET["ts"]);
}
?>
<table border="1">
	<?php
	foreach($data as $r)
	{
		?>
        <tr><td><?php echo $r["MaHangSX"];?></td>
        <td><?php echo $r["TenHangSX"];?></td>
        <td>
		    <a href="xoahsx.php?ma=<?php echo $r["MaHangSX"];?>">Xóa</a> &nbsp;
		    <a href="suahsx.php?ma=<?php echo $r["MaHangSX"];?>">Sửa</a>
		</td></tr>
        <?php	
	}
	?>
</table>
</body>
</html>