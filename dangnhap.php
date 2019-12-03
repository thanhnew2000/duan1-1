 <?php include "./commont/connect.php" ; session_start(); ?> 
<?php if(isset($_SESSION['acount'])){
	header("location: index.php");
} ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập</title>
		<link rel="stylesheet" href="css.css">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<script src="public/js/jquery-3.4.1.slim.min.js"></script>
	<script src="public/js/popper.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>

</head>
<body>
<!-- div.header2 -->
    <?php include_once '_share/client/header.php' ?>
<!-- hết div.header2 -->

	
		<div style="background-image: url(image/5.jpg);width:100%;height:200px;">
				<div style="background-image: url(image/Untitled-1.png);width:100%;height:200px;">
	
				<p style=" color: white;line-height:200px;text-align:center;font-size: 25px">
					 Đăng Nhập
				</p>
			</div>
		</div>
		<div class="formdn" style="width: 500px;margin: auto;height: 500px;margin-top: 20px"> 
		<form action="them.php" method="POST" accept-charset="utf-8">
			
					<p style="font-weight: bold">Tài khoản</p>
					<input type="text"  class="form-control" name="taikhoan">
						</br>
					<p style="font-weight: bold">Mật khẩu</p>
					<input type="password"  class="form-control" name="matkhau">
						<button type="submit" class="btn btn-primary" style="float: right;margin-top: 20px;margin-right: 5px"> Đăng nhập</button>
		</form>
	</div>









<!-- div.header2 -->
    <?php include_once '_share/client/footer.php' ?>
<!-- hết div.header2 -->
	</div>
</body>
</html>