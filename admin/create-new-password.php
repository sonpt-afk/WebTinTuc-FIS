<?php

// Require database & thông tin chung
require_once 'core/init.php';
// require_once 'templates/signin.php';

// Require header
require_once 'includes/header.php';

require_once 'reset/reset-password.php';


// Require footer
require_once 'includes/footer.php';


?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php 
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if(empty($validator) || empty($selector)){
                    echo 'Co loi xay ra , khong the gui request cua ban !';
                }else{
                    if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
                        ?>
                        <form action="reset/reset-password.php" method="post" enctype="multipart/form">
                            <input type="hidden" name="selector" value="<?php echo $selector ?>">
                            <input type="hidden" name="validator" value="<?php echo $validator ?>">
                            <input type="password" name="pwd" placeholder="Enter new password">
                            <input type="password" name="pwd-repeat" placeholder="Repeat new password">
                            <button type="submit" name="reset-passoword-submit">Reset password</button>
                        </form>
                        <?php
                    }
                }
            ?>
		</div><!-- dib.col-md-6 -->
	</div><!-- div.row -->
</div><!-- div.container -->