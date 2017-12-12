<?php
include "config.php";
include "autoload.php";
$obj = new Loaidt();
$o2 = new Loaidt();
$o5 = new Loaidt();
if (isset($_POST["Submit"]))
{
    $ma= $_POST['ma'];
    $ten= $_POST['ten'];
    $q = $o5->getAll();
    foreach($q as $v)
    {
        if($v['MaLoai']==$ma)
        {
            echo "<p style='color:red;'>Mã loại bị trùng! Vui lòng nhập mã loại khác!</p>";
            
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
<title>Thêm loại điện thoại</title>
</head>

<body background="image/bg.jpg">
<fieldset style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend style="color:#7200eb" align="center"><b>Nhập thông tin loại điện thoại cần thêm</b></legend>
<form action="themloaidt.php" method="post">
<table  align="center">
    <tr><td>Mã loại điện thoại : </td><td><input type="text" name="ma" maxlength="10" required></td></tr>
    <tr><td>Tên loại điện thoại : </td><td><input type="text" name="ten" maxlength="50" required></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
</table>
</form>
</fieldset>
<?php
$data = $o2->getAll();
?>
<table border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã loại điện thoại</td><td>Tên loại điện thoại</td><td>Thao tác</td></tr>
<?php
foreach($data as $r)
{ ?>
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