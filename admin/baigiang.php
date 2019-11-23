<?php require "../commont/connect.php" ?>	
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
	<!--  MENU -->
 <?php include_once '../_share/admin/menu.php' ?>
 <!-- HẾT MENU -->

		
		<div class="col-md-10" style="background: #ddd">
		<!--  HEADER -->
 <?php include_once '../_share/admin/header.php' ?>
 <!-- HẾT HEADER -->
			<div class="bodyad">
				<div class="thanbody">
				<p style="font-size: 20px;width:1000px;height:50px;background: white;line-height: 50px;padding-left: 10px;border-radius: 10px;font-weight: bold;color:#17a2b8;">QUẢN LÍ BÀI GIẢNG</p>

				<div class="noidung">
					<a href="chitietbaigiang.php?thembaigiang" class="btn btn-info">Thêm bài giảng </a>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>ID BÀI GIẢNG</th>
								<th>TÊN BÀI GIẢNG</th>
								<th>ID CHUYÊN ĐỀ</th>
							<!-- 	<th>thong_tin</th> -->
							<!-- 	<th>header</th> -->
								<th colspan="3">CHỨC NĂNG</th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($rowlesson as $value){ ?>
							<tr>
								<td><?php echo $value['id_lesson']; ?></td>
								<td><?php echo $value['name_lesson']; ?></td>
								<td><?php echo $value['id_topic']; ?></td>
								
					
						
								<td><a href="chitietbaigiang.php?idbaigiang=<?php echo $value['id_lesson'];  ?>"  class="btn btn-info">Xem</a>
						
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