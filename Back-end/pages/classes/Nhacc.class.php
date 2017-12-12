<?php
class Nhacc extends Db
{
	function getAll()
	{
		return $this->query("select * from nhacungcap");	
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from nhacungcap where MaNCC = ? ";
		return $this->query($sql, $arr);	
	}
	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from nhacungcap where TenNCC like ? ";
		return $this->query($sql, $arr);	
	}

	function insert($ma, $ten ,$sdt, $em, $fax)
	{
		$sql ="insert into nhacungcap(MaNCC, TenNCC, SDT, Email, Fax) ";
		$sql .=" values(?, ?, ?, ?, ?)";
		$arr = array($ma, $ten ,$sdt, $em, $fax);
		return $this->query($sql, $arr);
	}


	function delete($ma)
	{
		$sql="delete from nhacungcap where MaNCC= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}

	function update($ma, $ten ,$sdt, $em, $fax)
	{
		$arr = array(":M"=> $ma, ":T"=> $ten, ":S"=> $sdt, ":E"=> $em, ":F"=> $fax);
		$sql ="update nhacungcap set 	TenNCC = :T,
										SDT = :S,
										Email = :E,
										Fax = :F
										where MaNCC= :M ";
		/*echo "<pre>";
		print_r($arr);
		echo $sql;exit;*/
		return $this->query($sql, $arr);
	}
}