<?php
	$con = mysqli_connect("localhost","root","","webdienthoai");
	
	
?>
<?php
	session_start();
	if(isset($_SESSION['UserName'])){	
		$_SESSION["user"] = $user;
		header("location:admin.php");
	}else{
			if(isset($_POST['submit'])){
				

				$sql = mysqli_query($con,'select * from nhanvien where UserName="'.$_POST['user'].'" and MatKhau="'.md5($_POST['pass']).'"');
				if(!$sql || mysqli_num_rows($sql)>0){	
					echo " Bạn đã đăng nhập thành công, xin chao".$_POST['user'];
					$_SESSION['UserName']=$_POST['user'];
				}else{
					 echo "User hoặc password không đúng";
		}
	}?>
     <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>
            <form action="DangNhap.php" method="post" class="login-container">
        <label> Username</label>
        <br/>
        <input type="text" name="user" />
        <br />
        <label> Password </label>
        <br />
        <input type="password" name="pass" />
        <br />
        <br />
        <input type="submit" name="submit" value="Đăng Nhập" />
        <p style=" color:#ee4054" > Bạn Chưa Có Tài Khoản &nbsp;&nbsp;&nbsp; <a href="DangKy.php"><b> Đăng Ký Tại Đây</b></a></p>
        </form>
        
    <?php
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="stylednhap.css">

  
</head>

<body background="image/bg.jpg" >
 
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
