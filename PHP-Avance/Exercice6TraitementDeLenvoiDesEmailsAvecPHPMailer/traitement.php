<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;


$mail = new PHPMailer(true);


$nom = (isset($_POST['nom'])) ? $_POST['nom'] : null;
$prenom = (isset($_POST['prenom'])) ? $_POST['prenom'] : null;
$email = (isset($_POST['email'])) ? $_POST['email'] : null;
$commentaires = (isset($_POST['commentaires'])) ? $_POST['commentaires'] : null;
$text .= Stripslashes($commentaires);
$fichier = (isset($_POST['fichier'])) ? $_POST['fichier'] : null;

// var_dump($mail);


try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    // $mail->isSMTP(); //Send using SMTP
    // $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    // $mail->SMTPAuth = true; //Enable SMTP authentication
    // $mail->Username = 'user@example.com'; //SMTP username
    // $mail->Password = 'secret'; //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Enable implicit TLS encryption
    // $mail->Port = "587"; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    // $mail->setFrom('mateusz.pawlicha@gmail.com', 'Mailer');
    // $mail->addAddress('ellen@example.com'); //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    $mail->Username = 'Mathieu';
    $mail->Password = '';
    // $mail->Subject = 'test Email Message PHPMailer';
    $mail->From = $email;
    // $mail->setFrom('mateusz.pawlicha@gmail.com', 'Mailer');
    // $mail->addAddress("mateusz.pawlicha@gmail.com", "Mathieu");
    

    $mail->CharSet = 'UTF-8'; 
    $mail->MsgHTML(nl2br($text));
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Activation de votre compte';
    $mail->Body = 'Bonjour ' . $nom . ' ' . $prenom . '<br>La messagerie fonctionne<br> Merci';
    $mail->addAddress('mateusz.pawlicha@gmail.com');
    if (isset($_FILES['fichier']) && ($_FILES['fichier']['error'] == 0)) {
        $fichier = $_FILES['fichier']['name'];
        $chemin = $_FILES['fichier']['tmp_name'];
        $mail->Subject = 'Ce message a une pièce jointe '.$fichier;
        $mail->AddAttachment($chemin,$fichier);
        echo "Le fichier $fichier se trouve à l'emplacement $chemin <br />";
        }
        else {
        $mail->Subject = "Ce message n'a pas de pièce jointe ";
        echo "Pas de pièce jointe <br />";
        }
        
    $mail->send();
    
} catch (Exception $e) {
    echo 'Message non envoyé';
    echo 'Erreur: ' . $mail->ErrorInfo;
}

$mail->smtpClose();