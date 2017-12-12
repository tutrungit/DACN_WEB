<?php
include "config.php";
include "autoload.php";
$obj = new Dh();
$o2 = new Dh();
$o3 = new Nhanvien();
$o4 = new Khachhang();
$o5 = new Dh();
if (isset($_POST["Submit"]))
{
	$ma= $_POST['ma'];
	$manv= $_POST['manv'];
    $makh= $_POST['makh'];
    $tenkh=  $_POST['tenkh'];
    $sdt= $_POST['sdt'];
    $nl= $_POST['nl'];
    $nh= $_POST['nh'];
    $ttt= $_POST['ttt'];
    $tt= $_POST['tt'];
    /*if(strlen($sdt)!=10 || strlen($sdt)!=11)
    {
        echo "<p style='color:red;'>Vui lòng nhập số điện thoại hợp lệ!</p>";
     }*/
    $q = $o5->getAll();
    foreach($q as $v)
    {
        if($v['MaDH']==$ma)
        {
            echo "<p style='color:red;'>Mã đơn hàng bị trùng! Vui lòng nhập mã đơn hàng khác!</p>";
            
        }
        else
        {
            $data = $obj->insert($ma, $manv, $makh, $tenkh, $sdt, $nl, $nh, $ttt, $tt);
        }
    }
	
}
$a= $o3->getAll();
$b= $o4->getAll();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm Đơn Hàng</title>
</head>

<body background="image/bg.jpg">
<fieldset style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend style="color:#7200eb" align="center"><b>Nhập thông tin đơn hàng cần thêm</b></legend>
<form action="themdh.php" method="post">
<table  align="center">
    <tr><td>Mã Đơn Hàng :</td><td><input type="text" name="ma" maxlength="10" required></td></tr>
    <tr><td>Mã Nhân Viên :</td><td><select name="manv" >
                            <?php
                                foreach($a as $v)
                                { ?>
                                    <option value="<?php echo $v["MaNV"]; ?>"><?php echo $v["MaNV"]; ?></option>
                                    <?php
                                } ?>
                                </select>
    </td></tr>
    <tr><td>Mã Khách Hàng </td><td><select name="makh" >
                            <?php
                                foreach($b as $v)
                                { ?>
                                    <option value="<?php echo $v["MaKH"]; ?>"><?php echo $v["MaKH"]; ?></option>
                                    <?php
                                } ?>
                                </select>
    </td></tr>
    <tr><td>Tên Khách Hàng </td><td><input type="text" name="tenkh" maxlength="50" required></td></tr>
    <tr><td>SĐT :</td><td><input type="number" name="sdt" required></td></tr>
    <tr><td>Ngày Lập :</td><td><input type="date" name="nl" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"></td></tr>
    <tr><td>Ngày Hẹn Nhận :</td><td><input type="date" name="nh" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"></td></tr>
    <tr><td>Tổng Thành Tiền :</td><td><input type="number" name="ttt" required step="0.001"></td></tr>
    <tr><td>Trạng Thái :</td><td><input type="text" name="tt" maxlength="20"></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
</table>
</form>
</fieldset>
<?php
$data = $o2->getAll();
?>
<table border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã Đơn Hàng</td><td>Mã Nhân Viên</td><td>Mã Khách Hàng</td><td>Tên Khách Hàng</td><td>Số Điện Thoại</td><td>Ngày lập</td><td>Ngày Hẹn Nhận</td><td>Tổng Thành Tiền</td><td>Trạng Thái</td><td>Thao tác</td></tr>
<?php
foreach($data as $r)
{ ?>
    <tr align="center"><td> <?php echo $r["MaDH"]; ?></td>
    <td><?php echo $r["MaNV"]; ?></td>
    <td><?php echo $r["MaKH"]; ?></td>
    <td><?php echo $r["TenKH"]; ?></td>
    <td><?php echo $r["SDT"]; ?></td>
    <td><?php echo $r["NgayLapDH"]; ?></td>
    <td><?php echo $r["NgayHenNhan"]; ?></td>
    <td><?php echo $r["TongThanhTien"]; ?></td>
    <td><?php echo $r["TrangThai"]; ?></td>
    <td>
    <a href="xoadh.php?ma=<?php echo $r["MaDH"]; ?>">Xóa</a> &nbsp;
    <a href="suadh.php?ma=<?php echo $r["MaDH"]; ?>">Sửa</a>
    </td></tr>
    
	<?php
}
?>
</table>
</body>
</html>