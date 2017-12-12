<?php
class Binhluan extends Db
{
	function getAll()
	{
		return $this->query("select * from binhluan");	
	}

	function getOne($id)
	{
		$arr = array("$id");
		$sql ="select * from binhluan where ID= ?";
		return $this->query($sql, $arr);	
	}
	
	function search($id)
	{
		$arr = array($id);
		$sql ="select * from binhluan where ID = ?";
		return $this->query($sql, $arr);	
	}
	function insert($makh, $madt, $nd, $ngay)
	{
		$sql ="insert into binhluan(MaKH, MaDongDT, NoiDung, NgayBL)";
		$sql .=" values(?,?,?,?)";
		$arr = array($makh, $madt, $nd, $ngay);
		return $this->query($sql, $arr);	
		
	}

	function delete($id)
	{
		$sql="delete from binhluan where ID= ?";
		$arr = array($id);
		return $this->query($sql, $arr);
	}

	function update($id, $makh, $madt, $nd, $ngay)
	{
		$sql="update binhluan set 	MaKH= :K,
									MaDongDT= :D,
									NoiDung= :B,
									NgayBL= :N
									where ID= :I ";
		$arr = array(":I"=> $id, ":K"=> $makh, ":D"=> $madt, ":B"=> $nd, ":N"=> $ngay);
		return $this->query($sql, $arr);
	}
}