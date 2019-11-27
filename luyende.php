<?php require "./commont/connect.php" ?>	
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Luyện đề</title>
		<link rel="stylesheet" href="css.css">
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
		<script src="public/js/jquery-3.4.1.slim.min.js"></script>
		<script src="public/js/popper.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
</head>



<body style="background: #ddd">
<!-- div.header2 -->
    <?php include_once '_share/client/header.php' ?>
<!-- hết div.header2 -->



<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div style="margin-bottom: 10px;margin-top:10px ">
			<select  class="btn btn-default" name="" style="background: white;border: 1px solid gray">
				<option value="">Chọn Môn</option>
				<option value="">Toán</option>
				<option value="">Văn</option>
				
			</select>
			<select  class="btn btn-default" name="" style="background: white;border: 1px solid gray">
				<option value="">Chọn Lớp</option>
				<option value="">Lớp 10</option>
				<option value="">Lớp 11</option>
				<option value="">Lớp 12</option>
			</select>
			<button type="submit" class="btn btn-primary" >Tìm Kiếm</button>

			</div>



	<div class="row">
		<?php foreach ($rowsubcategory as $value){ ?>
	
			<div class="col-md-6">
			
			<div class="hangluyende">
			<div style="background: #0062cc;width:100%;height:30px;text-align: center;color: white;font-size: 17px;font-weight: bold"><?php echo $value['name_subcategory'].' - '.category($value['id_category'])['name_category'] ?></div>
			<div class="boxde">
				<table  class="table table-striped" style="font-size: 14px">
				
						<thead>
							<tr>
						
							</tr>
						</thead>
					<tbody>
					<?php 
					$idsub=$value['id_subcategory'];

					 ?>

<?php foreach (test_sub($idsub) as $value){ ?>
			
					<!--  BẮT ĐẦU TEST -->
					<div class="modal" id="myModal<?php echo $value['id_test']?>" style="margin-top: 100px">
					  <div class="modal-dialog">
					    <div class="modal-content">

					      <!-- Modal Header -->
					      <div class="modal-header">
					        <h4 class="modal-title"><?php echo test($value['id_test'])['name_test'] ;?></h4>
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					      </div>
					      <!-- Modal footer -->
					      <div class="modal-footer">
					      	<a href="baithi.php?idtest=<?php echo $value['id_test']; ?>" class="btn btn-info" style="width:100%" >Bắt đầu ngay</a>
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					      </div>

					    </div>
					  </div>
					</div>
					<!-- KẾT THÚC TEST -->

						<tr>

							<td><a href="<?php echo $value['id_test']; ?>" data-toggle="modal" data-target="#myModal<?php echo $value['id_test']?>"class="thea"><img src="image/de.png" style="width:20px"> 
								<?php echo test($value['id_test'])['name_test'] ?></a></td>
						</tr>



				<?php 
			} ?>

						<tr>
							<td style="float: right;"><a href="danhsachde.php?idde=<?php echo $value['id_subcategory'] ?>" >Xem thêm >></a></td>
						</tr>
					</tbody>
				</table>


			</div>
		</div>

				

			<!-- 	<div class="row">
					<div class="col-md-6">Đề thi THPT số 1</div>
					<div class="col-md-6">Đề thi THPT số 1</div>
					<div class="col-md-6">Đề thi THPT số 1</div>
					<div class="col-md-6">Đề thi THPT số 1</div>
					
				</div> -->
				
				</div>
			

			<?php } ?>



				











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