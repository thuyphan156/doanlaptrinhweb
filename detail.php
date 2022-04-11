<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<link href="style2.css"rel="stylesheet"type="text/css" />

		<style>
		#hinh{
			float:left;
			width: 50%;
			margin:1% ;
			padding: 10px;
			box-sizing: border-box;
			line-height:13px ;
			
		}
		.detail{
			
			text-align:left;
		
		}
		img{
			
			max-width: 90%;
			margin-right: 1px;
			margin-bottom: 2px;
		}
		.form{
			border:1px solid blue;
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
					   echo ''.$_SESSION['HoTenKH']."<br/>";
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
	<div id="benner">
	
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
			<h3>Danh sách chức năng</h3>
			<ul>
				<li><a href="choi.php">CUỘC THI TAM PHÁP THUẬT</a></li>
				
				<li><a href="dongphuc.php">Đồng phục</a></li>
				<li><a href="#">CÂU LẠC BỘ QUIDDITCH</a></li>
				<li><a href="#">Khác</a></li>	
			</ul>
			</div>

		</div>
	
		<div id="center">
			<?php
				$conn =mysqli_connect("localhost","root","","quanlybanhang") or die (mysqli_connect_error());

				$sql= "SELECT * FROM Hanghoa where MSHH='".$_POST['mahang']."'";
				$result= mysqli_query($conn,$sql) or die(mysql_error());

			while($row=mysqli_fetch_array($result)){
				echo "<div id='hinh'>";
				
				echo "<img src='" .$row["img"]."'>";
				echo "</div>";
				
				echo "<div class='detail' >";
				echo "<table >";
				echo "<form method = 'POST' action='order.php'  >";
				
				
				echo "<p ><h3 style='color:blue;'>Tên sản phẩm : '".$row["TenHH"]."'</h3></p>";
				echo "<p style='color:blue;'>Mô tả sản phẩm: ".$row["MoTaHH"]."</p>";
				echo "<p style='color:blue;'>Mã sản phẩm:<input type = 'text' name='mahang' value='".$row["MSHH"]."'></p>";
				
				echo "<p style='color:red;'>Giá:<input  name='gia' value=".$row["Gia"]."> vnd</p>";
				echo "<p style='color:blue;'>Số lượng:<input type='text' name='soluong'>".$row['SoLuongHang']." sản phẩm có </p>";
				
				echo "<p style='color:blue;'> Địa chỉ: <input type= 'text' name = 'diachi' value =''></p>";
				echo "<p style='color:blue;'> Số điện thoại: <input type= 'text' name = 'sđt' value =''></p>";
				echo "<p style='color:blue;'><input type ='submit' name= 'buy' value ='Mua ngay' class='tt'></p>";
				echo "</form>";
				echo "</table>";
				echo "</div >";
			}

			
			?>
			
			
		</div>
	
		

	</div>

	<div id="footer">Thông tinh liên hệ:081 88 44 66
	
	</div>
</body>
</html>