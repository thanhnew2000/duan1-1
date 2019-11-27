<?php require "./commont/connect.php" ?>	
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cá nhân</title>
		<link rel="stylesheet" href="css.css">
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
		<script src="public/js/jquery-3.4.1.slim.min.js"></script>
		<script src="public/js/popper.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
</head>

<?php if (isset($_POST['tencn'])) {
	$tencn=$_POST['tencn'];
	$birthcn=$_POST['birthcn'];
	$gendercn=$_POST['gendercn'];
	$addresscn=$_POST['addresscn'];

	$sqlcn=" UPDATE users SET name='$tencn',birthday='$birthcn',gender='$gendercn',address='$addresscn' ";
	$conn->exec($sqlcn);
	header('location: thongtincanhan.php');

} ?>

<?php if (isset($_POST['mkcu'])) {
	$mkcu=$_POST['mkcu'];
	$mkmoi1=$_POST['mkmoi1'];
	$mkmoi2=$_POST['mkmoi2'];
	if (password_verify($mkcu,$_SESSION['account']['password'])) {
		if ($mkmoi1==$mkmoi2) {
							$iduser=$_SESSION['account']['id'];
							$mahoamk=password_hash($mkmoi1, PASSWORD_DEFAULT);
							$sqldoimk="UPDATE users SET password='$mahoamk' where id_user='$iduser' ";
							$conn->exec($sqldoimk);
							$ketquadoimk = 'ĐỔI MẬT KHẨU THÀNH CÔNG';
			
		}else  {
			$ketquadoimk='Mật khẩu mới không trùng khớp';
			
		}
	}else if (!password_verify($mkcu,$_SESSION['account']['password'])) {
		$ketquadoimk='Mật khẩu cũ không đúng';
		
	}


	
} ?>

<?php if (isset($_POST['anhusermoi'])){
	$iduser=$_SESSION['account']['id'];
	 $anhusermoi=$_POST['anhusermoi'];
	 $sqldoianh="UPDATE users SET image='$anhusermoi' where id_user='$iduser' ";
							$conn->exec($sqldoianh);
					header('location: thongtincanhan.php');
	
} ?>





<style type="text/css" media="screen">
	table td:hover{}
	a:hover{text-decoration: none}
</style>


<body style="background: #ddd">
<!-- div.header2 -->
    <?php include_once '_share/client/header.php' ?>
<!-- hết div.header2 -->

<div style="background-image: url(image/5.jpg);width:100%;height:250px;">
				<div style="background-image: url(image/Untitled-1.png);width:100%;height:250px;">
	
				
			<div style=" color: white;padding-top:1px;margin-left: 50px;font-size: 17px">
			<div style="width:150px;height:100px;background: none;margin-top: 140px;margin-left: 100px">

			<img src="public/images/user/<?php echo users($_SESSION['account']['id'])['image']; ?>"  style="width:150px;height:150px">
			<img src="image/mayanh.png"  data-toggle="modal" data-target="#myModal"  style="width:45px;height:30px;position: absolute;margin-left: -150px;margin-top: 120px">
			  <!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog" style="color:black">
	
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			       	<h5 class="modal-title">Cập nhập ảnh </h5>
			          <button type="button" class="close" data-dismiss="modal">X</button>
			
			        </div>
			        <div class="modal-body">
			        <form action="" method="POST" accept-charset="utf-8">
			        		
			         <input type="file" name="anhusermoi" >

			        </div>
			        <div class="modal-footer">
			           <button type="submit" class="btn btn-primary">Cập nhập</button>
			       </form>
			        </div>
			      </div>
			      
			    </div>
			  </div>

		</div>
				</div>
			</div>

			</div>



<div class="ttcnbody">
	<div class="row">

		<div style="background: white;width:300px;height:300px;text-align: center;border-radius: 5%;float: left;font-size: 14px">
			<table class="table">
			
				<tbody>
			<!--  -->
					<tr>
						<td><a href="thongtincanhan.php">Thông tin cá nhân</a></td>
					</tr>
					<tr>
						<td><a href="thongtincanhan.php?doimatkhau">Đổi mật khẩu</a></td>
					</tr>
				</tbody>
			</table>
			
		</div>
		<?php if (!isset($_GET['doimatkhau'])){ ?>
			
		

		<div style="background: white;width:700px;height:500px;border-radius: 5%;margin-left: 50px">
			<div class="bodyphaittcn">
				<p style="text-align: center;font-weight: bold">Thông tin cá nhân </p>
				<div>
					<p style="font-size: 14px;font-weight: bold">Cập nhật thông tin cá nhân</p>
					<div class="row">

						<div class="col-md-2" style="background: white">
							<p>Họ và tên</p>
							<p>Ngày sinh</p>
							<p>Giới tính</p>
							<p>SĐT</p>
							<p>Email</p>
							<p style="margin-top: 30px">Địa chỉ</p>
						</div>
						<div class="col-md-8" style="background: white">
					<form method="POST">
							<input  type="text" class="form-control" name="tencn" value="<?php echo users($_SESSION['account']['id'])['name']; ?>">
							<input type="date" class="form-control" name="birthcn" value="<?php echo users($_SESSION['account']['id'])['birthday']; ?>">
							<select name="gendercn" class="form-control" style="margin-top: 5px;">
								<?php if (($_SESSION['account']['gender'])==1){ ?>
								<option value="1" selected="">Nam</option>
								<option value="2">Nữ</option>
								<?php }elseif (($_SESSION['account']['gender'])==2) {  ?>
								<option value="1">Nam</option>
								<option value="2" selected="">Nữ</option>
								<?php } ?>
							
							</select>
							<input type="number" class="form-control" name="" disabled="" value="<?php echo users($_SESSION['account']['id'])['phone_numbers']; ?>">
							<input type="email" class="form-control" name="" disabled value="<?php echo users($_SESSION['account']['id'])['email']; ?>">
							<input type="text" class="form-control" name="addresscn"  value="<?php echo users($_SESSION['account']['id'])['address']; ?>">
						</div>
						<button type="submit" class="btn btn-primary" style="margin: auto;margin-top: 10px">Cập nhập thông tin</button>
					</form>
					</div>

				</div>
			</div>
		</div>

	<?php }elseif (isset($_GET['doimatkhau'])) {?>

				<div style="background: white;width:700px;height:350px;border-radius: 5%;margin-left: 50px">
			<div class="bodyphaittcn" style="height:300px">
				<p style="text-align: center;font-weight: bold">Đổi mật khẩu</p>
				<div>
				
					<div class="row">

						<div class="col-md-3" style="background: white">
							<p>Mật khẩu cũ</p>
							<p>Mật khẩu mới</p>
							<p>Nhập lại mật khẩu mới</p>
							
						</div>
						<div class="col-md-8" style="background: white">

					<form action="" method="POST" accept-charset="utf-8">
								
								
							
							<input  type="password" class="form-control" name="mkcu">
							<input  type="password" class="form-control" name="mkmoi1">
							<input  type="password" class="form-control" name="mkmoi2">
							
								
							
						</div>
						<button type="submit" class="btn btn-primary" style="margin: auto;margin-top: 10px">Đổi mật khẩu</button>

						</form>

					</div>
					<?php if (isset($ketquadoimk)){ echo $ketquadoimk;}?>
				</div>
			</div>
		</div>
		
	<?php } ?>


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