<?php
include "config.php";
include "autoload.php";
$obj = new Nhacc();
$o2 = new Nhacc();
$o5 = new Nhacc();
if (isset($_POST["Submit"]))
{
	$ma= $_POST['ma'];
	$ten= $_POST['ten'];
    $sdt= $_POST['sdt'];
    $em= $_POST['em'];
    $fax= $_POST['fax'];
    $q = $o5->getAll();
    foreach($q as $v)
    {
        if($v['MaNCC']==$ma)
        {
            echo "<p style='color:red;'>Mã nhà cung cấp bị trùng! Vui lòng nhập mã nhà cung cấp khác!</p>";
            
        }
        else
        {
            $data = $obj->insert($ma,$ten, $sdt, $em, $fax);
        }
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm Nhà Cung Cấp</title>
</head>

<body>
<fieldset>
<legend>Nhập thông tin nhà cung cấp cần thêm</legend>
<form action="themncc.php" method="post">
<table  align="center">
    <tr><td>Mã nhà cung cấp :</td><td><input type="text" name="ma" maxlength="10" required></td></tr>
    <tr><td>Tên nhà cung cấp:</td><td><input type="text" name="ten" maxlength="50" required></td></tr>
    <tr><td>SDT :</td><td><input type="number" name="sdt" required></td></tr>
    <tr><td>Email :</td><td><input type="email" name="em" required></td></tr>
    <tr><td>Fax :</td><td><input type="text" name="fax" maxlength="20" required></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
</table>
</form>
</fieldset>
<?php
$data = $o2->getAll();
?>
<table border="1"><tr><td>Mã Nhà cung cấp</td><td>Tên nhà cung cấp</td><td>SĐT</td><td>Email</td><td>Fax</td><td>Thao tác</td></tr>
<?php
foreach($data as $r)
{ ?>
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