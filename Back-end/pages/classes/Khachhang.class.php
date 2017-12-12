<?php
class Khachhang extends Db
{
	function getAll()
	{
		return $this->query("select * from khachhang");	
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from khachhang where MaKH = ?";
		return $this->query($sql, $arr);
	}
	function search($ma)
	{
		$arr = array("%$ma%");
		$sql ="select * from khachhang where TenKH like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $ten ,$em, $mk, $ns, $dc, $sdt)
	{
		$sql ="insert into khachhang(MaKH, TenKH, Email, MatKhau, NgaySinh, DiaChi, SDT) ";
		$sql .=" values(?, ?, ?, ?, ?, ?,?)";
		$arr = array($ma, $ten ,$em, $mk, $ns, $dc, $sdt);
		return $this->query($sql, $arr);
	}


	function delete($ma)
	{
		$sql="delete from khachhang where MaKH= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}

	function update($ma, $ten ,$em, $mk, $ns, $dc, $sdt)
	{
		$arr = array(":M"=> $ma, ":T"=> $ten, ":E"=> $em, ":K"=> $mk, ":N"=> $ns,":D"=> $dc, ":S"=> $sdt);
		$sql ="update khachhang set TenKH = :T,
									Email = :E,
									MatKhau = :K,
									NgaySinh = :N,
									DiaChi = :D,
									SDT = :S
									where MaKH= :M ";
		/*echo "<pre>";
		print_r($arr);
		echo $sql;exit;*/
		return $this->query($sql, $arr);
	}
}