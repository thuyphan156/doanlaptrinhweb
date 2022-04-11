<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="style2.css"rel="stylesheet"type="text/css" />
		<style>
			#sanpham{
				float:left;
				width: 18%;
				margin:1% ;
				padding: 10px;
				box-sizing: border-box;
				border:1px solid #ccc ;
				line-height:13px ;
				height: 400px;
			}
			img{
				max-width: 90%;
				margin-right: 1px;
				margin-bottom: 2px;
			}
			
		
		</style>

</head>
<body>
	<div id="header">	
		<ul>
			<li><a>
				<?php session_start(); ?>
				<?php 
				   if (isset($_SESSION['HoTenKH']) && $_SESSION['HoTenKH']){
					   echo ''.$_SESSION['HoTenKH']."<br>";
				   }
				   else{
					   echo 'Bạn chưa đăng nhập';
				   }
				   ?></a></li>
			<li><a href="dangnhap1.html">Đăng nhập</a></li>
			<li><a href="dangky.html">Đăng ký</a></li>
			<li><a href="thoat.php">Thoát</a></li>
		</ul>
		
	</div>
	<div id="benner"><h1 style="text-align:center;">WITCH STORE </h1>
		
	</div>
	<div id="menu">
		<ul>
				<li><a href="trangchu.php">Trang chủ</a></li>
				<li><a href="">Giới thiẹu</a></li>
				<li><a href="">Dịch vụ</a></li>
				<li><a href="">Tin tức </a></li>
				<li><a href="">Khuyến mãi</a></li>
				<li><a href="">Sản phẩm</a></li>
				<li><a href="">Ste map</a></li>
				
				
		</ul>
	</div>
	<div id="main">
		<div id="left">
			<div class="main_left" >
			<h2>Danh mục sản phẩm: </h2>
			<ul>
				<li><a href="dongphuc.php">ĐỒNG PHỤC</a></li>
				<li><a href="choi.php">CHỔI PHÉP THUẬT</a></li>
				<li><a href="#">SÁCH</a></li>
				<li><a href="">MŨ PHÙ THỦY</a></li>
				<li><a href="">Dụng cụ Quidditch</a></li>
				<li><a href="#">Khác</a></li>
			</ul>
			</div>

		</div>
	
		<div id="center">
			<?php
				$conn =mysqli_connect("localhost","root","","quanlybanhang") or die (mysqli_connect_error());

				$sql= "select * FROM HangHoa";
				$result= mysqli_query($conn,$sql) or die(mysql_error());

				while($row=mysqli_fetch_array($result)){
					echo "<div id='sanpham'>";
					echo "<form method = 'post' action='detail.php'>";
					echo "<img src='" . $row["Hinh"]."'/>";
					echo "<p>Tên sản phẩm: ".$row["TenHH"]."</p>";
					echo "<p>Giá: ".$row["Gia"]."</p>";
					
					echo "<p><input  name='mahang' value='".$row["MSHH"]."' class ='t'></p>";
					echo "<p><input type ='submit' name= 'mua' value ='Xem chi tiết &amp Mua' class='tt'></p>";
					echo "</form>";
					echo "</div>";
				}
				
				?>
		
		</div>
	

	</div>

	<div id="footer">Thông tinh liên hệ: 0809 33 55 88
	
	</div>
	
</body>
</html>