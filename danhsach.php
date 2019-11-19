<?php require "./commont/connect.php" ?>	
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="css.css">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<script src="public/js/jquery-3.4.1.slim.min.js"></script>
	<script src="public/js/popper.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->

<style type="text/css" media="screen">
.container ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

 .container li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

 .container li a.active {
  background-color:#007bff;
  color: white;
}

.container li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>

</head>
<!-- div.header2 -->
    <?php include_once '_share/client/header.php' ?>
<!-- hết div.header2 -->

</br>

<body>
	
		<div class="container">
			<div class="row">
			<div class="col-md-2">
			<ul>
			  <li><a class="active" href="#home">Lớp 12</a></li>
			  <li><a href="#news">Toán </a></li>
			  <li><a href="#contact">Văn</a></li>
			  <li><a href="#contact">Anh</a></li>
			  <li><a href="#about">Lý</a></li>
			  <li><a href="#about">Hóa</a></li>
			  <li><a href="#about">Sinh</a></li>


			  <li><a class="active" href="#home">Lớp 11</a></li>
 			  <li><a href="#news">Toán </a></li>
			  <li><a href="#contact">Văn</a></li>
			  <li><a href="#contact">Anh</a></li>
			  <li><a href="#about">Lý</a></li>
			  <li><a href="#about">Hóa</a></li>
			  <li><a href="#about">Sinh</a></li>



			    <li><a class="active" href="#home">Lớp 10</a></li>

			  <li><a href="#news">Toán </a></li>
			  <li><a href="#contact">Văn</a></li>
			  <li><a href="#contact">Anh</a></li>
			  <li><a href="#about">Lý</a></li>
			  <li><a href="#about">Hóa</a></li>
			  <li><a href="#about">Sinh</a></li>

			</ul>
			</div>


			<div class="col-md-9"  style="background: none;margin-left: 25px">
					<img src="image/5.jpg" style="width:100%;height:200px">

			<div class="hang1a">
				<p style="margin-left: 10px;font-weight: bold;font-size: 17px;border-bottom: 2px solid gold;width:200px">Lớp 12 -> Toán</p>
				<!-- <a href=""  style="margin-top:-35px;margin-left:10px;    margin-right: 10px;font-weight: bold; float: right;font-size: 14px">Xem thêm</a> -->


				<div class="box2">
					<div class="boxtren2"><img src="image/1.jpg" style="height: 150px;width:100%"></div>
					<div class="boxduoi2">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px;font-size: 14px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 35px;width: 35px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 70px;font-size: 14px">Nguyễn Thị Lanh</p>
						<p style="margin-left:5px;float: left;font-weight: bold;color:red;font-size: 14px">800.000đ</p>
						<a href="chitiet.php" style="float: right;margin-right: 10px;font-size: 14px"> Xem chi tiết </a>
					</div>
				</div>


				<div class="box2">
					<div class="boxtren2"><img src="image/1.jpg" style="height: 150px;width:100%"></div>
					<div class="boxduoi2">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px;font-size: 14px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 35px;width: 35px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 70px;font-size: 14px">Nguyễn Thị Lanh</p>
						<p style="margin-left:5px;float: left;font-weight: bold;color:red;font-size: 14px">800.000đ</p>
						<a href="chitiet.php" style="float: right;margin-right: 10px;font-size: 14px"> Xem chi tiết </a>
					</div>
				</div>



				<div class="box2">
					<div class="boxtren2"><img src="image/1.jpg" style="height: 150px;width:100%"></div>
					<div class="boxduoi2">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px;font-size: 14px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 35px;width: 35px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 70px;font-size: 14px">Nguyễn Thị Lanh</p>
						<p style="margin-left:5px;float: left;font-weight: bold;color:red;font-size: 14px">800.000đ</p>
						<a href="chitiet.php" style="float: right;margin-right: 10px;font-size: 14px"> Xem chi tiết </a>
					</div>
				</div>

				<div class="box2">
					<div class="boxtren2"><img src="image/1.jpg" style="height: 150px;width:100%"></div>
					<div class="boxduoi2">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px;font-size: 14px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 35px;width: 35px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 70px;font-size: 14px">Nguyễn Thị Lanh</p>
						<p style="margin-left:5px;float: left;font-weight: bold;color:red;font-size: 14px">800.000đ</p>
						<a href="chitiet.php" style="float: right;margin-right: 10px;font-size: 14px"> Xem chi tiết </a>
					</div>
				</div>





				
		
			</div>
		</div>
	</div>

			<!--  Phải của trang chi tiêt -->
	
			</div>
		</div>

	




		<div class="footer" style="border-top: 1px solid #ddd;width:1347px;margin: auto">
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


</body>
</html>