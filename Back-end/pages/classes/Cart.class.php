<?php
class Cart extends Db{
	private $_cart;
	private $_num_item =0;
	public function  __construct()
	{
		if(!isset($_SESSION["cart"])) $this->_cart= array();
		else $this->_cart = $_SESSION["cart"];
		$this->_num_item = array_sum($this->_cart);
		
	}
	
	public function getNumItem()
	{
		return $this->_num_item;	
	}
	public function __destruct()
	{
		$_SESSION["cart"] = $this->_cart;	
	}
	public function getData()
	{
		return $this->_cart;	
	}
	/*
	Them san pham có mã $id và số lương $quantity vào giỏ hàng
	*/
	
	public function phoneExist($ma)
	{
		$sql="select * from dongdienthoai where MaDongDT = '$ma' ";
		$temp = new Db();
		$temp->queryCart($sql);
		if ($temp->getRowCount()==0)
			//print_r($temp->exeNoneQuery($sql));
		 return false;
		return true;

	}
	public function add($id, $quantity=1)
	{	
		if ($id=="" || $quantity<1) return;
		if (!$this->phoneExist($id))  return;
		
		print_r($this->_cart);		
		if (isset($this->_cart[$id]))
			$this->_cart[$id]+=	$quantity;
		else $this->_cart[$id]=	$quantity;
		$_SESSION["cart"] = $this->_cart;	
		$this->_num_item = array_sum($this->_cart);

		echo "Da them $id - $quantity ";
		echo "<script language=javascript>window.location='Giohang1.php';</script>";//Chuyển trình duyệt web tới trang hiển thị cart
	}
	
	public function remove($id)
	{
		unset($this->_cart[$id]);
		$this->_num_item = array_sum($this->_cart);
		$_SESSION["cart"] = $this->_cart;	
	}
	public function edit($id, $quantity)
	{
		$this->_cart[$id]	= $quantity;
		$this->_num_item = array_sum($this->_cart);
		$_SESSION["cart"] = $this->_cart;	
	}
	
	public function show()
	{
		$obj = new Dongdt();
		
		if (Count($this->_cart)==0) 
		{	echo "<h2>Giỏ hàng rỗng</h2>";
			return;
		}
		echo "<table border=\"1\"><thead><tr><th>Tên dòng DT</th><th>Hình ảnh</th><th>Số lượng</th><th>Đơn giá</th><th>Giá KM</th><th>Thành tiền</th><th>Thao tác</th></tr></thead>";
		foreach($this->_cart as $id=>$quantity)
		{
			$data = $obj->getDataDT($id);
			foreach ($data as $r)
			{
				?>
				<tr>
						<td><?php echo $r["TenDongDT"];?></td>
					   <td><?php echo $r["Hinh"];?></td>
					   <td><?php echo $quantity;?></td>
						<td><?php echo $r["DonGia"];?></td>
						<td><?php echo $r["GiaKM"];?></td>	
						<td><?php echo $r["DonGia"]*$quantity;?></td>							
						<td><a href='giohang.php?ac=del&id=<?php echo $r["MaDongDT"];?>'>Xóa</a></td>
						</tr>
						<?php
			}
		}
		echo "</table>";	
		$this->setCartInfo($this->getNumItem());
		//Update số lượng item của cart trong header.php. Có thể không sử dụng method này nếu mỗi lần thêm xong, chuyển trang về mod=cart.
		
	}
	
	function setCartInfo( $quantity=0, $id="cart_sumary")
	{
		echo "<script language=javascript> document.getElementById('$id').innerHTML =$quantity; </script>";
	}

}
?>