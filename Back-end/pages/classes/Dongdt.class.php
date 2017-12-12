<?php
class Dongdt extends Db
{
	function getAll()
	{
		return $this->query("select * from dongdienthoai");	
	}

	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from dongdienthoai where MaDongDT = ? ";
		return $this->query($sql, $arr);	
	}
	
	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from dongdienthoai where TenDongDT like ? ";
		return $this->query($sql, $arr);	
	}
		function getDataDT($id)
	{
		$sql ="select * from dongdienthoai where MaDongDT = '$id' ";
		return $this->queryCart($sql);
	}
	
	function insert($md, $ml, $mh, $mcc, $ten, $hinh, $dg, $km )
	{
		$sql ="insert into dongdienthoai(MaDongDT, MaLoai, MaHangSX, MaNCC, TenDongDT, Hinh, DonGia, GiaKM) ";
		$sql .=" values(?,?,?,?,?,?,?,?)";
		$arr = array($md, $ml, $mh, $mcc, $ten, $hinh, $dg, $km );
		return $this->query($sql, $arr);
	}

	function delete($md)
	{
		$sql="delete from dongdienthoai where MaDongDT= ? ";
		$arr = array($md);
		return $this->query($sql, $arr);
	}

	function update($md, $ml, $mh, $mcc, $ten, $hinh, $dg, $km)
	{
		$arr = array(":M"=> $md,":L"=> $ml,":S"=> $mh, ":C"=> $mcc, ":T"=> $ten, ":H"=> $hinh, ":D"=> $dg, ":K"=> $km);
		$sql ="update dongdienthoai set MaLoai = :L,
										MaHangSX = :S,
										MaNCC = :C,
										TenDongDT = :T,
										Hinh = :H,
										DonGia = :D,
										GiaKM = :K
										where MaDongDT = :M ";
		
		return $this->query($sql, $arr);
	}
}