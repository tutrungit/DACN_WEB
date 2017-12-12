<?php
include "config.php";
include "autoload.php";
$obj = new Hangsx();
$o2 = new Hangsx();
$o5 = new Hangsx();
if (isset($_POST["Submit"]))
{
	$ma= $_POST['ma'];
	$ten= $_POST['ten'];
    $q = $o5->getAll();
    foreach($q as $v)
    {
        if($v['MaHangSX']==$ma)
        {
            echo "<p style='color:red;'>Mã hãng sản xuất bị trùng! Vui lòng nhập mã hãng sản xuất khác!</p>";
            
        }
        else
        {
            $data = $obj->insert($ma,$ten);
        }
    }
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm hãng sản xuất</title>
</head>

<body>
<fieldset>
<legend>Nhập thông tin hãng sản xuất cần thêm</legend>
<form action="themhangsx.php" method="post">
<table  align="center">
    <tr><td>Mã hãng sản xuất:</td><td><input type="text" name="ma" required maxlength="10"></td></tr>
    <tr><td>Tên hãng sản xuất:</td><td><input type="text" name="ten" required maxlength="50"></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
</table>
</form>
</fieldset>
<?php
$data = $o2->getAll();
?>
<table border="1"><tr><td>Mã hãng sản xuất</td><td>Tên hãng sản xuất</td><td>Thao tác</td></tr>
<?php
foreach($data as $r)
{ ?>
    <tr><td> <?php echo $r["MaHangSX"]; ?></td>
    <td><?php echo $r["TenHangSX"]; ?></td>
    <td>
    <a href="xoahsx.php?ma=<?php echo $r["MaHangSX"]; ?>">Xoá</a> &nbsp;
    <a href="suahsx.php?ma=<?php echo $r["MaHangSX"]; ?>">Sửa</a>
    </td></tr>
    
	<?php
}
?>
</table>
</body>
</html>