<?php
/**
 * Created by PhpStorm.
 * User: larismendi
 * Date: 28/06/2015
 * Time: 05:23 PM
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
    if(empty($_POST['telef'])){
        $errores['telef'] = true;
    }
    if(empty($_POST['calle'])){
        $errores['calle'] = true;
    }
    if(empty($_POST['ciudad'])){
        $errores['ciudad'] = true;
    }
    if(empty($_POST['estado'])){
        $errores['estado'] = true;
    }
    if(empty($_POST['codigo'])){
        $errores['codigo'] = true;
    }
    if(empty($_POST['pais'])){
        $errores['pais'] = true;
    }
    if(empty($_POST['envio'])){
        $errores['envio'] = true;
    }
    if(empty($_POST['pais_destino'])){
        $errores['pais_destino'] = true;
    }
    if(empty($_POST['ciudad_destino'])){
        $errores['ciudad_destino'] = true;
    }
    if(empty($_POST['cantidad_caja'])){
        $errores['cantidad_caja'] = true;
    }
    if(empty($_POST['total'])){
        $errores['total'] = true;
    }
    if(empty($_POST['valor'])){
        $errores['valor'] = true;
    }
    if(empty($_POST['seguro'])){
        $errores['seguro'] = true;
    }
    if(empty($_POST['descripcion'])){
        $errores['descripcion'] = true;
    }
    if(!isset($errores)){
        require_once("webapp/clases/database/database.class.php");
        require_once("webapp/web/clases/desdeeeuu.class.php");
        require_once("webapp/web/clases/cajas.class.php");

        $obj =new DesdeEeuu();

        $datos = array(
            $_POST['nombre'],
            $_POST['email'],
            $_POST['telef'],
            $_POST['calle'],
            $_POST['ciudad'],
            $_POST['estado'],
            $_POST['codigo'],
            $_POST['pais'],
            $_POST['envio'],
            $_POST['cliente']?'Si':'No',
            $_POST['codigo_registro'],
            $_POST['pais_destino'],
            $_POST['ciudad_destino'],
            $_POST['cantidad_caja'],
            $_POST['valor'],
            $_POST['seguro'],
            $_POST['descripcion']
        );
        $id = $obj->insertar($datos);

        if($id){
            $obj2 =new Cajas();

            $ref = $_POST['envio']=='Aereo'?166:1728;
            $sub = 0;

            $tt = '<table width="100%" border="0" style="text-align: center">
                    <tr><th>Nro. Caja</th><th>Alto(in)</th><th>Ancho(in)</th><th>Largo(in)</th><th>Peso(lb)</th></tr>';
            for($v=1;$v<=10;$v++){
                if($_POST['alto_'.$v] && $_POST['alto_'.$v] && $_POST['largo_'.$v] && $_POST['peso_'.$v]){

                    $peso_vol = $_POST['alto_'.$v] * $_POST['alto_'.$v] * $_POST['largo_'.$v] / $ref;

                    $sub += (($peso_vol > $_POST['peso_'.$v])?$peso_vol:$_POST['peso_'.$v]);

                    $obj2->insertar($_POST['alto_'.$v], $_POST['alto_'.$v], $_POST['largo_'.$v], $_POST['peso_'.$v]);
                    $tt .= '<tr><td>'.$v.'</td><td>'.$_POST['alto_'.$v].'</td><td>'.$_POST['alto_'.$v].'</td><td>'.$_POST['largo_'.$v].'</td><td>'.$_POST['peso_'.$v].'</td></tr>';
                }
            }
            $tt .= '</table>';

            list($ent, $dec) = explode('.', $sub);
            $total = ($dec)?$ent+1:$ent;

            $obj->update_total($total, $id);

            $from    = "info@traemetodo.com";
            $subject = utf8_decode('Solicitud de envio desde EEUU a la web traemetodo.com');

            $htmlx   = '';

            require_once('webapp/PHPMailer-master/class.phpmailer.php');

            $mail = new PHPMailer(); // defaults to using php "mail()"

            $mail->IsSendmail(); // telling the class to use SendMail transport

            $body = file_get_contents('webapp/mail/desdeeeuu/basic.html');

            $body = eregi_replace("[\]",'',$body);
            $body = eregi_replace("{nombre}",$_POST['nombre'],$body);
            $body = eregi_replace("{email}",$_POST['email'],$body);
            $body = eregi_replace("{telef}",$_POST['telef'],$body);
            $body = eregi_replace("{calle}",$_POST['calle'],$body);
            $body = eregi_replace("{ciudad}",$_POST['ciudad'],$body);
            $body = eregi_replace("{estado}",$_POST['estado'],$body);
            $body = eregi_replace("{codigo}",$_POST['codigo'],$body);
            $body = eregi_replace("{pais}",$_POST['pais'],$body);
            $body = eregi_replace("{envio}",$_POST['envio'],$body);
            $body = eregi_replace("{cliente}",$_POST['cliente'],$body);
            if($_POST['cliente'] == 1){
                $body = eregi_replace("{codigo_registro}",'<br>Codigo de Registro: '.$_POST['codigo_registro'],$body);
            }else{
                $body = eregi_replace("{codigo_registro}",'',$body);
            }
            $body = eregi_replace("{pais_destino}",$_POST['pais_destino'],$body);
            $body = eregi_replace("{ciudad_destino}",$_POST['ciudad_destino'],$body);
            $body = eregi_replace("{cantidad_caja}",$_POST['cantidad_caja'],$body);
            $body = eregi_replace("{total}",$_POST['total'],$body);
            $body = eregi_replace("{valor}",$_POST['valor'],$body);
            $body = eregi_replace("{seguro}",$_POST['seguro'],$body);
            $body = eregi_replace("{descripcion}",$_POST['descripcion'],$body);
            $body = eregi_replace("{tt}",$tt,$body);
            $body = eregi_replace("{url}",$obj->con->url,$body);

            $mail->SetFrom   ($from,'traemetodo');

            $mail->AddReplyTo($from,'traemetodo');

            $mail->AddAddress($_POST['email'],$_POST['nombre']);

            $mail->Subject = $subject;

            $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

            $mail->MsgHTML($body);

            //$mail->AddAttachment("images/phpmailer.gif");      // attachment
            //$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

            if($mail->Send()) {

                $mail2 = new PHPMailer(); // defaults to using php "mail()"

                $mail2->IsSendmail(); // telling the class to use SendMail transport

                $body = file_get_contents('webapp/mail/desdeeeuu/copy.html');

                $body = eregi_replace("[\]",'',$body);
                $body = eregi_replace("{nombre}",$_POST['nombre'],$body);
                $body = eregi_replace("{email}",$_POST['email'],$body);
                $body = eregi_replace("{telef}",$_POST['telef'],$body);
                $body = eregi_replace("{calle}",$_POST['calle'],$body);
                $body = eregi_replace("{ciudad}",$_POST['ciudad'],$body);
                $body = eregi_replace("{estado}",$_POST['estado'],$body);
                $body = eregi_replace("{codigo}",$_POST['codigo'],$body);
                $body = eregi_replace("{pais}",$_POST['pais'],$body);
                $body = eregi_replace("{envio}",$_POST['envio'],$body);
                $body = eregi_replace("{cliente}",$_POST['cliente'],$body);
                $body = eregi_replace("{codigo_registro}",$_POST['codigo_registro'],$body);
                $body = eregi_replace("{pais_destino}",$_POST['pais_destino'],$body);
                $body = eregi_replace("{ciudad_destino}",$_POST['ciudad_destino'],$body);
                $body = eregi_replace("{cantidad_caja}",$_POST['cantidad_caja'],$body);
                $body = eregi_replace("{total}",$_POST['total'],$body);
                $body = eregi_replace("{valor}",$_POST['valor'],$body);
                $body = eregi_replace("{seguro}",$_POST['seguro'],$body);
                $body = eregi_replace("{descripcion}",$_POST['descripcion'],$body);
                $body = eregi_replace("{tt}",$tt,$body);
                $body = eregi_replace("{url}",$obj->con->url,$body);

                $mail2->SetFrom   ($from,'traemetodo');

                $mail2->AddReplyTo($from,'traemetodo');

                $mail2->AddAddress($obj->con->email,'traemetodo');

                $mail2->Subject = $subject;

                $mail2->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

                $mail2->MsgHTML($body);

                $mail2->Send();

                echo false;
            }else{
                echo 'No se puedo envíar sus datos correctamente, por favor intentelo mas tarde.';
            }
        }else{
            echo 'No se pudo crear su solicitud.';
        }
    }else{
        echo 'Faltaron campos por ingresar.';
    }
}else{
    echo 'No se puedo enviar su solicitud.';
}
?>