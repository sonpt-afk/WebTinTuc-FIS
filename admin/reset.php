<?php

// Require database & thông tin chung
require_once 'core/init.php';
// require_once 'templates/signin.php';

// Require header
require_once 'includes/header.php';

// require_once 'reset/reset-password.php';
// require_once 'reset/reset-request.php';


// Require footer
require_once 'includes/footer.php';


?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<p>Vui lòng nhập email để nhận hướng dẫn đặt mật khẩu mới.</p>
			<form action='reset/reset-request.php' method="POST" id="formSignin" >
				<div class="form-group">
					<div class="input-group">
			  			<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			  			<input type="text" class="form-control" placeholder="Email" id="email">
					</div><!-- div.input-group -->
				</div><!-- div.form-group -->
				<div class="form-group">
					<div class="input-group">
					</div><!-- div.input-group -->
				</div><!-- div.form-group -->
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name='reset-request-submit'>Gửi</button>
					<p></p>
				</div><!-- div.form-group -->
				<div class="alert alert-danger hidden"></div>
			</form><!-- form#formSignin -->
			<?php 
				if(isset($_GET["reset"])){
					if($_GET["reset"] == "success"){
						echo '<p class="signupsuccess">Check mail cua ban nhe !</p>';
					}
				}
			
			
			?>
		</div><!-- dib.col-md-6 -->
	</div><!-- div.row -->
</div><!-- div.container -->