<?php
require_once 'core/init.php';
// Nếu đăng nhập
if ($user) 
{
    // Nếu tồn tại POST action
    if (isset($_POST['comment']))
    {
        // Xử lý POST action
 
        
            // Các biến xử lý thông báo
            $show_alert = '<script>$("#formAddPost .alert").removeClass("hidden");</script>';
            $hide_alert = '<script>$("#formAddPost .alert").addClass("hidden");</script>';
            $success = '<script>$("#formAddPost .alert").attr("class", "alert alert-success");</script>';
 
            // Nếu các giá trị rỗng
            if ($comment_add_post='')
            {
                echo $show_alert.'Vui lòng điền comment';
            }
            // Ngược lại
            else
            {
                $message = $_POST['comment'];
                $sql_add_comment = "INSERT INTO comments VALUES (
                    '',
                    '$message',
                )";
                $db->query($sql_add_comment);
                echo $show_alert.$success.'Thêm bình luận thành công.';
                $db->close(); // Giải phóng
                // header('Location: '.$_SERVER['PHP_SELF']);
                // die;
                new Redirect($_DOMAIN . 'commentSuccess.html');
                }
            
        }
                 // Ngược lại không tồn tại POST action
    else
    {
        new Redirect($_DOMAIN);
    }
}
                // Nếu không đăng nhập
                else
                {
                    new Redirect($_DOMAIN);
                }
                ?>