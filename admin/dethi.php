<?php require_once '../commont/connect.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="cssadmin.css">
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
	<script src="../public/js/jquery-3.4.1.slim.min.js"></script>
	<script src="../public/js/popper.min.js"></script>
	<script src="../public/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="w-100">
		<div class="row " style="width: 100%">
		<div class="col-md-2" style="background: url('../image/menu.jpg');">

			<div class="ten">
			</br>
				<img src="../image/2.jpg" style="width:50px;height:50px;border-radius: 100%;margin-left: 5px"> 
				&nbsp;&nbsp;Nguyễn Thanh
			</div>
			<div class="menu">
				<div class="boxmenu">
					<a href="danhmuc.html" class="thea2"><p>Quản lí danh mục</p></a>
				</div>
				
				<div class="boxmenu">
					<a href="khoahoc.html" class="thea2"><p>Quản lí khóa học</p></a>
				</div>
					<div class="boxmenu">
					<a href="giaovien.html" class="thea2"><p>Quản lí giáo viên</p></a>
				</div>
					<div class="boxmenu">
					<a href="taikhoan.html" class="thea2"><p>Quản lí tài khoản</p></a>
				</div>
				<div class="boxmenu">
					<a href="" class="thea2"><p>Quản lí đề thi</p></a>
				</div>
				<div class="boxmenu">
					<a href="" class="thea2"><p>Quản lí bình luận</p></a>
				</div>
				<div class="boxmenu">
					<a href="" class="thea2"><p>Quản lí slide - quảng cáo</p></a>
				</div>

			</div>

			
		</div>

		
		<div class="col-md-10" style="background: #ddd">
			<div class="headerad">

						<div class="btn-group" style="float: right;">
						  <button type="button" class="btn btn-info" style="font-size: 14px">	<img src="../image/2.jpg" style="width:40px;height:35px;border-radius: 100px;"> Nguyễn Thanh Tuấn</button>
						  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <div class="dropdown-menu">
						    <a class="dropdown-item" href="thongtincanhan.html">Thông tin cá nhân</a>
						    <a class="dropdown-item" href="#">Đăng xuất</a>
						  <!--   <a class="dropdown-item" href="#">Something else here</a>
						    <div class="dropdown-divider"></div>
						    <a class="dropdown-item" href="#">Separated link</a> -->
						  </div>
						</div>
			</div>
			<div class="bodyad">
				<div class="thanbody">
				<p style="font-size: 20px;width:1000px;height:50px;background: white;line-height: 50px;padding-left: 10px;border-radius: 10px">Quản lí đề thi</p>

				<div class="noidung">
					<a href="themde.php" class="btn btn-info">Thêm đề thi </a>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>MÃ ĐỀ</th>
								<th>TÊN ĐỀ</th>
								<th>MÔN</th>
								<th>SỐ CÂU</th>

							<!-- 	<th>thong_tin</th> -->
							<!-- 	<th>header</th> -->
								<th colspan="3">CHỨC NĂNG</th>
							</tr>
						</thead>
						<tbody>


							<!--  TÍNH TỔNG SỐ CÂU -->

					
							<?php foreach ($rowtest as $value){ 
								$idtest=$value['id_test'];
								$sqlsocau ="SELECT COUNT(*) as total FROM test_question WHERE id_test='$idtest' " ;
								$querysocau=$conn->prepare($sqlsocau);
								$querysocau->execute();
								$rowsocau= $querysocau->fetch(PDO::FETCH_ASSOC); 

							// LẤY MÔN HỌC

								$idquestion=test_question($idtest)['id_question'];
								$idmon=question($idquestion)['id_subcategory'];
								$idcategory=subcategory($idmon)['id_category'];

								?>
								
								
						
							<tr>
								<td><?php echo $value['id_test']; ?></td>
								<td><?php echo $value['name_test']; ?></td>
								<td><?php echo subcategory($idmon)['name_subcategory'].' - '.category($idcategory)['name_category']; ?></td>
								<td><?php echo   $rowsocau['total'] ?></td>
								<td>
								<a href="suade.php?idsuade=<?php echo $value['id_test']; ?>"  class="btn btn-info">Chi tiết</a>
								
								<a href=""  class="btn btn-danger">Xóa</a>
								</td>
							</tr>

							<?php } ?>

						</tbody>
					</table>



					
				</div>
				</div>
				
			</div>
		</div>




		</div>
	</div>
</body>
</html>