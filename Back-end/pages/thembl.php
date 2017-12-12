<?php
include "config.php";
include "autoload.php";
$obj = new Binhluan();
$o2 = new Binhluan();
$o3 = new Khachhang();
$o4 = new Dongdt();
if (isset($_POST["Submit"]))
{
	$makh = $_POST["makh"];
    $madt = $_POST["madt"];
    $nd = $_POST["nd"];
    $ngay = $_POST["ngay"];
    $data = $obj->insert($makh, $madt, $nd, $ngay);    
	
}
$a= $o3->getAll();
$b= $o4->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm Chi Tiết Đơn Hàng</title>
</head>

<body>
<fieldset>
<legend>Nhập thông tin cần thêm</legend>
<form action="thembl.php" method="post">
<table  align="center">
     <tr><td>ID : </td><td><input type="hidden" name="id"></td></tr>
    <tr><td>Mã Khách Hàng :</td><td><select name="makh" >
                            <?php
                                foreach($a as $v)
                                { ?>
                                    <option value="<?php echo $v["MaKH"]; ?>"><?php echo $v["MaKH"]; ?></option>
                                    <?php
                                } ?>
                                </select>
    </td></tr>
    <tr><td>Mã Dòng Điện  Thoại :</td><td><select name="madt" >
                            <?php
                                foreach($b as $v)
                                { ?>
                                    <option value="<?php echo $v["MaDongDT"]; ?>"><?php echo $v["MaDongDT"]; ?></option>
                                    <?php
                                } ?>
                                </select>
    </td></tr>
    <tr><td>Nội Dung </td><td><textarea name="nd"></textarea></td></tr>
    <tr><td>Thời Gian Bình Luận :</td><td><input type="datetime-local" name="ngay" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" required></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
</table>
</form>
</fieldset>
<?php
$data = $o2->getAll();
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
    <a href="xoabl.php?id=<?php echo $r["ID"];?>">Xóa</a> &nbsp;
    <a href="suabl.php?id=<?php echo $r["ID"];?>">Sửa</a>
    </td></tr>
    
	<?php
}
?>
</table>
</body>
</html>