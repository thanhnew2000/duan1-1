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

<?php if (isset($_GET['idde'])) {
	$idde=$_GET['idde'];
	
} ?>



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

<?php 

		$sqltest2 ="select * from test where id_subcategory='$idde' order by id_test desc ";
		$querytest2  =$conn->prepare($sqltest2);
		$querytest2->execute();
		$rowtest2  = $querytest2->fetchAll(PDO::FETCH_ASSOC);
 ?>

	<div class="row">

	
			<div class="col-md-12">
			
			<div style="width: 100%;height:80%;background: white">
			<div style="background: #0062cc;width:100%;height:30px;text-align: center;color: white;font-size: 17px;font-weight: bold">
				<?php echo subcategory($idde)['name_subcategory']; ?>
			</div>
			<div class="boxde3" style="margin-bottom: 200px;width: 100%;background: none;float: left;margin-top:5px">
				<table  class="table table-striped" style="font-size: 14px">
				
						<thead>
							<tr>
						
							</tr>
						</thead>
					<tbody>
					<?php foreach ($rowtest2 as  $value){?>
						
					

						<tr>
							<td><a href="<?php echo $value['id_test']; ?>" class="thea"><img src="image/de.png" style="width:20px"> 
								<?php echo test($value['id_test'])['name_test'] ?></a></td>
						</tr>
<?php  } ?>

				</tbody>
				</table>

				
</div></div>

</div></div>








		

		

	

	</div>
</div>
</div>




<!-- div.header2 -->
    <?php include_once '_share/client/footer.php' ?>
<!-- hết div.header2 -->
	</div>
	
	
</body>
</html>