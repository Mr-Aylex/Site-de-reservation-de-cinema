<?php
/**
 *Message utilisateur
 */
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$manager = new manager();


if(isset($_POST["submit"])){

  $mailto = $_POST["mail"];
  // Load Composer's autoloader
  require '../vendor/autoload.php';
  // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$request = $manager->connexion_bd()->prepare('INSERT INTO message(nom,prenom,mail,message) VALUES(:nom,:prenom,:mail,:message)');
    $tab = $request->execute(array(
            "nom" =>$_POST["nom"],
            "prenom" =>$_POST["prenom"],
            "mail" =>$_POST["mail"],
            "message" =>$_POST["message"]
    ));
  // Load Composer's autoloader
  require '../vendor/autoload.php';
  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);
  try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'sullivan.sextius@gmail.com';                     // SMTP username
      $mail->Password   = 'mk8yi7eaqM';                               // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to
      //Recipients
      $mail->setFrom('sullivan.sextius@gmail.com', 'Sullivan');
      $mail->addAddress($mailto);     // Add a recipient
    if(isset($mail)){
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Message Cine Views ';
      $mail->Body    = "<p>Merci pour votre Message !</p>";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail client';
      $mail->send();
      //on redririge
      header("Location:../index.php");
  }
  }
  //on affiche
   catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }


}





?>
