<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['username'];
		$matkhau = '';

		if($email=='admin'){
			header("Location: admin/index.php");
		}
		else{
			echo '
						<div class="row justify-content-center" >
							<div class="text-danger">Sai Mật Khẩu</div>
						</div>';
			
		}
	} 
?>
<div class="row justify-content-center" style="margin-bottom: 18%;">

							<div class="col-lg-8">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Please Sign In!</h1>
									</div>
									
									<form class="user"
										
										method='POST'>
										
										<div class="form-group">
											<input type="text" class="form-control form-control-user"
												name='username' placeholder="Username">
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user"
												name='password' placeholder="Password">
										</div>
									
										<hr>
										<button class="btn btn-primary btn-user btn-block"
											type="submit" name="dangnhap">Login</button>

									</form>

								</div>
							</div>
						</div>
