<?php
class Nhanvien extends Db
{
	function getAll()
	{
		return $this->query("select * from nhanvien");	
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from nhanvien where MaNV = ? ";
		return $this->query($sql, $arr);	
	}

	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from nhanvien where TenNV like ? ";
		return $this->query($sql, $arr);	
	}
	

	function insert($ma, $ten ,$us, $mk, $ns, $gt, $qtc, $dc, $sdt)
	{
		$sql ="insert into nhanvien(MaNV, TenNV, UserName, MatKhau, NgaySinh, GioiTinh, QuyenTruyCap, DiaChi, SDT) ";
		$sql .=" values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$arr = array($ma, $ten ,$us, $mk, $ns, $gt, $qtc, $dc, $sdt);
		return $this->query($sql, $arr);
	}


	function delete($ma)
	{
		$sql="delete from nhanvien where MaNV= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}

	function update($ma, $ten ,$us, $mk, $ns, $gt, $qtc, $dc, $sdt)
	{
		$arr = array(":M"=> $ma, ":T"=> $ten, ":U"=> $us, ":K"=> $mk, ":N"=> $ns, ":G"=> $gt, ":Q"=> $qtc, ":D"=> $dc, ":S"=> $sdt);
		$sql ="update nhanvien set 	TenNV = :T,
									UserName = :U,
									MatKhau = :K,
									NgaySinh = :N,
									GioiTinh = :G,
									QuyenTruyCap = :Q,
									DiaChi = :D,
									SDT = :S
									where MaNV= :M ";
		return $this->query($sql, $arr);
	}
}