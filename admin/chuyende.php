<?php require "../commont/connect.php";session_start();  ?>	
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

<?php 
if (isset($_GET['xoaid'])) {
	$idxoa=$_GET['xoaid'];

		$sqlxoalesson="DELETE FROM lesson WHERE id_topic='$idxoa' " ;
		$conn->exec($sqlxoalesson);

		$sqlxoatopic="DELETE FROM topic WHERE id_topic='$idxoa' " ;
		$conn->exec($sqlxoatopic);
		header("location: chuyende.php");
}
 ?>


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
				<p style="font-size: 20px;width:1000px;height:50px;background: white;line-height: 50px;padding-left: 10px;border-radius: 10px;color: #17a2b8;font-weight: bold">QUẢN LÍ CHUYÊN ĐỀ</p>

				<div class="noidung">
					<a href="chitietchuyende.php?themchuyende" class="btn btn-info">Thêm chuyên đề </a>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>ID CHUYÊN ĐỀ</th>
								<th>TÊN CHUYÊN ĐỀ</th>
								<th>ID KHÓA HỌC</th>
							<!-- 	<th>thong_tin</th> -->
							<!-- 	<th>header</th> -->
								<th colspan="3">CHỨC NĂNG</th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($rowtopic as $value){ ?>
							<tr>
								<td><?php echo $value['id_topic']; ?></td>
								<td><?php echo $value['name_topic']; ?></td>
								<td><?php echo $value['id_course']; ?></td>
								
					
						
								<td><a href="chitietchuyende.php?idchuyende=<?php echo $value['id_topic'];  ?>"  class="btn btn-info">Xem</a>
						
								<a href="chuyende.php?xoaid=<?php echo $value['id_topic'];  ?>" onclick="return confirm('Bạn có muốn xóa chuyền đề này không')"  class="btn btn-danger">Xóa</a>
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