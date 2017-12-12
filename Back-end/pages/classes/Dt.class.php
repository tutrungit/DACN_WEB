<?php
class Dt extends Db
{
	function getAll()
	{
		return $this->query("select * from dienthoai");	
	}

	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from dienthoai where IMEI = ? ";
		return $this->query($sql, $arr);	
	}
	
	function search($ma)
	{
		$arr = array($ma);
		$sql ="select * from dienthoai where MaDongDT = ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $md, $ms)
	{
		$sql ="insert into dienthoai(IMEI, MaDongDT, MauSac) ";
		$sql .=" values(?,?,?)";
		$arr = array($ma, $md, $ms);
		return $this->query($sql, $arr);
	}

	function delete($ma)
	{
		$sql="delete from dienthoai where IMEI= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}

	function update($ma, $md, $ms)
	{
		$sql="update dienthoai set 	MaDongDT = :D,
									MauSac = :M
									where IMEI = :I ";
		$arr = array(":I"=> $ma, ":D"=> $md, ":M"=> $ms);
		return $this->query($sql, $arr);
	}
}