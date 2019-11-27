<?php require "./commont/connect.php" ?>	
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giáo viên</title>
	<link rel="stylesheet" href="css.css">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<script src="public/js/jquery-3.4.1.slim.min.js"></script>
	<script src="public/js/popper.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>

</head>
<!-- div.header2 -->
    <?php include_once '_share/client/header.php' ?>
<!-- hết div.header2 -->


</br>

<body style="width:100%;margin: auto;background: #eef1f2">
	
		<div class="container" style="width:1200px">
		<div class="row">
			<img src="image/giaovien.jpg" style="width:100%;height:500px">
		</br>	</br>	
		<div style="margin-bottom: 10px;margin-top:10px ">
			<select  class="btn btn-primary" name="">
				<option value="">Chọn Môn</option>
				<option value="">Toán</option>
				<option value="">Văn</option>
				
			</select>
			<select  class="btn btn-primary" name="">
				<option value="">Chọn Lớp</option>
				<option value="">Lớp 10</option>
				<option value="">Lớp 11</option>
				<option value="">Lớp 12</option>
			</select>

			</div>
			<div class="bodygv">
			
			<?php foreach ($rowteacher as  $value){ ?>
				<?php $id=$value['id_teacher']; ?>
				<div class="boxgiaovien">
					<div>
					  <img src="image/logo.png" style="width:50px;position: absolute;">
					<img src="public/images/teacher/<?php echo teacher($id)['image']; ?>" style="width:100%;height:230px">
					</div>
					<p style="font-size:14px;text-align: center; margin-top: 7px"><span style="color: #007bff;font-weight: bold;">
						<?php if ((teacher($id)['gender'])==2){echo 'Cô:';}
						else{echo 'Thầy:';} ?>
							
					
						<?php echo teacher($id)['name']; ?>
							
				
					</p>
			
					<div style="font-size:12px;width:240px;text-align: center;margin-left: 5px">
						<?php  $thongtin=substr(teacher($id)['infomation'],0,350) ?>
						<?php echo  $thongtin.'...'; ?>
					</div>
					<p><p class="gachchan"></p><a href="chitietgiaovien.php?idgiaovien=<?php echo teacher($id)['id_teacher'] ?>" style="font-size: 14px;float: right;margin-right: 10px">Xem thêm</a></p>
					</br>

				</div>
			<?php } ?>
				

			</div>
			
		</div>
		</div>
<div style="height:50px"></div>

		
















		<div class="footer" style="border-top: 1px solid #ddd;width:1347px;margin: auto">
				<div class="boxfoter" style="margin-left: 110px;">

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