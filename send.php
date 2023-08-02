<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'benromdhane.mohamedaziz@esprit.tn';
    $mail->Password = 'xchvnfdhrxuprdxy';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('benromdhane.mohamedaziz@esprit.tn');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];
    $mail->send();
    echo "<script>
alert('Sent Successfuly');
document.location.href = 'mail.php';
</script>
";
}
?>