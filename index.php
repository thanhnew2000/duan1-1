<?php require "./commont/connect.php" ?>	
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="css.css">
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<script src="public/js/jquery-3.4.1.slim.min.js"></script>
	<script src="public/js/popper.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->

</head>
<script src="jquery-3.4.1.min.js"></script>
<script type='text/javascript'>
$(function(){$(window).scroll
(function(){if($(this).scrollTop()>=1000){$("#noop-top").
fadeIn()}else{$("#noop-top").fadeOut()}});$("#noop-top").
click(function(){$("body,html").animate({scrollTop:0},100);
return false})});</script><a href="http://www.windows2it.com/">
</a><a id='noop-top' style='display: none; position: fixed; 
bottom: 1px; right:1%; cursor:pointer;font:12px arial;'>
<img src='https://2.bp.blogspot.com/-
ExomXm9BGFw/UmFqgFo-rFI/AAAAAAAAAE4/JMc1KSveWco/s1600/Top.png'/></a></script>

<script>
    $('#myModal1').modal('show')
</script>
<body>

	<div class="wrapper">
		<div class="header">
			<div class="headerchild">
			<div class="row">
			<a href="" class="thea"><div class="col-md-2" style="height: 80px;"><img src="image/logo.png" style="width:80px;margin-left: 40px;margin-top: 17px"></div></a>
			<div class="col-md-10">
				<div class="menu"  style="float: left;">
					<ul>
						<a href="" class="thea"><li>Trang chủ</li></a>
						
						<li class="dropdown">
			      		 <a href="danhsach.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Khóa học <span class="caret"></span></a>
			                <ul class="dropdown-menu">
			                  <li><a href="danhsach.php">Lớp 12</a></li><br>
			                  <li><a href="danhsach.php">Lớp 11</a></li><br>
			                  <li><a href="danhsach.php">Lớp 10</a></li>
			          
			                </ul>
             			 </li>



						<a href="giaovien.php" class="thea"><li>Giáo viên</li></a>
						<a href="luyende.php" class="thea"><li>Luyện đề</li></a>
					<!-- 	<a href="" class="thea"><li>Hỗ trợ</li></a> -->
					
					</ul>
					<?php if (!isset($_SESSION['account'])){ ?>
						
					
						<a href="dangky.php" class="btn btn-primary" style="float: right;margin-left: 10px;margin-top: -15px">Đăng ký</a> 
					<a href="dangnhap.php" class="btn btn-primary" style="float: right;margin-top: -15px">Đăng nhập</a> 

				<?php }else { ?>

						<div class="btn-group" style="float: right;margin-top: -30px">
						  <button type="button" class="btn btn-info" style="font-size: 14px">	<img src="public/images/user/<?php echo users($_SESSION['account']['id'])['image'] ?>" style="width:40px;height:35px;border-radius: 100px;"> <?php echo users($_SESSION['account']['id'])['name']?></button>
						  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
						    <a class="dropdown-item" href="thongtincanhan.php">Thông tin cá nhân</a>
						      <?php if (($_SESSION['account']['role'])=='100') { ?>
						    <a class="dropdown-item" href="admin/dethi.php">Trang quản trị</a>
						    <?php } ?>
						    <a class="dropdown-item" href="them.php?do=logout">Đăng xuất</a>
						  </div>
						</div>
					
				<?php } ?>
				</div>
			</div>
			</div>
			</div>
		</div>

	















<!-- Hết đăng nhập -->

		<div class="anhbia">
				<h1 style="padding-top: 200px;margin-left: 100px " >Học mọi lúc mọi nơi</h1>
				<form action="" method="get" accept-charset="utf-8" style="padding-top: 50px;margin-left: 100px">

						<input type="text" name="" class="form-control" placeholder="Tên khóa học" style="width:400px;float: left;margin-left: 50px;">
				
		
						 <select class="form-control" style="width:250px;float: left;margin-left: 5px;">
                          <option>Lớp 12</option>
                          <option>Lớp 11</option>
                          <option>Lớp 10</option>
             			</select>


					 <select class="form-control" style="width:250px;float: left;margin-left: 5px;">
                          <option>Toán</option>
                          <option>Lý</option>
                          <option>Hóa</option>
                          <option>Văn</option>
                          <option>Anh</option>
             			</select>
			
				<a href="danhsach.php"><button type="button" class="btn btn-primary" style="margin-left: 5px;">Xem các khóa học</button></a>
				</form>

	
	</div>
		<!--  Tiêu đề  -->

		<div class="tieude">
<!-- 			<h3 style="text-align: center">Với chúng tôi</h3> -->
			<div class="otieude" style="margin-left: 210px">

				<img src="image/1.png" style="width:120px;height:120px;margin-left: 65px;margin-top: 20px">
				<p style="text-align: center;margin-top: 5px;font-size: 20px">Học mọi lúc mọi nơi</p>
				<p style="text-align: center">Chỉ cần có điện thoại máy tính bảng, laptop hoặc TV kết nối Internet</p>
			</div>

				<div class="otieude" style="margin-left: 80px">
				<img src="image/2.png" style="width:120px;height:120px;margin-left: 65px;margin-top: 20px">
				<p style="text-align: center;margin-top: 5px;font-size: 20px">Chất lượng</p>
				<p style="text-align: center">Khóa học chất lượng, cập nhật liên tục, bán sát kỳ thi THPT QG 2020</p>
			</div>
				<div class="otieude" style="margin-left: 80px">
				<img src="image/3.png" style="width:130px;height:120px;margin-left: 65px;margin-top: 20px">
				<p style="text-align: center;margin-top: 5px;font-size: 20px">Học phí phù hợp </p>
				<p style="text-align: center">Học phí rẻ - bất kỳ học sinh nào cũng có thể học</p>
			</div>


		</div>

		<!--  Hết tiêu đề -->


		<div class="body">
			<!--  HÀNG 1 -->
			<div class="hang1">
				<p style="margin-left: 10px;font-weight: bold;font-size: 17px;border-bottom: 2px solid gold;width:200px">Khóa học nổi bật</p>
				<a href=""  style="margin-top:-35px;margin-left:10px;    margin-right: 10px;font-weight: bold; float: right;font-size: 14px">Xem thêm</a>


				<div class="box">
					<div class="boxtren"><img src="image/1.jpg" style="height: 170px;width:270px"></div>
					<div class="boxduoi">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 45px;width: 45px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 100px">Nguyễn Thị Lanh</p>
						<p style="margin-left: -45px;margin-top: 10px;float: left;font-weight: bold;color:red">800.000đ</p>
						<a href="chitietkhoahoc.php" class="btn btn-primary" style="float: right;margin-right: 10px"> Xem chi tiết </a>
					</div>
				</div>

					<div class="box">
					<div class="boxtren"><img src="image/1.jpg" style="height: 170px;width:270px"></div>
					<div class="boxduoi">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 45px;width: 45px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 100px">Nguyễn Thị Lanh</p>
						<p style="margin-left: -45px;margin-top: 10px;float: left;font-weight: bold;color:red">800.000đ</p>
						<a href="chitietkhoahoc.php" class="btn btn-primary" style="float: right;margin-right: 10px"> Xem chi tiết </a>
					</div>
				</div>


					<div class="box">
					<div class="boxtren"><img src="image/1.jpg" style="height: 170px;width:270px"></div>
					<div class="boxduoi">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 45px;width: 45px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 100px">Nguyễn Thị Lanh</p>
						<p style="margin-left: -45px;margin-top: 10px;float: left;font-weight: bold;color:red">800.000đ</p>
						<a href="chitietkhoahoc.php" class="btn btn-primary" style="float: right;margin-right: 10px"> Xem chi tiết </a>
					</div>
				</div>


					<div class="box">
					<div class="boxtren"><img src="image/1.jpg" style="height: 170px;width:270px"></div>
					<div class="boxduoi">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 45px;width: 45px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 100px">Nguyễn Thị Lanh</p>
						<p style="margin-left: -45px;margin-top: 10px;float: left;font-weight: bold;color:red">800.000đ</p>
						<a href="chitietkhoahoc.php" class="btn btn-primary" style="float: right;margin-right: 10px"> Xem chi tiết </a>
					</div>
				</div>
				
			</div>
				<!-- HẾT HÀNG 1 -->
	
				<div class="hang2" style="margin-top: 35px">
						<p style="margin-left: 10px;font-weight: bold;font-size: 17px;border-bottom: 2px solid gold;width:200px">Khóa học khối 12</p>

				<a href="" style="margin-top:-35px;margin-left:10px;    margin-right: 10px;font-weight: bold; float: right;font-size: 14px">Xem thêm</a>


				<div class="box">
					<div class="boxtren"><img src="image/1.jpg" style="height: 170px;width:270px"></div>
					<div class="boxduoi">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 45px;width: 45px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 100px">Nguyễn Thị Lanh</p>
						<p style="margin-left: -45px;margin-top: 10px;float: left;font-weight: bold;color:red">800.000đ</p>
						<a href="chitietkhoahoc.php" class="btn btn-primary" style="float: right;margin-right: 10px"> Xem chi tiết </a>
					</div>
				</div>

					<div class="box">
					<div class="boxtren"><img src="image/1.jpg" style="height: 170px;width:270px"></div>
					<div class="boxduoi">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 45px;width: 45px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 100px">Nguyễn Thị Lanh</p>
						<p style="margin-left: -45px;margin-top: 10px;float: left;font-weight: bold;color:red">800.000đ</p>
						<a href="chitietkhoahoc.php" class="btn btn-primary" style="float: right;margin-right: 10px"> Xem chi tiết </a>
					</div>
				</div>


					<div class="box">
					<div class="boxtren"><img src="image/1.jpg" style="height: 170px;width:270px"></div>
					<div class="boxduoi">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 45px;width: 45px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 100px">Nguyễn Thị Lanh</p>
						<p style="margin-left: -45px;margin-top: 10px;float: left;font-weight: bold;color:red">800.000đ</p>
						<a href="chitietkhoahoc.php" class="btn btn-primary" style="float: right;margin-right: 10px"> Xem chi tiết </a>
					</div>
				</div>


					<div class="box">
					<div class="boxtren"><img src="image/1.jpg" style="height: 170px;width:270px"></div>
					<div class="boxduoi">
					<a href="" class="thea"><p style="font-weight: bold;color: black;margin-left: 10px;height:27px">Cấp Tốc Về Đích môn Toán 2020</p></a>
						<img src="image/2.jpg" style="height: 45px;width: 45px;border-radius: 100%;float: left;margin-left: 10px;margin-top: 5px">
						<p style="margin-top: 25px;margin-left: 100px">Nguyễn Thị Lanh</p>
						<p style="margin-left: -45px;margin-top: 10px;float: left;font-weight: bold;color:red">800.000đ</p>
						<a href="chitietkhoahoc.php" class="btn btn-primary" style="float: right;margin-right: 10px"> Xem chi tiết </a>
					</div>
				</div>
				
				</div>
				<!--  HẾT HÀNG 2 -->
				<!--  HÀNG 2 LẦN 2 -->
				<div class="hang2">
					<img src="image/5.jpg" alt="" style="height: 350px;width:500px;float: left;border-radius: 10px">
					<div class="advertbig">
						<img src="image/advert.png" class="advertsmall">
						<img src="image/advert2.png" class="advertsmall" style="margin-top: 10px">

					</div>
					<!--  <div style="float: left;width:200px;height:50px;background: black">Kết nối</div> -->
						<div class="topic"></div>
					

				</div>


				<div class="hang3">
					<p style="text-align: center;font-size: 22px;padding-top: 10px;font-weight: bold">Giáo viên </p>
					<div class="cotgiaovien">
						<img src="image/2.jpg" style="height: 250px;background: gold;width:100%">
						<div class="cotgiaoviendown">
							<a href="" class="thea"><p style="text-align: center;">Cô Nguyễn Thi Lanh</p></a>
							<p style="font-size: 13px;margin-left: 5px;text-align: center;">Tốt nghiệp loại giỏi trường Sư phạm, kinh nghiệm dạy môn Toán hơn 20 năm, cô ghi dấu ấn với các thế hệ HS bằng lối giảng tỉ mỉ, dễ hiểu phù hợp với mọi đối tượng.</p>
						</div>
					</div>
						<div class="cotgiaovien">
						<img src="image/2.jpg" style="height: 250px;background: gold;width:100%">
						<div class="cotgiaoviendown">
							<a href="" class="thea"><p style="text-align: center;">Cô Nguyễn Thi Lanh</p></a>
							<p style="font-size: 13px;margin-left: 5px;text-align: center;">Tốt nghiệp loại giỏi trường Sư phạm, kinh nghiệm dạy môn Toán hơn 20 năm, cô ghi dấu ấn với các thế hệ HS bằng lối giảng tỉ mỉ, dễ hiểu phù hợp với mọi đối tượng.</p>
						</div>
					</div>
					
						<div class="cotgiaovien">
						<img src="image/2.jpg" style="height: 250px;background: gold;width:100%">
						<div class="cotgiaoviendown">
							<a href="" class="thea"><p style="text-align: center;">Cô Nguyễn Thi Lanh</p></a>
							<p style="font-size: 13px;margin-left: 5px;text-align: center;">Tốt nghiệp loại giỏi trường Sư phạm, kinh nghiệm dạy môn Toán hơn 20 năm, cô ghi dấu ấn với các thế hệ HS bằng lối giảng tỉ mỉ, dễ hiểu phù hợp với mọi đối tượng.</p>
						</div>
					</div>


						<div class="cotgiaovien">
						<img src="image/2.jpg" style="height: 250px;background: gold;width:100%">
						<div class="cotgiaoviendown">
							<a href="" class="thea"><p style="text-align: center;">Cô Nguyễn Thi Lanh</p></a>
							<p style="font-size: 13px;margin-left: 5px;text-align: center;">Tốt nghiệp loại giỏi trường Sư phạm, kinh nghiệm dạy môn Toán hơn 20 năm, cô ghi dấu ấn với các thế hệ HS bằng lối giảng tỉ mỉ, dễ hiểu phù hợp với mọi đối tượng.</p>
						</div>
					</div>



				</div>




	<a style="display:scroll;position:fixed;bottom:5px;right:5px;" href="#" title="Back to Top"><img src="https://2.bp.blogspot.com/-
ExomXm9BGFw/UmFqgFo-rFI/AAAAAAAAAE4/JMc1KSveWco/s1600/Top.png"/></a>  


			<div class="hangchiase">
				<p style="font-weight: bold;text-align: center;font-size:22px;padding-top: 10px">Học sinh chia sẻ</p>

				<div class="boxchiase">
					<div class="chiaseup"><img src="image/2.jpg" style="width:120px;height:120px;border-radius: 100%;text-align: center;margin-left: 115px">
					</div>
					<div class="chiasedown">
						<p style="text-align: center;font-size: 17px;font-weight: bold">Nguyễn Thi My</p>
						<p style="margin-left: 35px;text-align: center;width:280px">
							<span style="font-size: 20px">"</span>
							Các khóa học trên website rất bổ ích, giúp em có nhiều thêm kỹ năng sống làm việc. Em cảm thấy rất tự tin và luôn tràn đầy năng lượng
							<span style="font-size: 20px">"</span>
						</p>
					</div>
				</div>
					<div class="boxchiase">
					<div class="chiaseup"><img src="image/2.jpg" style="width:120px;height:120px;border-radius: 100%;text-align: center;margin-left: 115px">
					</div>
					<div class="chiasedown">
						<p style="text-align: center;font-size: 17px;font-weight: bold">Nguyễn Thi My</p>
						<p style="margin-left: 35px;text-align: center;width:280px">
							<span style="font-size: 20px">"</span>
							Các khóa học trên website rất bổ ích, giúp em có nhiều thêm kỹ năng sống làm việc. Em cảm thấy rất tự tin và luôn tràn đầy năng lượng
							<span style="font-size: 20px">"</span>
						</p>
					</div>
				</div>
					<div class="boxchiase">
					<div class="chiaseup"><img src="image/2.jpg" style="width:120px;height:120px;border-radius: 100%;text-align: center;margin-left: 115px">
					</div>
					<div class="chiasedown">
						<p style="text-align: center;font-size: 17px;font-weight: bold">Nguyễn Thi My</p>
						<p style="margin-left: 35px;text-align: center;width:280px">
							<span style="font-size: 20px">"</span>
							Các khóa học trên website rất bổ ích, giúp em có nhiều thêm kỹ năng sống làm việc. Em cảm thấy rất tự tin và luôn tràn đầy năng lượng
							<span style="font-size: 20px">"</span>
						</p>
					</div>
				</div>




			</div>



		</div>
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