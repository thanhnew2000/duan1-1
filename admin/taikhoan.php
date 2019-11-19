<?php require "../commont/connect.php" ?>	
<?php session_start(); ?>
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
	<script src="../public/js/jquery-3.4.1.min.js"></script>
	<script src="../public/js/bootstrap.min.js"></script>


</head>

<?php if (isset($_GET['xoaid'])) {
	$xoaid=$_GET['xoaid'];
	$sqlxoatk="DELETE FROM users WHERE id_user='$xoaid' " ;
	$conn->exec($sqlxoatk);
	header('location: taikhoan.php');
} ?>
<body>
	<div class="w-100">
		<div class="row " style="width: 100%;height:800px">

<!--  MENU -->
 <?php include_once '../_share/admin/menu.php' ?>
 <!-- HẾT MENU -->
		
		<div class="col-md-10" style="background: #ddd">
	
<!--  HEADER -->
 <?php include_once '../_share/admin/header.php' ?>
 <!-- HẾT HEADER -->
			<div class="bodyad">
				<div class="thanbody">
				<p style="font-size: 20px;width:1000px;height:50px;background: white;line-height: 50px;padding-left: 10px;border-radius: 10px">Quản lí tài khoản</p>

				<div class="noidung">
					<!-- <button type="submit" class="btn btn-info">Thêm giáo viên </button> -->
					<table class="table table-striped">
						<thead>
							<tr>
								<th>id_user</th>
								<th>name</th>
								<th>phone</th>
							<!-- 	<th>thong_tin</th> -->
								<th>email</th>
								<th>birthday</th>
								<th>gender</th>
								<th>status</th>
								<th>role_id</th>
								

							<!-- 	<th>header</th> -->
								<th colspan="3">Chức năng</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($rowtaikhoan as $value){?>
								
							
							<tr>
								<td><?php echo $value['id_user']; ?></td>
								<td><?php echo $value['name']; ?></td>
								<td><?php echo '0'.$value['phone_numbers']; ?></td>
								<td><?php echo $value['email']; ?></td>
								<td><?php echo $value['birthday']; ?></td>
								<td><?php echo $value['gender']; ?></td>
								<td><?php if ($value['status']==1) {	
									echo 'Hoạt động'	;
								}elseif ($value['status']==0) {
									echo 'Khóa'	;
								} ?></td>
								<td><?php echo $value['role_id']; ?></td>
								<td><a href="chitiettaikhoan.php?idtk=<?php echo $value['id_user'];  ?>"  class="btn btn-info">Chi tiết</a>	
								<a href="taikhoan.php?xoaid='<?php echo $value['id_user'];  ?>'" onclick="return confirm('Bạn có muốn xóa tài khoản này')"  class="btn btn-danger">Xóa</a>
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