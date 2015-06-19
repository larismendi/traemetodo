<?php
/**
 * Created by PhpStorm.
 * User: larismendi
 * Date: 18/06/2015
 * Time: 07:08 PM
 */
date_default_timezone_set('America/New_York');
if(isset($_POST['nombre']) && isset($_POST['email'])){
    $txt = '';
    if(empty($_POST['nombre'])){
        $errores['nombre'] = true;
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errores['email'] = true;
    }
    if(empty($_POST['email_amigo1']) || !filter_var($_POST['email_amigo1'], FILTER_VALIDATE_EMAIL)){
        $errores['email_amigo1'] = true;
    }
    if(!empty($_POST['email_amigo2']) && !filter_var($_POST['email_amigo2'], FILTER_VALIDATE_EMAIL)){
        $errores['email_amigo2'] = true;
    }
    if(!empty($_POST['email_amigo3']) && !filter_var($_POST['email_amigo3'], FILTER_VALIDATE_EMAIL)){
        $errores['email_amigo3'] = true;
    }
    if(empty($_POST['mens_amigo'])){
        $errores['mens_amigo'] = true;
    }
    if(!isset($errores)){
        require_once("webapp/clases/database/database.class.php");
        require_once("webapp/web/clases/repuestosautos.class.php");
        $obj =new RepuestosAutos();

        $from    = "info@traemetodo.com";
        $subject = utf8_decode('Visita nuestra web traemetodo.com');

        $htmlx   = '';

        require_once('webapp/PHPMailer-master/class.phpmailer.php');

        $mail = new PHPMailer(); // defaults to using php "mail()"

        $mail->IsSendmail(); // telling the class to use SendMail transport

        $body = file_get_contents('webapp/mail/avisa/basic.html');

        $body = eregi_replace("[\]",'',$body);
        $body = eregi_replace("{nombre}",$_POST['nombre'],$body);
        $body = eregi_replace("{email}",$_POST['email'],$body);
        $body = eregi_replace("{mens_amigo}",$_POST['mens_amigo'],$body);
        $body = eregi_replace("{url}",$obj->con->url,$body);

        $mail->SetFrom   ($from,'traemetodo');

        $mail->AddReplyTo($from,'traemetodo');

        $mail->AddAddress($_POST['email_amigo1'],'');

        $mail->Subject = $subject;

        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

        $mail->MsgHTML($body);

        //$mail->AddAttachment("images/phpmailer.gif");      // attachment
        //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

        if($mail->Send()) {
            if(isset($_POST['email_amigo2']) && $_POST['email_amigo2']){
                $mail->AddAddress($_POST['email_amigo2'],'');
                $mail->Send();
            }
            if(isset($_POST['email_amigo3']) && $_POST['email_amigo3']){
                $mail->AddAddress($_POST['email_amigo3'],'');
                $mail->Send();
            }
            echo 'Sus datos se envíaron correctamente.';

        }else{
            echo 'No se puedo envíar sus datos correctamente, por favor intentelo mas tarde.';
        }

    }else{
        echo 'Faltaron campos por ingresar.';
    }
}
?>