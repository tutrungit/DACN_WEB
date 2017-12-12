<?php
include "config.php";
include "autoload.php";
$ob = new Binhluan();
$obj = new Binhluan();
$o1 = new Khachhang();
$o3 = new Dongdt();
$id = $_GET["id"];
if(isset($_POST['sm']))
{
	$makh = $_POST["makh"];
	$madt = $_POST["madt"];
	$nd = $_POST["nd"];
	$ngay = $_POST["ngay"];
	$data = $ob->update($id, $makh, $madt, $nd, $ngay);
	header("location:thembl.php");
}
$o2 = $obj->getOne($id);
print_r($o2);
$a = $o1->getAll();
$b = $o3->getAll();
?>
<form method="post" action="">
	<?php
	foreach ($o2 as $v) {
		?>
ID : <input type="hidden" name="id" 
		value="<?php echo $v["ID"];?>" />
		<?php echo $v["ID"];?><br />
 Mã Khách Hàng : <select name="makh" >
                            <?php
                                foreach($a as $x)
                                { ?>
                                    <option value="<?php echo $x["MaKH"]; ?>" 
                                    	<?php
										if($x["MaKH"]==$v["MaKH"])
											echo "selected"; ?>
                                    	><?php echo $x["MaKH"]; ?></option>
                                    <?php
                                } ?>
                                </select></br>
 Mã Dòng Điện Thoại : <select name="madt" >
                            <?php
                                foreach($b as $x)
                                { ?>
                                    <option value="<?php echo $x["MaDongDT"]; ?>" 
                                    	<?php
										if($x["MaDongDT"]==$v["MaDongDT"])
											echo "selected"; ?>
                                    	><?php echo $x["MaDongDT"]; ?></option>
                                    <?php
                                } ?>
                                </select></br>
 Nội Dung :<textarea name="nd" value="<?php echo $v["NoiDung"];?>"></textarea></br>
 Ngày Bình Luận : <input type="datetime-local" name="ngay" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" required value="<?php echo $v["NgayBL"];?>" /><br />
 <?php
} ?>
 <input type="submit" name="sm" value="Cập Nhật" />
 
</form>
