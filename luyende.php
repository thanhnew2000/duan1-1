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



<!-- div.header2 -->
    <?php include_once '_share/client/footer.php' ?>
<!-- hết div.header2 -->
	</div>
	
	
</body>
</html>