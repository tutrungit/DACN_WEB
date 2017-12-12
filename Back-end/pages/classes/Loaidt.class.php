<?php
class Loaidt extends Db
{
	function getAll()
	{
		return $this->query("select * from loaidienthoai");	
	}

	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from loaidienthoai where MaLoai = ? ";
		return $this->query($sql, $arr);	
	}
	
	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from loaidienthoai where TenLoai like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $ten )
	{
		$sql ="insert into loaidienthoai(MaLoai, TenLoai) ";
		$sql .=" values(?,?)";
		$arr = array($ma, $ten,);
		return $this->query($sql, $arr);
	}


	function delete($ma)
	{
		$sql="delete from loaidienthoai where MaLoai= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}


	function update($ma, $ten)
	{
		$arr = array(":M"=> $ma, ":T"=> $ten);
		$sql ="update loaidienthoai set TenLoai= :T where MaLoai= :M ";
		return $this->query($sql, $arr);
	}
}