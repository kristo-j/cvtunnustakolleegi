<?php
  use phpmailer\PHPMailer;
  use phpmailer\SMTP;
  use phpmailer\Exception;

  require_once '/var/www/html/scripts/phpmailer/PHPMailer.php';
  require_once '/var/www/html/scripts/phpmailer/SMTP.php';
  
  $mail = new phpmailer\PHPMailer;
  
  try {
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'kristo.j68@gmail.com';                
    $mail->Password = 'kristo607856';                       
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = 465;                                 

    //Recipients
    $mail->setFrom($_POST['senderEmail'], $_POST['senderName']);
    $mail->addAddress($_POST['receiverEmail'], '');    
	
    //Attachments
    $mail->addAttachment("//var//www//html//tunnustused//" . $_POST['imageSrc'], 'tunnustus.png');         


	
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Tunnustatud kolleeg';
	$mail->Body    = $_POST['messageBody'];

    $mail->send();
    
	return true;
  } catch (Exception $e) {
	return false;
  }
  
?>