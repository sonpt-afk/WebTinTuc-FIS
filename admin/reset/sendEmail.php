<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Gửi email thông qua SMTP google trong PHP</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="main">
<h1>Gửi email thông qua google smtp</h1>
<div id="login">
<h2>Gmail SMTP</h2>
<hr/>
<form action="gui_email_smtp.php" method="post">
<input type="text" placeholder="Vui lòng nhập email của bạn" name="email"/>
<input type="password" placeholder="Mật khẩu" name="password"/>
<input type="text" placeholder="To : Email của bạn " name="toid"/>
<input type="text" placeholder="Subject : " name="subject"/>
<textarea rows="4" cols="50" placeholder="Vui lòng nhập nội dung email ..." name="message"></textarea>
<input type="submit" value="Gửi" name="send"/>
</form>
</div>
</div>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\THnews\admin\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\THnews\admin\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\THnews\admin\PHPMailer\src\SMTP.php';

if(isset($_POST['send']))
{
$email = 'sonbappe89@gmail.com';//$_POST['email'];
$password = 'Conbokien2002';//$_POST['password'];
$to_id = 'sonphamtrung2002@gmail.com';//$_POST['toid'];
$message = 'anh minh dep trai the'; //$_POST['message'];
$subject = 'test mail';//$_POST['subject'];
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message đã gửi!</p>';
}
}
else{
echo '<p id="para">Vui lòng nhập đúng thông tin</p>';
}
?>
</body>
</html>