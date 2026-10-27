<?php
// Nhúng thư viện PHPMailer
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Cấu hình máy chủ SMTP Gmail
    $mail->isSMTP();
    $mail->CharSet    = 'UTF-8';
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    
    // Điền thông tin Gmail và Mật khẩu ứng dụng của bạn vào đây
    $mail->Username   =  'uyenhpb.25it@vku.udn.vn'; 
    $mail->Password   = 'vayzfhgvivijpxml'; // Mật khẩu ứng dụng vừa tạo
    
    $mail->SMTPSecure = 'ssl'; // Hoặc 'tls' (nếu tls thì dùng port 587)
    $mail->Port       = 465;

    // Người gửi và người nhận
    $mail->setFrom('uyenhpb.25it@vku.udn.vn', 'Tên Người Gửi');
    $mail->addAddress('huynhphanbaouyen2409@gmail.com', 'Tên Người Nhận');
    // Nội dung Email
    $mail->isHTML(true);
    $mail->Subject = 'Test tính năng gởi email';
    $mail->Body    = 'Nội dung email <b>gửi thành công!</b>';

    $mail->send();
    echo 'Đã gửi mail thành công!';
} catch (Exception $e) {
    echo "Gửi mail thất bại. Lỗi: {$mail->ErrorInfo}";
}