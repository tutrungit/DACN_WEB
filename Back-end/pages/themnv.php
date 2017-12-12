<?php
include "config.php";
include "autoload.php";
$obj = new Nhanvien();
$o2 = new Nhanvien();
$o5 = new Nhanvien();
if (isset($_POST["Submit"]))
{
	$ma= $_POST['ma'];
	$ten= $_POST['ten'];
    $us= $_POST['us'];
    $mk= md5($_POST['mk']);
    $ns= $_POST['ns'];
    $gt= $_POST['gt'];
    $qtc= $_POST['qtc'];
    $dc= $_POST['dc'];
    $sdt= $_POST['sdt'];
    $q = $o5->getAll();
    foreach($q as $v)
    {
        if($v['MaNV']==$ma)
        {
            echo "<p style='color:red;'>Mã nhân viên bị trùng! Vui lòng nhập mã nhân viên khác!</p>";
            
        }
        else
        {
           $data = $obj->insert($ma, $ten ,$us, $mk, $ns, $gt, $qtc, $dc, $sdt);
        }
    }
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm Nhân Viên</title>
</head>

<body  background="image/bg.jpg">
<fieldset style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend style="color:#7200eb" align="center"><b>Nhập thông tin nhân viên cần thêm</b></legend>
<form action="themnv.php" method="post">
<table  align="center">
    <tr><td>Mã nhân viên :</td><td><input type="text" name="ma" maxlength="10" required></td></tr>
    <tr><td>Tên nhân viên :</td><td><input type="text" name="ten" maxlength="50" required></td></tr>
    <tr><td>User Name :</td><td><input type="text" name="us" maxlength="50" required></td></tr>
    <tr><td>Mật khẩu :</td><td><input type="password" name="mk" maxlength="32" required></td></tr>
    <tr><td>Ngày sinh :</td><td><input type="date" name="ns" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"></td></tr>
    <tr><td>Giới tính :</td><td><input type="radio" name="gt" value="1" checked="checked">Nam
                                <input type="radio" name="gt" value="0">Nữ</td></tr>
    <tr><td>Quyền truy cập :</td><td><input type="text" name="qtc" maxlength="30" required></td></tr>
    <tr><td>Địa chỉ :</td><td><input type="text" name="dc" maxlength="70" required></td></tr>
    <tr><td>SĐT :</td><td><input type="number" name="sdt" required></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
</table>
</form>
</fieldset>
<?php
$data = $o2->getAll();
?>
<table  border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã nhân viên</td><td>Tên nhân viên</td><td>User Name</td><td>Mật khẩu</td><td>Ngày sinh</td><td>Giới tính</td><td>Quyền truy cập</td><td>Địa chỉ</td><td>SĐT</td><td>Thao tác</td></tr>
<?php
foreach($data as $r)
{ ?>
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