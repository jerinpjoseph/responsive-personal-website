<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if(isset($_POST["send"])){
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jerinpjoseph2001@gmail.com';
        $mail->Password = 'aorzsmgccdxskwgp';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $name=$_POST['name'];
        $email=$_POST['email'];

        $mail->setFrom($email , $name);

        $mail->addReplyTo($email , $name);

        $mail->addAddress("jerinpjoseph2023@gmail.com");

        $mail->isHTML(true);

        $mail->Subject = $_POST["subject"];
        
        $mail->Body = $_POST["message"];

        $mail->send();

        echo ("<script>
            window.alert('Send Successfully');
            window.location.href='contact.html';
            </script>");
    }
?>