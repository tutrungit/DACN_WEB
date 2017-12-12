<?php
include "config.php";
include "autoload.php";
$obj = new Khachhang();
$o2 = new Khachhang();
$o5 = new Khachhang();
if (isset($_POST["Submit"]))
{
	$ma= $_POST['ma'];
	$ten= $_POST['ten'];
    $em= $_POST['em'];
    $mk= md5($_POST['mk']);
    $ns= $_POST['ns'];
    $dc= $_POST['dc'];
    $sdt= $_POST['sdt'];
    $q = $o5->getAll();
    foreach($q as $v)
    {
        if($v['MaKH']==$ma)
        {
            echo "<p style='color:red;'>Mã khách hàng bị trùng! Vui lòng nhập mã khách hàng khác!</p>";
            
        }
        else
        {
            $data = $obj->insert($ma, $ten ,$em, $mk, $ns, $dc, $sdt);
        }
    }
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm Khách Hàng</title>
</head>

<body background="image/bg.jpg">
<fieldset style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend style="color:#7200eb" align="center"><b> Nhập thông tin khách hàng cần thêm</b></legend>
<form action="themkh.php" method="post">
<table  align="center">
    <tr><td>Mã khách hàng :</td><td><input type="text" name="ma" maxlength="10" required></td></tr>
    <tr><td>Tên khách hàng :</td><td><input type="text" name="ten" maxlength="50" required></td></tr>
    <tr><td>Email </td><td><input type="email" name="em" maxlength="50" required></td></tr>
    <tr><td>Mật khẩu :</td><td><input type="password" name="mk" maxlength="32" required></td></tr>
    <tr><td>Ngày sinh :</td><td><input type="date" name="ns" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"></td></tr>
    <tr><td>Địa chỉ :</td><td><input type="text" name="dc" maxlength="70" required></td></tr>
    <tr><td>SĐT :</td><td><input type="number" name="sdt"></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
</table>
</form>
</fieldset>
<?php
$data = $o2->getAll();
?>
<table border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã khách hàng</td><td>Tên khách hàng</td><td>Email</td><td>Mật khẩu</td><td>Ngày sinh</td><td>Địa chỉ</td><td>SĐT</td><td>Thao tác</td></tr>
<?php
foreach($data as $r)
{ ?>
    <tr align="center"><td> <?php echo $r["MaKH"]; ?></td>
    <td><?php echo $r["TenKH"]; ?></td>
    <td><?php echo $r["Email"]; ?></td>
    <td><?php echo $r["MatKhau"]; ?></td>
    <td><?php echo $r["NgaySinh"]; ?></td>
    <td><?php echo $r["DiaChi"]; ?></td>
    <td><?php echo $r["SDT"]; ?></td>
    <td>
    <a href="xoakh.php?ma=<?php echo $r["MaKH"]; ?>">Xóa</a> &nbsp;
    <a href="suakh.php?ma=<?php echo $r["MaKH"]; ?>">Sửa</a>
    </td></tr>
    
	<?php
}
?>
</table>
</body>
</html>