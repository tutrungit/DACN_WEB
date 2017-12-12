
<?php
  include "config.php";
  include "autoload.php";
  $obj = new Khachhang();
  $o1 = new Khachhang();
  function checkEmail($string)
  {
  if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
   return true;
  return false; 
  }
  if (isset($_POST["sm"]))
  {
    $email= $_POST['email'];
    $psw = $_POST["psw"];
    $pswr = $_POST["psw-repeat"];
    if($email=="")
    {
      echo "Vui lòng nhập email!";
    }
    else if($psw=="")
    {
      echo "Vui lòng nhập mật khẩu!";
    }
    else if($pswr=="")
    {
      echo "Vui lòng nhập lại mật khẩu!";
    }
    else if (checkEmail($email)==false){
      echo "Định dạng email sai!<br>";
    }
    else
    {
      $q = $o1->getAll();
      foreach($q as $v)
      {
        if($v['Email']==$email)
        {
            echo "Tài khoản đã tồn tại";
            
        }
        else
          $data = $obj->insert('KH10', Null ,$email, $psw, Null, Null, Null);
          echo "Đăng ký thành công";
      }
	  
    }
  }
?>
<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
body
{
	background:url(images/bg.jpg);
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color:#e5101d;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color:#7200eb;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.container {
    padding: 16px;
	background:url(image/bg.jpg);
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Form Đăng Ký</h2>
<!-- Button to open the modal -->
<button onclick="document.getElementById('id01').style.display='block'">Đăng ký</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="" method="post">
    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Nhập Email" name="email" required>

      <label><b>Mật Khẩu</b></label>
      <input type="password" placeholder="Nhập Mật Khẩu" name="psw" required>

      <label><b>Nhập Lại Mật Khẩu</b></label>
      <input type="password" placeholder="Nhập Lại Mật Khẩu" name="psw-repeat" required>
      <input type="checkbox" >Remember me
      <p>Bằng việc đăng kí, bạn đã đồng ý với chúng tôi về <a href="#">Điều khoản dịch vụ & Chính sách bảo mật</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy</button>
        <button type="submit" name="sm" class="signupbtn">Đăng Ký</button>
        <p align="center"><a href="DangNhap.php" style="color:#9abc4e; font-size:20px"><b>Đăng Nhập Tại Đây</b></a></p>
      </div>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>