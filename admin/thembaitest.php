<?php 
require_once '../commont/connect.php';?>
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
				<p style="font-size: 20px;width:1000px;height:50px;background: white;line-height: 50px;padding-left: 10px;border-radius: 10px">Quản lí bài test - Thêm câu hỏi mới</p>

				<div class="noidung">
				
				<div class="row">
					
					<div class="col-md-4">
						<p style="font-size:20px;font-weight: bold">Nội dung câu hỏi</p>
						<p style="font-weight: bold">Môn:
						<select name="" class="form-control">
							<?php foreach ($rowsubcategory as $value){ ?>
							<option value="<?php echo $value['id_subcategory']?>" >
								<?php echo $value['name_subcategory'].' - '.category($value['id_category'])['name_category']; ?>
							 </option>

							<?php } ?>
						</select></p>
						<p style="font-weight: bold">Câu hỏi :
							<textarea name=""   rows="5" class="form-control"></textarea></p>
						<div style="font-weight: bold">Image :
						

						  <div class="custom-file mb-3">
						      <input type="file" class="custom-file-input" id="customFile" name="filename">
						      <label class="custom-file-label" for="customFile">Choose file</label>
						    </div>
						<script>
							
						// Add the following code if you want the name of the file appear on select
						$(".custom-file-input").on("change", function() {
						  var fileName = $(this).val().split("\\").pop();
						  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
						});
						</script>					
					</div>
						<p style="font-weight: bold">Mức độ :
							<select class="form-control">
								<option value="3">Dễ</option>
								<option value="2">TB</option>
								<option value="1">Khó</option>
								
							</select>
							</p>
					<!-- 		<input type="radio" class="radio" name="mucdo" >Dễ
							<input type="radio" class="radio" name="mucdo" >Dễ
							<input type="radio" class="radio" name="mucdo" >Dễ -->
					</div>
					<div class="col-md-5">
						<p style="font-size:20px;font-weight: bold">Danh sách trả lời</p>
				<div class="input-group mb-3" style="margin-top: 8px">
			    <div class="input-group-prepend">
			       <span class="input-group-text">Trả lời a</span>
			    </div>
			    <input type="text" name="tendsnew" class="form-control">
				 </div>

			<div class="input-group mb-3" style="margin-top: 8px">
			     <div class="input-group-prepend">
			       <span class="input-group-text">Trả lời b</span>
			    </div>
			    <input type="text" name="tendsnew" class="form-control">
			 </div>

			 <div class="input-group mb-3" style="margin-top: 8px">
			     <div class="input-group-prepend">
			       <span class="input-group-text">Trả lời c</span>
			    </div>
			    <input type="text" name="tendsnew" class="form-control">
			 </div>
			 <div class="input-group mb-3" style="margin-top: 8px">
			     <div class="input-group-prepend">
			       <span class="input-group-text">Trả lời d</span>
			    </div>
			    <input type="text" name="tendsnew" class="form-control">
			 </div>


			 	 <div class="input-group mb-3" style="margin-top: 8px">
			     <div class="input-group-prepend">
			       <span class="input-group-text">Đáp án</span>
			    </div>
			    <select name="" class="form-control" >
			    	<option value="a">A</option>
			    	<option value="b">B</option>
			    	<option value="c">C</option>
			    	<option value="d">D</option>
			    	
			    </select>
			 </div>
				
				<button type="submit" class="btn btn-info" style="float: right;">Thêm câu hỏi</button>




				</div>
				</div>

					
				</div>
				</div>
				
			</div>
		</div>




		</div>
	</div>
</body>
</html>