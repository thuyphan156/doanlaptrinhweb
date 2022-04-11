<?php session_start(); 
 //<a href="trangchu.php">HOME</a>
if (isset($_SESSION['HoTenKH'])){
    unset($_SESSION['HoTenKH']); // xóa session login
}
	header("location: trangchu.php");
?>