<?php
class Hangsx extends Db
{
	function getAll()
	{
		return $this->query("select * from hangsanxuat");	
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from hangsanxuat where MaHangSX = ? ";
		return $this->query($sql, $arr);	
	}
	
	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from hangsanxuat where TenHangSX like ? ";
		return $this->query($sql, $arr);	
	}

	function insert($ma, $ten )
	{
		$sql ="insert into hangsanxuat(MaHangSX, TenHangSX) ";
		$sql .=" values(?,?)";
		$arr = array($ma, $ten);
		return $this->query($sql, $arr);
	}


	function delete($ma)
	{
		$sql="delete from hangsanxuat where MaHangSX= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}

	function update( $ma, $ten)
	{
		$arr = array(":M"=> $ma, ":T"=> $ten);
		$sql ="update hangsanxuat set TenHangSX= :T where MaHangSX= :M ";
		return $this->query($sql, $arr);
	}
}