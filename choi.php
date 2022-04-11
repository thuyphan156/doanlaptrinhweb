<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="style2.css"rel="stylesheet"type="text/css" >
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
				<li> <a href="" >Giới thiệu </a></li>
				<li> <a href >Khuyến mãi </a></li>
				<li> <a href="order.php" >Sản phẩm </a></li>
				<li> <a href >Site map </a></li>
				<li> <a href >Liên hệ </a></li>
		</ul>
	</div>
	<div id="main">
		<div id="left">
			<div class="main_left" >
			
				<b>Danh mục sản phẩm: </b>
			<ul>
				<li>ĐỒNG PHỤC</li>
				<li>CHỔI PHÉP THUẬT</li>
				<li>SÁCH BÙA CHÚ</li>
				<li>MŨ PHÙ THỦY</li>
				<li>Dụng cụ Quidditch</li>
				<li>Khác</li>
			</ul>
			</div>
		</div>
	<!-- -->
		<div id="center"><h1 align="center"> Danh sách chổi bay </h1>
		
		<div class="container">
			<div class="product-items">
			<?php
				$conn =mysqli_connect("localhost","root","","quanlybanhang") or die (mysqli_connect_error());

				$sql= "SELECT * FROM `hanghoa` WHERE TenHH LIKE '%Choi%'";
				$result= mysqli_query($conn,$sql) or die(mysql_error());

				while($row=mysqli_fetch_array($result)){
					echo "<div id='sanpham'>";
					echo "<form method = 'post' action='detail.php'>";
					echo "<img src='" . $row["img"]."'>";
					echo "<p>Tên sản phẩm: ".$row["TenHH"]."</p>";
					echo "<p>Giá: ".$row["Gia"]."</p>";
						
					echo "<p><input type = 'text' name='mahang' value='".$row["MSHH"]."' class ='t'></p>";
					echo "<p><input type ='submit' name= ' mua ' value ='Xem chi tiết &amp Mua' class='tt'></p>";
					echo "</form>";
					echo "</div>";
				}
				echo "</table>";
			?>
			</div>
		</div>

	<div id="footer">Thông tinh liên hệ:081 88 44 66
	
	</div>
</body>
</html>


