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


	<?php 
		 if (isset($_GET['idxoade'])) {
		$idxoade=$_GET['idxoade'];
		$sqlxoade="DELETE FROM test WHERE id_test='$idxoade' " ;
		$conn->exec($sqlxoade);

		header("location: dethi.php ");

	}
	 ?>
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
				<p style="font-size: 20px;width:1000px;height:50px;background: white;line-height: 50px;padding-left: 10px;border-radius: 10px;color: #17a2b8;font-weight: bold">QUẢN LÍ ĐỀ THI</p>

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
								if (isset($idquestion)) {
								$idmon=question($idquestion)['id_subcategory'];
								$idcategory=subcategory($idmon)['id_category'];

								}
								
								
								?>
								
								
						
							<tr>
								<td><?php echo $value['id_test']; ?></td>
								<td><?php echo $value['name_test']; ?></td>
								<td><?php echo subcategory($idmon)['name_subcategory'].' - '.category($idcategory)['name_category']; ?></td>
								<td><?php echo   $rowsocau['total'] ?></td>
								<td>
								<a href="suade.php?idsuade=<?php echo $value['id_test']; ?>"  class="btn btn-info">Chi tiết</a>
								
								<a href="dethi.php?idxoade=<?php  echo $value['id_test']; ?>"  onclick="return confirm('Bạn có muốn xóa đề này?')" class="btn btn-danger">Xóa</a>
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