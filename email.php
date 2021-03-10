<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
  
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
  
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

    $remetente  = $_POST['remet'];
    $email = $_POST['email'];
    $assunto = $_POST['subject'];
    $corpo = htmlspecialchars($_POST['body']);
    

    try{
        $mail ->SMTPDebug = 2;
        $mail ->isSMTP();
        $mail ->Host = 'smtp.gmail.com';
        $mail ->SMTPAuth = true;
        $mail ->Username = 'ericktestes28@gmail.com';
        $mail ->Password = 'ericktestes2805';
        $mail ->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail ->setFrom($email,$remetente);
        $mail ->addAddress("ericktestes28@gmail.com");
        $mail ->isHTML(true);
        $mail ->Subject = $assunto;
        $mail ->Body = "Enviado por : $remetente 
        <br></br>
        Email :  $email  
        <br></br>
        $corpo " ;

        $mail ->send();
        echo "<script>window.location.href = 'index.php' 
        window.alert('Email Enviado com Sucesso');
        </script>";
        }
        catch(Exception $e){
            echo "<script>window.location.href = 'index.php' 
            window.alert('Email Não enviado');
            </script>";
        }
?>