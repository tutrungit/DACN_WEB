<?php
include "config.php";
include "autoload.php";
$obj = new Nhacc();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm nhà cung cấp</title>
</head>

<body>

<fieldset>
<legend>Nhập thông tin nhà cung cấp cần tìm</legend>
<form action="timncc.php" method="get">
<table  align="center">
Nhập tên nhà cung cấp : <input type="text" name="ts" />
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
	echo "Các nhà cung cấp có chứa từ khóa ". $_GET["ts"];
    $data = $obj->search($_GET["ts"]);
}
?>
<table border="1"><tr><td>Mã Nhà cung cấp</td><td>Tên nhà cung cấp</td><td>SĐT</td><td>Email</td><td>Fax</td><td>Thao tác</td></tr>
	<?php
	foreach($data as $r)
	{
		?>
        <tr><td> <?php echo $r["MaNCC"]; ?></td>
	    <td><?php echo $r["TenNCC"]; ?></td>
	    <td><?php echo $r["SDT"]; ?></td>
	    <td><?php echo $r["Email"]; ?></td>
	    <td><?php echo $r["Fax"]; ?></td>
	    <td>
	    <a href="xoancc.php?ma=<?php echo $r["MaNCC"]; ?>">Xóa</a> &nbsp;
	    <a href="suancc.php?ma=<?php echo $r["MaNCC"]; ?>">Sửa</a>
	    </td></tr>
        <?php	
	}
	?>
</table>
</body>
</html>