<?php require "./commont/connect.php" ?>	
<?php session_start(); 

if (isset($_GET['idde'])){
	$idde=$_GET['idde'];
}
if (!isset($_SESSION['account'])) {
	header("location: dangnhap.php");
}
?>
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
<style type="text/css" media="screen">

.otron{width: 26px;height:25px;border:1px solid #17a2b8;float: left;text-align: center;padding-left: -15px;line-height: 21px}	
</style>
<?php if (isset($_GET['idtest'])) {
	$idtest=$_GET['idtest'];
	$time=test($idtest)['time_test'];
} ?>

<!--  THỜI GIAN LÀM ĐỀ -->


 <script language="javascript">
 function clickFunction() {
  document.getElementById("myCheck").click();
}
var myVar = setInterval(clickFunction, <?php echo $time*60000 ?>);


            var h = null; // Giờ
            var m = null; // Phút
            var s = null; // Giây
            
            var timeout = null; // Timeout
            var a=0;
            window.onload = function start()
            {
            	
        
         		              /*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
              if (h === null)
              {
                  h = parseInt(document.getElementById('h_val').value);
                  m = parseInt(document.getElementById('m_val').value);
                  s = parseInt(document.getElementById('s_val').value);
              }

              /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
              // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
              //  - giảm số phút xuống 1 đơn vị
              //  - thiết lập số giây lại 59
              if (s === -1){
                  m -= 1;
                  s = 59;
              }

              // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
              //  - giảm số giờ xuống 1 đơn vị
              //  - thiết lập số phút lại 59
              if (m === -1){
                  h -= 1;
                  m = 59;
              }

              // Nếu số giờ = -1 tức là đã hết giờ, lúc này:
              //  - Dừng chương trình
              if (h == -1){
                  // clearTimeout(timeout);
                  alert('Hết giờ');
                  return false;
              }

              /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/
              document.getElementById('h').innerText = h.toString();
              document.getElementById('m').innerText = m.toString();
              document.getElementById('s').innerText = s.toString();

              /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
              timeout = setTimeout(function(){
                  s--;
                  start();
              }, 1000);
				}
            
     
        </script>




















<body style="background: #ddd">
	<!-- div.header2 -->
    <?php include_once '_share/client/header.php' ?>
<!-- hết div.header2 -->

</br>
<?php 
		$sqltinhsocau="SELECT COUNT(*) as total FROM test_question WHERE id_test='$idtest' " ;
		$querytinhsocau=$conn->prepare($sqltinhsocau);
		$querytinhsocau->execute();
		$rowtongcau= $querytinhsocau->fetch(PDO::FETCH_ASSOC);
 ?>
 		<?php $sodung=0;
 			if (isset($_POST['hoanthanh'])) {
 				$arr=$_POST;
 				
 					foreach ($arr as $key => $value) {
 						if (is_numeric($key)) {
 					
 						if ($value==question($key)['answer']) {
 							$sodung += 1;
 						
 						}else  {
 							$sodung = $sodung;
 						}
 						
 					}
 				}$diem1cau=10/$rowtongcau['total'];
 			} 

 		 ?>


<?php if (!isset($_POST['hoanthanh'])){ ?>
	

	<div class="row" style="width:1347px">

	<!--  JAVASCRIPT CHO Ô HIỆN ĐÃ CHỌN HAY CHƯA-->
		<script type="text/javascript">
			function anvao(){
		<?php foreach (test_questionAll($idtest) as $key => $value){ ?>
			var checkbox =document.getElementsByName(<?php echo $value['id_question'] ?>);
			 for (var i = 0; i < checkbox.length; i++){
			if (checkbox[i].checked === true) {
				 document.getElementById("<?php echo $value['id_question'] ?>").style.background  = '#17a2b8';

			}}
			<?php } ?>
		}

		</script>



			<div class="col-md-2 offset-md-1" style="background: white;padding-top: 10px;padding-bottom: 10px;border-radius: 10px;height:500px">
				<!-- <img src="image/dongho.png" style="width:20px;margin-left: 80px;"> <?php echo test($idtest)['time_test'] ?> </br></br> -->
			</br>
			<?php $socau=0 ?>
				<?php foreach (test_questionAll($idtest) as $value){ $socau+=1; ?>
					
				
				<p id="<?php echo $value['id_question'] ?>" style="float: left;margin-left: 10px;border-radius: 100%;color:white;">
					<span class="otron" style="border-radius: 50%;color:#c3cfdd"><?php echo $socau ?></span></p>

				<?php  }?>

				

				
			<form action="" method="POST" accept-charset="utf-8">
				
				
			
				

			<button type="submit" name="hoanthanh" id="myCheck" onclick = "clickFunction()"  class="btn btn-primary btn-sm" style="margin-left:120px;">Nộp bài</button>
			
			</div>
			
			<div class="col-md-6 offset-md-1" style="background: white;border-radius: 10px;float: left;">
			<p style="font-size: 17px;text-align: center;padding-top: 10px;font-weight: bold"><?php echo test($idtest)['name_test'] ?>

			<!-- 	<span style="float: right;color:#17a2b8"><?php if(isset($_POST['hoanthanh'])){
					echo $sodung.'/'.$rowtongcau['total'].' Điểm là :'.ROUND($diem1cau*$sodung,1);
				} ?></span></p>
		 -->

				<?php $socau=0 ?>
				<?php foreach (test_questionAll($idtest) as $key => $value){ 
					 $socau+=1;?>
			
					<div class="boxbailam">
							<b><?php echo $socau.' . '.question($value['id_question'])['name_question']; ?>
								
							</b>

							<div style="margin-left: 20px">
							<p><input type="radio" onclick="anvao()" name="<?php echo  $value['id_question'] ?>" value="a"> <?php echo 'A. '.question($value['id_question'])['a'] ?></p>
							<p><input type="radio" onclick="anvao()"  name="<?php echo  $value['id_question'] ?>" value="b"> <?php echo 'B. '.question($value['id_question'])['b'] ?> </p>
							<p><input type="radio" onclick="anvao()" name="<?php echo  $value['id_question'] ?>" value="c"> <?php echo 'C. '.question($value['id_question'])['c'] ?></p>
							<p><input type="radio" onclick="anvao()" name="<?php echo  $value['id_question'] ?>" value="d"> <?php echo 'D. '.question($value['id_question'])['d'] ?></p>
						</div>
					</div>
			<?php } ?>
		</div>
		<div class="col-md-1">


			<p style="position: fixed;background: white;padding-right: 10px;padding-bottom: 4px"><img src="image/dongho.png" style="width:20px;margin-left: 10px;"> 
	
		            <span id="h" style="display: none">Giờ</span> 
		            <span id="m">Phút</span> :
		            <span id="s">Giây</span>
				<!-- <?php echo test($idtest)['time_test'].'00:00' ?> -->
    
			</p>


		</div>
			</form>

<!--  ĐÃ HOÀN THÀNH -->

<?php }elseif (isset($_POST['hoanthanh'])) {
		
	?>

<!--  Đã hoàn thành lưu điểm vào đb -->
	







<!--  Hiện kết quả ra màn hinh -->

	
	
		
	


	<div style="width:500px;height:210px;background: white;margin: auto;margin-top: 10px" >
			<p style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 20px">KẾT QUẢ</p>
			<p style="text-align: center;">Số câu đúng :<?php echo  $sodung.'/'.$rowtongcau['total']; ?></p>
			<p style="text-align: center;">ĐIỂM : <?php echo ROUND($diem1cau*$sodung,1); ?> </p>
			<a style="margin-left: 200px" href="index.php" class="btn btn-primary">KẾT THÚC </a>
	  
	</div>
	<?php 	$diem=ROUND($diem1cau*$sodung,1);
			$iduser=$_SESSION['account']['id'];
			 $last=$connketqua->lastInsertId();
			 // if ($last==0) {
			 // 	 		$sqlluuketqua="INSERT INTO result_test VALUES ('','$iduser','$idtest','$diem')";
  		// 			$connketqua->exec($sqlluuketqua);
  		// 			echo $last;
			 // }else if ((result_test($last_id)['id_user']!==$iduser)&&(result_test($last_id)['id_test']!==$idtest)&&(result_test($last_id)['point']!==$diem)){
			 // 	echo " khác 0	";
			 // }
			 // if ((result_test($last_id)['id_user']==$iduser)&&(result_test($last_id)['id_test']==$idtest)&&(result_test($last_id)['point']==$diem)) {
			 	// echo $last;
			 // }else{
			 		$sqlluuketqua="INSERT INTO result_test VALUES ('','$iduser','$idtest','$diem')";
  					$connketqua->exec($sqlluuketqua);
			 // }
		
		
  			
  			
  			?>
<?php } ?>



		 <div style="display: none">
       
            <input type="text" id="h_val" placeholder="Giờ" hidden="" value="0"/> <br/>
            <input type="text" id="m_val" placeholder="Phút" hidden=""  value="<?php echo test($idtest)['time_test'] ?>"/> <br/>
            <input type="text" id="s_val" placeholder="Giây" hidden=""  value="00"/>
            <input type="button" onclick="start()" hidden="" value="Start" />
       <!--      <input type="button" value="Stop" onclick="stop()"/>  <br/> <br/> -->
        </div>






<div class="ttcnbody" style="height:100px">
<div class="row"></div>
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