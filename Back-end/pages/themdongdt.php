<?php
include "config.php";
include "autoload.php";
$obj = new Dongdt();
$o2 = new Dongdt();
$o1 = new Loaidt();
$o3 = new Hangsx();
$o4 = new Nhacc();
$o5 = new Dongdt();
if (isset($_POST['Submit']))
{
	$md= $_POST['madong'];
    $ml= $_POST['maloai'];
    $mh= $_POST['mahang'];
    $mcc= $_POST['mancc'];
	$ten= $_POST['tendong'];
    $dg= $_POST['dongia'];
    $km= $_POST['giakm'];
    $err = "";
    $name = $_FILES["hinh"]["name"];
    if(strlen($name)>0)
    {
        $errFile = $_FILES["hinh"]["error"];
        if ($errFile>0)
            $err .="Lỗi file hình <br>";
        else
        {
            $type = $_FILES["hinh"]["type"];
            $arrImg = array("image/png", "image/jpg", "image/bmp");
            if (!in_array($type, $arrImg))
                $err .="Không phải file hình <br>";
            else
            {   $temp = $_FILES["hinh"]["tmp_name"];
                if (!move_uploaded_file($temp, "image/".$name))
                    $err .="Không thể lưu file<br>";
                
            }
        }
    }

    $q = $o5->getAll();
    foreach($q as $v)
    {
        if($v['MaDongDT']==$md)
        {
            echo "<p style='color:red;'>Mã dòng điện thoại bị trùng! Vui lòng nhập mã dòng điện thoại khác!</p>";
            
        }
        else
        {
            $data = $obj->insert($md, $ml, $mh, $mcc, $ten, $name, $dg, $km);
        }
    }
}
$a= $o1->getAll();
$b= $o3->getAll();
$c= $o4->getAll();
$data = $o2->getAll();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm dòng điện thoại</title>
</head>

<body background="image/bg.jpg">
<fieldset style="border-color:#e5101d; color:#7200eb; border-radius:30px">
<legend style="color:#7200eb" align="center"><b>Nhập thông tin dòng điện thoại cần thêm</b></legend>
<form action="themdongdt.php" method="post" enctype="multipart/form-data">
<table  align="center">
    <tr><td>Mã dòng điện thoại:</td><td><input type="text" name="madong" maxlength="10" required></td></tr>
    <tr><td>Mã loại:</td><td><select name="maloai" >
                            <?php
                                foreach($a as $v)
                                { ?>
                                    <option value="<?php echo $v["MaLoai"]; ?>"><?php echo $v["MaLoai"]; ?></option>
                                    <?php
                                } ?>
                                </select>
    </td></tr>
    <tr><td>Mã hãng sản xuất:</td><td><select name="mahang">
                            <?php
                                foreach($b as $v)
                                { ?>
                                    <option value="<?php echo $v["MaHangSX"]; ?>"><?php echo $v["MaHangSX"]; ?></option>
                                    <?php
                                } ?>
                                </select>
    </td></tr>
    <tr><td>Mã nhà cung cấp:</td><td><select name="mancc">
                            <?php
                                foreach($c as $v)
                                { ?>
                                    <option value="<?php echo $v["MaNCC"]; ?>"><?php echo $v["MaNCC"]; ?></option>
                                    <?php
                                } ?>
                                </select>
    </td></tr>
    <tr><td>Tên dòng điện thoại:</td><td><input type="text" name="tendong" maxlength="50" required></td></tr>
    <tr><td>Hình ảnh :</td><td><input type="file" name="hinh" id="hinh"></td></tr>
    <tr><td>Đơn giá:</td><td><input type="number" name="dongia" step="0.001" required></td></tr>
    <tr><td>Giá khuyến mãi:</td><td><input type="number" step="0.001" name="giakm" required></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Thêm" name="Submit"></td></tr>
</table>
</form>
</fieldset>


<table border="1" bordercolor="#e5101d" width="100%" style="margin-top:40px; border-radius:5px"><tr align="center"><td>Mã Dòng Điện Thoại</td><td>Mã Loại</td><td>Mã Hãng Sản Xuất</td><td>Mã Nhà Cung Cấp</td><td>Tên Dòng Điện Thoại</td><td>Hình ảnh</td><td>Đơn giá</td><td>Giá KM</td><td>Thao tác</td></tr>
<?php
foreach($data as $r)
{ ?>
    <tr align="center"><td> <?php echo $r["MaDongDT"]; ?></td>
    <td><?php echo $r["MaLoai"]; ?></td>
    <td><?php echo $r["MaHangSX"]; ?></td>
    <td><?php echo $r["MaNCC"]; ?></td>
    <td><?php echo $r["TenDongDT"]; ?></td>
    <td>
        <img src="image/<?php echo $r["Hinh"]; ?>"/>
    </td>
    <td><?php echo $r["DonGia"]; ?></td>
    <td><?php echo $r["GiaKM"]; ?></td>
    <td>
    <a href="xoadongdt.php?ma=<?php echo $r["MaDongDT"]; ?>">Xóa</a> &nbsp;
    <a href="suadongdt.php?ma=<?php echo $r["MaDongDT"]; ?>">Sửa</a>
    </td></tr>
    
    <?php
}
?>
</table>
</body>
</html>