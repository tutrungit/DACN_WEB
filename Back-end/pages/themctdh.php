<?php
include "config.php";
include "autoload.php";
$obj = new Ctdh();
$o1 = new Ctdh();
$o2 = new Ctdh();
$o3 = new Dh();
$o4 = new Dt();
if (isset($_POST["Submit"]))
{
	$ma= $_POST['ma'];
	$imei = $_POST["imei"];
    $ten = $_POST["ten"];
    $ms = $_POST["ms"];
    $sl = $_POST["sl"];
    $dg = $_POST["dg"];
    $q = $o1->getAll();
    foreach($q as $v)
    {
        if($v['MaDH']==$ma)
        {
            echo "<p style='color:red;'>Mã đơn hàng bị trùng! Vui lòng nhập mã đơn hàng khác!</p>";
            
        }
        else if($v['IMEI']==$imei)
        {
             echo "<p style='color:red;'>Điện thoại này đã được bán! Vui lòng chọn điện thoại khác!</p>";
        }
        else
        {
            $data = $obj->insert($ma, $imei, $ten, $ms, $sl, $dg);
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
<title>Thêm Chi Tiết Đơn Hàng</title>
</head>

<body>
<fieldset>
<legend>Nhập thông tin chi tiết đơn hàng cần thêm</legend>
<form action="themctdh.php" method="post">
<table  align="center">
    <tr><td>Mã Đơn Hàng :</td><td><select name="ma" >
                            <?php
                                foreach($a as $v)
                                { ?>
                                    <option value="<?php echo $v["MaDH"]; ?>"><?php echo $v["MaDH"]; ?></option>
                                    <?php
                                } ?>
                                </select>
    </td></tr>
    <tr><td>Mã IMEI :</td><td><select name="imei" >
                            <?php
                                foreach($b as $v)
                                { ?>
                                    <option value="<?php echo $v["IMEI"]; ?>"><?php echo $v["IMEI"]; ?></option>
                                    <?php
                                } ?>
                                </select>
    </td></tr>
    <tr><td>Tên Dòng Điện Thoại </td><td><input type="text" name="ten" maxlength="50" required></td></tr>
    <tr><td>Màu Sắc :</td><td><input type="text" name="ms" maxlength="15" required></td></tr>
    <tr><td>Số Lượng :</td><td><input type="number" name="sl" required></td></tr>
    <tr><td>Đơn Giá :</td><td><input type="number" name="dg" step="0.001" required></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
</table>
</form>
</fieldset>
<?php
$data = $o2->getAll();
?>
<table border="1"><tr><td>Mã Đơn Hàng</td><td>Mã IMEI</td><td>Tên Dòng Điện Thoại</td><td>Màu Sắc</td><td>Số Lượng</td><td>Đơn Giá</td><td>Thao tác</td></tr>
<?php
foreach($data as $r)
{ ?>
    <tr><td> <?php echo $r["MaDH"]; ?></td>
    <td><?php echo $r["IMEI"]; ?></td>
    <td><?php echo $r["TenDongDT"]; ?></td>
    <td><?php echo $r["MauSac"]; ?></td>
    <td><?php echo $r["SoLuong"]; ?></td>
    <td><?php echo $r["DonGia"]; ?></td>
    <td>
    <a href="xoactdh.php?ma=<?php echo $r["MaDH"]; ?>&imei=<?php echo $r["IMEI"]; ?>">Xóa</a> &nbsp;
    <a href="suactdh.php?ma=<?php echo $r["MaDH"]; ?>&imei=<?php echo $r["IMEI"]; ?>">Sửa</a>
    </td></tr>
    
	<?php
}
?>
</table>
</body>
</html>