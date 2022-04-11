<?php
	//Khai báo sử dụng session
	session_start();
	if(!isset($_SESSION['HoTenKH'])){
			header("Location: dangnhap.html");

	}
	 
	//Khai báo utf-8 để hiển thị được tiếng việt
	header('Content-Type: text/html; charset=UTF-8');
	 
	//Xử lý đặt hàng
	if (isset($_POST['buy'])) {
		//Kết nối tới database
		$conn =mysqli_connect("localhost","root","","quanlybanhang") ;//or die (mysqli_connect_error());
		 
		//Lấy dữ liệu nhập vào
		
		$t = "select * from dathang";
		$resul= mysqli_query($conn,$t);// or die (mysqli_error($conn));
		$maso = mysqli_num_rows($resul);
		//echo $maso;
		 
		//Lưu thông tin thành viên vào bảng
		$m ="SELECT * FROM KhachHang where HoTenKH ='".$_SESSION['HoTenKH']."'";
		$ngay =DATE("Y-m-d G:i:s");
		$KH = mysqli_fetch_array(mysqli_query($conn, $m));
		
		$b ="SELECT * FROM KhachHang where HoTenKH ='".$_SESSION['ten']."'";
		$p = mysqli_fetch_array(mysqli_query($conn, $b));
		//	echo $KH['MSKH'];
			do{
				$add1 =  "INSERT into dathang(SoDonDH, MSKH, NgayDH) VALUES('".$maso."','".$KH['MSKH']."','".$ngay."')";
				$result= mysqli_query($conn,$add1); //or die (mysqli_error($conn));
				if(!$result) echo "......................";
				if($result){
					$ms  = $_POST['mahang'];
					$sl  = $_POST['soluong'];
					$gia = $_POST['gia'];
					$add =  "INSERT into chitietdathang VALUES('".$maso."','".$ms."','".$sl."','".$gia."')";
					$result1 = mysqli_query($conn,$add);//or die (mysqli_error($conn));
					
					$a="SELECT SoLuongHang HangHoa WHERE MSHH='".$row["MSHH"]."' ";
					$aa = mysqli_query($conn, $a);
					
				}
				$maso++;
				
			}while(!$result);
			if(!$result1)
				echo "loi";	
		//Thông báo quá trình lưu
		if ($result && $result1)
			 header("location: trangchu.php");
		else
			echo "Có lỗi xảy ra trong quá trình đặt hàng. <a href='detail.php'>Thử lại</a>";
	}
?>