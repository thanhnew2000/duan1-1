<?php require "./commont/connect.php" ?>	
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng ký</title>
		<link rel="stylesheet" href="css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
<!-- div.header2 -->
    <?php include_once '_share/client/header.php' ?>
<!-- hết div.header2 -->
		<div style="background-image: url(image/5.jpg);width:100%;height:200px;">
				<div style="background-image: url(image/Untitled-1.png);width:100%;height:200px;">
	
				<p style=" color: white;line-height:200px;text-align:center;font-size: 25px">
					 Đăng Ký
				</p>
			</div>
		</div>
		<div class="formdn" style="width: 500px;margin: auto;height: 750px;margin-top: 20px"> 
		
								<form action="" method="POST">
								<p style="font-weight: bold">Họ và tên</p>
								<input type="text"  class="form-control" name="name">
								<p style="font-weight: bold">Tài khoản</p>
								<input type="text"  class="form-control" name="user">
								
								<p style="font-weight: bold">Mật khẩu</p>
								<input type="password"  class="form-control" name="pass">
								<p style="font-weight: bold">Nhập lại mật khẩu</p>
								<input type="password"  class="form-control" name="pass2">
							
								<p style="font-weight: bold">Email</p>
								<input type="email"  class="form-control" name="email">
						<p style="font-weight: bold">
								Số điện thoại</p>
								<input type="number"  class="form-control" name="sdt">
								<p style="font-weight: bold">Ngày sinh
								<input type="date"  class="form-control" name="ngaysinh">
								<p style="font-weight: bold">Giới tính </p>
								<select name="gioitinh" class="form-control" >
									<option value="1">Nam</option>
									<option value="2">Nữ</option>
								</select>
							
							<button type="submit" name="dangky" class="btn btn-primary" style="float: right;margin-top: 20px;margin-right: 5px"> Đăng ký</button>
					</form>
	</div>

				<?php if (isset($_POST['dangky'])){ 
					if ($_POST['pass']==$_POST['pass2']) {
						$namedk=$_POST['name'];
						$usernamedk=$_POST['user'];
						$passworddk=password_hash($_POST['pass'],PASSWORD_DEFAULT);
						$emaildk=$_POST['email'];
						$sdtdk=$_POST['sdt'];
						$birthdaydk=$_POST['ngaysinh'];
						$gioitinhdk=$_POST['gioitinh'];

						$kiemtra="SELECT * FROM users WHERE username='$usernamedk'";
		             	$kq=$conn->prepare($kiemtra);
					    $kq->execute();
					    $rowkq=$kq->fetch(PDO::FETCH_ASSOC);

						$kiemtra2="SELECT * FROM users WHERE email='$emaildk'";
		             	$kq2=$conn->prepare($kiemtra2);
					    $kq2->execute();
					    $rowkq2=$kq2->fetch(PDO::FETCH_ASSOC);



					    if (isset($rowkq['name'])) {  ?>
					    	<script type="text/javascript">alert("Tài khoản đã tồn tại hãy nhập tài khoản khác")</script>
					 <?php  }else if (isset($rowkq2['email'])) { ?>
							<script type="text/javascript">alert("Email đã tồn tại ")</script>
					<?php   } else{
					 $dk="INSERT INTO users(username,password,name,phone_numbers,email,birthday,gender,image,role_id,status)
             		 values ('$usernamedk','$passworddk','$namedk','$sdtdk','$emaildk','$birthdaydk','$gioitinhdk','1.png',1,'1')";
             			$ok=$conn->exec($dk);
             		 if (isset($ok)) {
             	 	 ?> <script type="text/javascript">alert("Đăng ký thành công");</script>  <?php  
             	 	
             	}  
					}
					}else{ ?>
 							<script type="text/javascript">alert("Mật khẩu không trùng khớp");</script> 
				<?php 	}
					
				 } ?>





	<div class="footer" style="border-top: 1px solid #ddd">
				<div class="boxfoter" style="margin-left: 110px">

				<p style="padding-top: 20px;font-weight: bold">VỀ CHÚNG TÔI</p>
				<a href="" class="thea"><p style="font-size:14px">Giới thiệu</p></a>
				<a href=""  class="thea"><p style="font-size:14px">Các giáo viên</p></a>
				<a href=""  class="thea"><p style="font-size:14px">Điều khoản và chính sách</p></a>
			</div>
			<div class="boxfoter">

				<p style="padding-top: 20px;font-weight: bold">HỖ TRỢ KHÁCH HÀNG</p>
				<a href=""  class="thea"><p style="font-size:14px">Email: hotro@hocmai.vn</p></a>
				<a href=""  class="thea"><p style="font-size:14px">SĐT : 0983298429</p></a>
			</div>
			<div class="boxfoter">
			</br></br>
				<img src="image/dangky.png" style="width:200px;">
				<!-- <p style="font-size:14px;text-align: center">Đơn vị chủ quản: Công ty cổ phần công nghệ giáo dục Zuni
GPKD: 0313282391 cấp ngày 01/06/2015 tại Sở Kế Hoạch và Đầu Tư TP Hồ Chí Minh
Địa chỉ văn phòng: 457 Nguyễn Đình Chiểu, Phường 05, Quận 03, TP Hồ Chí Minh</p> -->
			</div>
			<div class="boxfoters">

				<p style="padding-top: 20px;font-weight: bold">Ủng hộ chúng tôi</p>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFeeling.wd%2F%3F__tn__%3DkCH-R%26eid%3DARBiqg9lqU0fx6nDx6VRI0aIUGuiXVitcManDeViRh0e64sNh5X96hjvQPjoK7hCLerbiY5dMmQ1cdJA%26hc_ref%3DART3Z04Ke5nI6oXON_J6cunxcXcpiR735d1vA1tRFKx_2blQv6yV2hH2ctGmLS_oBeE%26fref%3Dnf&tabs=300&width=300&height=170&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="170" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			</div>
		</div>
	</div>
</body>
</html>