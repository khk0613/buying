<?php 
    header('Content-Type: text/html; charset=utf-8');
    
    require_once('../_token.php');

    if (in_array($_POST['_token'], $tokens)) {
        $u_name = $_POST['name'];
        $u_email = $_POST['email'];
        $u_category = $_POST['category'];
        $u_quotation = nl2br($_POST['content']);

        // echo $u_name . '<br/>';
        // echo $u_email . '<br/>';
        // echo $u_category . '<br/>';
        // echo $u_quotation . '<br/>';
        
        foreach($_REQUEST as $key => $value) {
            // echo "<input type='hidden' name='".$key."' value='".$value."' />";
        }

        mb_language('ja');
        mb_internal_encoding('UTF-8');


        require 'PHPMailerAutoload.php';

        $mail = new PHPMailer;
        $mail->charSet = "UTF-8";
        $mail->From = "{$u_email}";
        $mail->FromName = mb_encode_mimeheader("{$u_name} :: {$u_category}", "ISO-2022-JP-MS");
        $mail->addAddress('big1208@naver.com', 'Buying');     // Add a recipient
        $mail->addReplyTo('khk0613@cside.co.kr', 'Information');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = mb_encode_mimeheader("{$u_name} :: {$u_category}", "ISO-2022-JP-MS"); 
        $mail->Body    = mb_convert_encoding("Name : {$u_name} <br />  Email : {$u_email} <br /> Category : {$u_category} <br /><hr /><br /> {$u_quotation}", "ISO-2022-JP-MS", "UTF-8");;
        $mail->AltBody = "";

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }          
    }

?>